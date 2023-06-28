<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'user') {
                $token = $user->createToken('api_token')->plainTextToken;
                $id =$user->id;
                return response()->json([
                    'message' => 'Login successful',
                    'user'    => $user,
                    'token'   => $token,
                    'id'      => $id,
                ]);
            }
        }

        return response()->json([
            'message' => 'Invalid credentials',
        ], 401);
    }

    // public function login(Request $request){
    //     $input = $request->all();
    //     // dd($request->all());
    //     $this->validate($request,[
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);
    //     if(Auth::attempt(['email'=>$input["email"], 'password'=>$input["password"]]))
    //     {
    //         if(Auth::user()->role == 'admin')
    //         {
    //             return redirect()->route('admin.dashboard');
    //         }
    //         else if(Auth::user()->role == 'user')
    //         {
    //             return redirect()->route('home');
    //         }
    //     } else {
    //         return redirect()->route("login")->with("error", 'Incorrect email or password');
    //     }
    // }
}
