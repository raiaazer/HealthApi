@extends('layouts.layout')

@section('body')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Edit /</span> Recipe</h4>

    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Update Details</h5>
                <div class="card-body">
                    <form id="formValidationExamples" enctype="multipart/form-data"  class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" action="{{ route('recipes.update', ['id' => $recipe->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Account Details -->
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationName" class="form-control" placeholder="Name" name="name" value="{{ $recipe->name }}">
                                <label for="formValidationName">Name</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationTitle" class="form-control" placeholder="Ingredients" name="ingredients" value="{{ $recipe->ingredients }}">
                                <label for="formValidationTitle">Ingredients</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>

                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                @if ($recipe->thumbnail)
                                <input type="file" id="formValidationThumbnail" class="form-control" name="thumbnail">
                                <img src="{{ Storage::url($recipe->thumbnail) }}" height="50px" width="50px" alt="" class="rounded-circle m-2">

                                @else
                                    <input type="file" id="formValidationThumbnail" class="form-control" name="thumbnail">
                                @endif
                                <label for="formValidationThumbnail">Old Thumbnail</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating form-floating-outline">
                                <select id="formValidationSelect2" name="calculator_name" class="form-select select2" data-allow-clear="true">
                                    <option value="">Select</option>
                                    <option value="BMI" {{ $recipe->calculator_name === 'BMI' ? 'selected' : '' }}>BMI</option>
                                    <option value="BMR" {{ $recipe->calculator_name === 'BMR' ? 'selected' : '' }}>BMR</option>
                                    <option value="Calorie Calculator" {{ $recipe->calculator_name === 'Calorie Calculator' ? 'selected' : '' }}>Calorie Calculator</option>
                                    <option value="Heart Rate" {{ $recipe->calculator_name === 'Heart Rate' ? 'selected' : '' }}>Heart Rate</option>
                                    <option value="Blood Pressure" {{ $recipe->calculator_name === 'Blood Pressure' ? 'selected' : '' }}>Blood Pressure</option>
                                    <option value="Sugar Level" {{ $recipe->calculator_name === 'Sugar Level' ? 'selected' : '' }}>Sugar Level</option>
                                </select>
                                <label for="formValidationSelect2">Calculator Name</label>
                            </div>
                        </div>

                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationInstructions" name="instructions" placeholder="Instructions" rows="3">{{ $recipe->instructions }}</textarea>
                                <label for="formValidationInstructions">Instructions</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationTime" class="form-control" placeholder="Time" name="time" value="{{ $recipe->time }}">
                                <label for="formValidationTime">Time</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationServing" class="form-control" placeholder="Serving" name="serving" value="{{ $recipe->serving }}">
                                <label for="formValidationServing">Serving</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationCalories" class="form-control" placeholder="Calories" name="calories" value="{{ $recipe->calories }}">
                                <label for="formValidationCalories">Calories</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationNetCarbs" class="form-control" placeholder="Net Carbs" name="net_carbs" value="{{ $recipe->net_carbs }}">
                                <label for="formValidationNetCarbs">Net Carbs</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationCarbs" class="form-control" placeholder="Carbs" name="carbs" value="{{ $recipe->carbs }}">
                                <label for="formValidationCarbs">Carbs</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationFat" class="form-control" placeholder="Fat" name="fat" value="{{ $recipe->fat }}">
                                <label for="formValidationFat">Fat</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="formValidationProteins" class="form-control" placeholder="Proteins" name="proteins" value="{{ $recipe->proteins }}">
                                <label for="formValidationProteins">Proteins</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationNutrients" name="nutrients" placeholder="Nutrients" rows="3">{{ $recipe->nutrients }}</textarea>
                                <label for="formValidationNutrients">Nutrients</label>
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 fv-plugins-icon-container">
                            <div class="form-floating form-floating-outline">
                                <textarea class="form-control h-px-100" id="formValidationBenefits" name="benefits" placeholder="Benefits" rows="3">{{ $recipe->benefits }}</textarea>
                                <label for="formValidationBenefits">Benefits</label>
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
