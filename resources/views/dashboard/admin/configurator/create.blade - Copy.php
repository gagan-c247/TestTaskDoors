@extends('dashboard.base')
@section('content')
<style>
label.error{
    color: red;
}
</style>
<div class="container-fluid">
    <div class="wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('configurator.store')}}" id="wizard" method="POST" autocomplete="off" enctype="multipart/form-data">
            @csrf
            {{-- Step 1 --}}
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="form-content" >
                        <div class="form-header">
                            <h3 class="heading-medium">Base Option</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Series<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="series" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('series')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Product Type<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="product_type" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('product_type')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Door Opening Type<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="door_opening_type" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('door_opening_type')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Opening Option<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="opening_option" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('opening_option')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Standerd Size<span class="text-danger">*</span></label>
                                    <div class="radio sidebar-item">
                                        <input type="radio" name="standerd_size" id="value1" value="1">
                                        <label for="value1">Value 1</label>&nbsp;&nbsp;
                                        <input type="radio" name="standerd_size" id="value2" value="2">
                                        <label for="value2">Value 2</label>&nbsp;&nbsp;
                                        <input type="radio" name="standerd_size" id="value3" value="3">
                                        <label for="value3">Value 3</label>
                                    </div>
                                    @error('standerd_size')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Step 2 --}}
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="form-content select_location">
                        <div class="form-header">
                            <h3 class="heading-medium">Door</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Ratting<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="ratting" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('ratting')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Core Material<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="core_material" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('core_material')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Agency<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="agency" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('agency')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Step 3 --}}
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="form-content">
                        <div class="form-header">
                            <h3 class="heading-medium">Face</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Face Type<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="face_type" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('face_type')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Cut<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="cut" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('cut')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Grade<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="grade" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('grade')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- Step 4 --}}
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="form-content">
                        <div class="form-header">
                            <h3 class="heading-medium">Hardware's</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hardware Type<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="hardware_type" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('hardware_type')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Sub Category<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="sub_category" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('sub_category')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hinge Height<span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="hinge_height" class="form-control">
                                            <option value="" disabled selected>Select</option>
                                            <option value="1">Value 1</option>
                                            <option value="2">Value 2</option>
                                            <option value="3">Value 3</option>
                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    @error('hinge_height')
                                        <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <input type="submit" style="display:none" id="user_submit_button">  
        </form>
    </div>
</div>
@endsection

@section('javascript')
<script src="{{ asset('assets/backend/configurator/configurator.js') }}"></script>
@endsection