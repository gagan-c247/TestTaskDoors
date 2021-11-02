@extends('dashboard.authBase')
@section('content')
<style>
body {
    background: #dcdcdc !important;
}
label.error{
    color: red;
}
</style>
<section class="login-signup-page">
    <div class="container">
        <div class="wrapper">
            <div class="login-page-logo text-center">
                <a href="{{ url('/home') }}"><img src="{{ asset('images/logo-white.png') }}"></a>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="{{ route('register') }}" id="wizard" method="post" autocomplete="off" enctype="multipart/form-data" class="">
                @csrf
                <input type="hidden" name="name" value="My Name">
                <input type="hidden" name="password" value="Password@123">
                <input type="hidden" name="password_confirmation" value="Password@123">
                <!-- SECTION 1 -->
                <h2></h2>
                <section data-step="0">
                    <div class="inner">
                        <div class="form-content" >
                            <div class="form-header">
                                <h3 class="heading-medium">Company Details</h3>
                            </div>
                            <div class="row row-wrap">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Name <span class="text-danger">*</span></label>
                                        <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" class="form-control" placeholder="" data-fv-icon-for="company_name">
                                        @error('company_name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Registration Year <span class="text-danger">*</span></label>
                                        <input type="number" min="1" name="company_reg_year" value="{{ old('company_reg_year') }}" class="form-control" placeholder="">
                                        @error('company_reg_year')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Registration Number</label>
                                        <input type="text" name="company_reg_num" value="{{ old('company_reg_num') }}" class="form-control" placeholder="">
                                        @error('company_reg_num')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="company_phone" value="{{ old('company_phone') }}" maxlength="10" class="form-control" placeholder="">
                                        @error('company_phone')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>No. of Company Modeling Machine <span class="text-danger">*</span></label>
                                        <input type="text" name="company_nu_molding_machines" value="{{ old('company_nu_molding_machines') }}" class="form-control" placeholder="">
                                        @error('company_nu_molding_machines')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>No. of Company Sites <span class="text-danger">*</span></label>
                                        <input type="text" name="companey_nu_sites" value="{{ old('companey_nu_sites') }}" class="form-control" placeholder="">
                                        @error('companey_nu_sites')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                {{--<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Upload Company Registration Doc <span class="text-danger">*</span></label>
                                        <span class="dragBox">
                                            Click to upload <i class="fa fa-upload ml-2" aria-hidden="true"></i><br>
                                            <input type="file" name="company_reg_doc" id="uploadFile" class="form-control">
                                        </span>
                                        <span id="fileName"></span>
                                        @error('company_reg_doc')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 2 -->
                <h2></h2>
                <section data-step="1">
                    <div class="inner">
                        <div class="form-content">
                            <div class="form-header">
                                <h3 class="heading-medium">Company Address Details</h3>
                            </div>
                            <div class="row row-wrap">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Address Line 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="company_address_line_1" value="{{ old('company_address_line_1') }}" placeholder="" class="form-control">
                                        @error('company_address_line_1')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Address Line 2</label>
                                        <input type="text" name="company_address_line_2" value="{{ old('company_address_line_2') }}" class="form-control" placeholder="">
                                        @error('company_address_line_2')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company Zip Code <span class="text-danger">*</span></label>
                                        <input type="text" name="company_address_zip" maxlength="20" value="{{ old('company_address_zip') }}" class="form-control" placeholder="">
                                        @error('company_address_zip')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company City <span class="text-danger">*</span></label>
                                        <input type="text" name="company_address_city" value="{{ old('company_address_city') }}" placeholder="" class="form-control">
                                        @error('company_address_city')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Select Company Country <span class="text-danger">*</span></label>
                                        @php
                                            $allCountry = DB::table('countries')->get();
                                        @endphp
                                        <div class="custom-dropdown">
                                            <select name="company_address_country" value="{{ old('company_address_country') }}" class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach($allCountry as $country)
                                            <option value="{{ $country->name }}" {{ old('company_address_country') != '' &&  old('company_address_country') == $country->name ? 'selected' : ''}}>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                            <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                        </div>
                                        @error('company_address_country')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company State <span class="text-danger">*</span></label>
                                        <input type="text" name="company_address_state" value="{{ old('company_address_state') }}" class="form-control" placeholder="">
                                        @error('company_address_state')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 3 -->
                <h2></h2>
                <section data-step="2">
                    <div class="inner">
                        <div class="form-content">
                            <div class="form-header">
                                <h3 class="heading-medium">Personal Details</h3>
                            </div>
                            <div class="row row-wrap">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="" class="form-control">
                                        @error('first_name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input type="text" name="middle_name" value="{{ old('middle_name') }}" class="form-control" placeholder="">
                                        @error('middle_name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="">
                                        @error('last_name')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-danger">*</span></label>
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="">
                                        @error('email')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designation <span class="text-danger">*</span></label>
                                        <input type="text" name="designation" value="{{ old('designation') }}" placeholder="" class="form-control">
                                        @error('designation')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" name="phone_nu" value="{{ old('phone_nu') }}" class="form-control" maxlength="10" placeholder="">
                                        @error('phone_nu')
                                            <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <input type="submit" style="display:none" id="user_submit_button">
            </form>
            <p class="text-center mt-3 mb-0">Already have an account ? <a href="{{ route('login') }}" class="color-red darkred">Sign in</a></p>
        </div>
    </div>
</section>
@endsection
@section('javascript')

<script src="{{ asset('js/form-main.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#fileName').text('The file "' + fileName +  '" has been selected.');
        });
    });
</script>
@endsection
