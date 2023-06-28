<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     //
    // }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if ($user->id == 1) {
            return response()->json(['message' => 'Invalid User Details'], 404);
        }

        return response()->json(['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     //
    // }
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if ($user->id == 1) {
            return response()->json(['message' => 'Invalid User Details'], 404);
        }

        $data = $request->validate([
            'name'          => 'nullable',
            'email'         => 'nullable|email|unique:users,email,' . $id,
            'password'      => 'nullable|min:6',
            'phone'         => 'nullable',
            'd_o_b'         => 'nullable',
            'height'        => 'nullable',
            'height_unit'   => 'nullable',
            'weight'        => 'nullable',
            'weight_unit'   => 'nullable',
            'gender'        => 'nullable',
        ]);

        if (!empty($data['name'])) {
            $user->name = $data['name'];
        }

        if (!empty($data['email'])) {
            $user->email = $data['email'];
        }

        if (!empty($data['password'])) {
            $user->password = Hash::make($data['password']);
        }

        $user->phone = $data['phone'] ?? $user->phone;
        $user->d_o_b = $data['d_o_b'] ?? $user->d_o_b;
        $user->height = $data['height'] ?? $user->height;
        $user->height_unit = $data['height_unit'] ?? $user->height_unit;
        $user->weight = $data['weight'] ?? $user->weight;
        $user->weight_unit = $data['weight_unit'] ?? $user->weight_unit;
        $user->gender = $data['gender'] ?? $user->gender;

        $user->save();

        return response()->json(['message' => 'User profile updated successfully', 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
