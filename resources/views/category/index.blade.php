@extends('layouts.layout')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4">Categories</h4>

<!-- Hoverable Table rows -->
<div class="card">
    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start mt-md-0 mt-3">
        <div class="dt-buttons btn-group flex-wrap">
            <a class="btn btn-secondary btn-primary m-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" href="{{ route('categories.create') }}">
                <span>
                    <i class="mdi mdi-plus me-md-1"></i>
                    <span class="d-md-inline-block d-none">Create Category</span>
                </span>
            </a>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Calculator Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @foreach ($categories as $category)
        <tr>
            <td>
            <strong>{{ $category->calculator_name }}</strong>
            </td>
            <td>{{ $category->title }}</td>

            <td>{{ substr($category->description, 0, 30) . (strlen($category->description) > 30 ? '...' : '') }}
            </td>
            <td>
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="mdi mdi-dots-vertical"></i>
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item waves-effect" href="{{ route('categories.edit', ['id' => $category->id]) }}">
                    <i class="mdi mdi-pencil-outline me-1"></i> Edit
                </a>
                {{-- <a class="dropdown-item waves-effect" href="javascript:void(0);"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a> --}}
                <a class="dropdown-item waves-effect" href="{{ route('categories.destroy', ['id' => $category->id]) }}"
                    onclick="event.preventDefault(); document.getElementById('delete-category-{{ $category->id }}').submit();">
                    <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                </a>

                <!-- Delete Form -->
                <form id="delete-category-{{ $category->id }}" action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST" style="display: none;">
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
