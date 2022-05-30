@extends('dashboard.base')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    label.error {
        color: red;
    }
    .select2-container--default.select2-container--focus .select2-selection--multiple,
    .select2-container--default .select2-selection--multiple {
        border: solid #e6e6e6 1px !important;
    }
    .select2-container--default.select2-container.select2 {
        width: 100% !important;
    }
    label {
        font-weight: 600;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 col-7">
                                <h5 class="card-title mb-0">Configurator Product</h5>
                            </div>
                            <div class="col-md-6 col-5">
                                <div class="text-right">
                                    <a href="{{url('/admin/configurator')}}" class="btn addbtn">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="configurator-form" action="{{route('configurator.store')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header"><strong>Configurator Detail</strong></div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Base Option<span class="text-danger">*</span></label>
                                                <select name="base_option[]" class="form-control base-option" multiple="multiple">
                                                    <option value="1">Value 1</option>
                                                    <option value="2">Value 2</option>
                                                    <option value="3">Value 3</option>
                                                </select>
                                                @error('base_option')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Door<span class="text-danger">*</span></label>
                                                <select name="door[]" class="form-control door" multiple="multiple">
                                                    <option value="1">Value 1</option>
                                                    <option value="2">Value 2</option>
                                                    <option value="3">Value 3</option>
                                                </select>
                                                @error('door')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Face<span class="text-danger">*</span></label>
                                                <select name="face[]" class="form-control face" multiple="multiple">
                                                    <option value="1">Value 1</option>
                                                    <option value="2">Value 2</option>
                                                    <option value="3">Value 3</option>
                                                </select>
                                                @error('face')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Hardware's<span class="text-danger">*</span></label>
                                                <select name="hardware[]" class="form-control hardware" multiple="multiple">
                                                    <option value="1">Value 1</option>
                                                    <option value="2">Value 2</option>
                                                    <option value="3">Value 3</option>
                                                </select>
                                                @error('hardware')
                                                    <span class="text text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <input type="submit" class="btn addbtn" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        $('.base-option').select2({
            allowClear: true,
            placeholder: 'Select',
        });

        $('.door').select2({
            allowClear: true,
            placeholder: 'Select',
        });

        $('.face').select2({
            allowClear: true,
            placeholder: 'Select',
        });

        $('.hardware').select2({
            allowClear: true,
            placeholder: 'Select',
        });
    });
</script>
@endsection