@extends('layouts.layout')
@section('css')

@endsection
@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Create /</span> Recipe</h4>

    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Enter Details</h5>
                <div class="card-body">
                    <form id="formValidationExamples" enctype="multipart/form-data" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="{{ route('recipes.store') }}" method="POST">
                        @csrf
                        <!-- Account Details -->
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationName" class="form-control" placeholder="Name" name="name">
                                <label for="formValidationName">Name</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationIngredients" class="form-control" placeholder="Ingredients" name="ingredients">
                                <label for="formValidationIngredients">Ingredients</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" class="form-control" id="basic-default-upload-file" name="thumbnail" required="">
                                <label for="basic-default-upload-file">Thumbnail</label>
                            </div>
                        </div>
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
                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationInstructions" name="instructions" placeholder="Instructions" rows="3"></textarea>
                                <label for="formValidationInstructions">Instructions</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationTime" class="form-control" placeholder="Time" name="time">
                                <label for="formValidationTime">Time</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationServing" class="form-control" placeholder="Serving" name="serving">
                                <label for="formValidationServing">Serving</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationCalories" class="form-control" placeholder="Calories" name="calories">
                                <label for="formValidationCalories">Calories</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationNetCarbs" class="form-control" placeholder="Net Carbs" name="net_carbs">
                                <label for="formValidationNetCarbs">Net Carbs</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationCarbs" class="form-control" placeholder="Carbs" name="carbs">
                                <label for="formValidationCarbs">Carbs</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationFat" class="form-control" placeholder="Fat" name="fat">
                                <label for="formValidationFat">Fat</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="number" id="formValidationProteins" class="form-control" placeholder="Proteins" name="proteins">
                                <label for="formValidationProteins">Proteins</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationNutrients" name="nutrients" placeholder="Nutrients" rows="3"></textarea>
                                <label for="formValidationNutrients">Nutrients</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationBenefits" name="benefits" placeholder="Benefits" rows="3"></textarea>
                                <label for="formValidationBenefits">Benefits</label>
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

@section('script')

<!-- Page JS -->
<script src="{{ asset('assets/js/forms-file-upload.js') }}"></script>
@endsection
