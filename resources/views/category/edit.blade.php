@extends('layouts.layout')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Category</h4>

<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
    <div class="card">
        <h5 class="card-header">Update Details</h5>
        <div class="card-body">
            <form id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                        <select id="formValidationSelect2" name="calculator_name" class="form-select select2" data-allow-clear="true">
                            <option value="">Select</option>
                            <option value="BMI" {{ $category->calculator_name === 'BMI' ? 'selected' : '' }}>BMI</option>
                            <option value="BMR" {{ $category->calculator_name === 'BMR' ? 'selected' : '' }}>BMR</option>
                            <option value="Calorie Calculator" {{ $category->calculator_name === 'Calorie Calculator' ? 'selected' : '' }}>Calorie Calculator</option>
                            <option value="Heart Rate" {{ $category->calculator_name === 'Heart Rate' ? 'selected' : '' }}>Heart Rate</option>
                            <option value="Blood Pressure" {{ $category->calculator_name === 'Blood Pressure' ? 'selected' : '' }}>Blood Pressure</option>
                            <option value="Sugar Level" {{ $category->calculator_name === 'Sugar Level' ? 'selected' : '' }}>Sugar Level</option>
                        </select>
                        <label for="formValidationSelect2">Calculator Name</label>
                    </div>
                </div>

                <div class="col-md-6 fv-plugins-icon-container">
                    <div class="form-floating form-floating-outline">
                        <input type="text" id="formValidationTitle" class="form-control" placeholder="Title" name="title" value="{{ $category->title }}">
                        <label for="formValidationTitle">Title</label>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-md-12 fv-plugins-icon-container">
                    <div class="form-floating form-floating-outline">
                        <textarea class="form-control h-px-100" id="formValidationDescription" name="description" placeholder="Description" rows="3">{{ $category->description }}</textarea>
                        <label for="formValidationDescription">Description</label>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </form>



        </div>
    </div>
    </div>
    <!-- /FormValidation -->
</div>
</div>
@endsection
