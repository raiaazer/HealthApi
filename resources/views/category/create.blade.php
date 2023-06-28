@extends('layouts.layout')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Create /</span> Category</h4>

<div class="row">
    <!-- FormValidation -->
    <div class="col-12">
    <div class="card">
        <h5 class="card-header">Enter Details</h5>
        <div class="card-body">
            <form id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <div class="form-floating form-floating-outline">
                      <select
                        id="formValidationSelect2"
                        name="calculator_name"
                        class="form-select select2"
                        data-allow-clear="true">
                        <option value="">Select</option>
                        <option value="BMI">BMI</option>
                        <option value="BMR">BMR</option>
                        <option value="Calorie Calculator">Calorie Calculator</option>
                        <option value="Heart Rate">Heart Rate</option>
                        <option value="Blood Pressure">Blood Pressure</option>
                        <option value="Sugar Level">Sugar Level</option>

                      </select>
                      <label for="formValidationSelect2">Calculator Name</label>
                    </div>
                </div>
                <div class="col-md-6 fv-plugins-icon-container">
                    <div class="form-floating form-floating-outline">
                        <input type="text" id="formValidationTitle" class="form-control" placeholder="Title" name="title">
                        <label for="formValidationTitle">Title</label>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-md-12 fv-plugins-icon-container">
                    <div class="form-floating form-floating-outline">
                        <textarea class="form-control h-px-100" id="formValidationDescription" name="description" placeholder="Description" rows="3"></textarea>
                        <label for="formValidationDescription">Description</label>
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Create</button>
                </div>
            </form>

        </div>
    </div>
    </div>
    <!-- /FormValidation -->
</div>
</div>
@endsection
