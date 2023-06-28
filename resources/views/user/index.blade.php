@extends('layouts.layout')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">Users</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
        <div class="dt-buttons btn-group flex-wrap">
            <a class="btn btn-secondary btn-primary m-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" href="{{ route('recipes.create') }}">
                <span>
                    <i class="mdi mdi-plus me-md-1"></i>
                    <span class="d-md-inline-block d-none">Create User</span>
                </span>
            </a>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>Height</th>
                    <th>Height Unit</th>
                    <th>Weight</th>
                    <th>Weight Unit</th>
                    <th>Gender</th>

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    {{-- <td>
                        <img src="{{ Storage::url($recipe->thumbnail) }}" height="50px" width="50px" alt="thumbnail" class="rounded-circle">
                    </td> --}}

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->id }}</td>

                    <td>{{ substr($recipe->nutrients, 0, 30) . (strlen($recipe->nutrients) > 30 ? '...' : '') }}</td>
                    <td>{{ substr($recipe->benefits, 0, 30) . (strlen($recipe->benefits) > 30 ? '...' : '') }}</td>

                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item waves-effect" href="{{ route('recipes.edit', ['id' => $recipe->id]) }}">
                                    <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                </a>
                                <a class="dropdown-item waves-effect" href="{{ route('recipes.destroy', ['id' => $recipe->id]) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-recipe-{{ $recipe->id }}').submit();">
                                    <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                </a>

                                <form id="delete-recipe-{{ $recipe->id }}" action="{{ route('recipes.destroy', ['id' => $recipe->id]) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--/ Hoverable Table rows -->
</div>

@endsection
