@extends('dashboard.authBase')
@section('content')

<section class="signup-sec bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
    <div class="container" id="grad1">
        <div class="row">
            <div class="col-md-12">
                <div class="step-form">  
                    <form method="POST" id="msform" action="{{ route('register') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="name" value="My Name">
                        <input type="hidden" name="password" value="Password@123">
                        <input type="hidden" name="password_confirmation" value="Password@123">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="stepNo active company"><strong>Company Details</strong></li>
                            <li class="stepNo address"><strong>Address Details</strong></li>
                            <li class="stepNo contact"><strong>Contact Person Details</strong></li>
                            <li class="stepNo finish"><strong>Finish</strong></li>
                        </ul>
                        <fieldset class="step1">
                            <div class="form-content text-left">
                                <div class="form-header">
                                    <h3 class="heading-medium text-white">Company Details</h3>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Name <span class="text-danger">*</span></label>
                                            <input type="text" name="company_name" maxlength="250" id="company_name" value="{{ old('company_name') }}" class="form-control" placeholder="" data-fv-icon-for="company_name">
                                            @error('company_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_name-error" class="text-danger" style="display: none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Registration Year <span class="text-danger">*</span></label>
                                            <input type="text" maxlength="4" min="1" name="company_reg_year" id="company_reg_year" value="{{ old('company_reg_year') }}" class="form-control" placeholder="">
                                            @error('company_reg_year')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_reg_year-error" class="text-danger" style="display: none;">This field is required.</span>
                                            <span id="company_reg_year_num-error" class="text-danger" style="display: none;">Please enter numbers only.</span>
                                            <span id="company_reg_year_len-error" class="text-danger" style="display: none;">Year value must be 4 digits.</span>
                                            <span id="company_reg_year_val-error" class="text-danger" style="display: none;">Year must be grater than 1800.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Registration Number</label>
                                            <input type="text" name="company_reg_num" id="company_reg_num" value="{{ old('company_reg_num') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Phone Number <span class="text-danger">*</span></label>
                                            <input type="number" name="company_phone" id="company_phone" value="{{ old('company_phone') }}" minlength="8" maxlength="10" class="form-control" placeholder="">
                                            @error('company_phone')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_phone-error" class="text-danger" style="display: none;">This field is required.</span>
                                            <span id="company_phone_num-error" class="text-danger" style="display: none;">Please enter numbers only.</span>
                                            <span id="company_phone_len-error" class="text-danger" style="display: none;">Please enter valid phone number.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>No. of Company Modeling Machine <span class="text-danger">*</span></label>
                                            <input type="text" name="company_nu_molding_machines" maxlength="5" id="company_nu_molding_machines" value="{{ old('company_nu_molding_machines') }}" class="form-control" placeholder="">
                                            @error('company_nu_molding_machines')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_nu_molding_machines-error" class="text-danger" style="display: none;">This field is required.</span>
                                            <span id="company_nu_molding_machines_num-error" class="text-danger" style="display: none;">Please enter only numbers.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>No. of Company Sites <span class="text-danger">*</span></label>
                                            <input type="text" name="companey_nu_sites" maxlength="5" id="companey_nu_sites" value="{{ old('companey_nu_sites') }}" class="form-control" placeholder="">
                                            @error('companey_nu_sites')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="companey_nu_sites-error" class="text-danger" style="display: none;">This field is required.</span>
                                            <span id="companey_nu_sites_num-error" class="text-danger" style="display: none;">Please enter only numbers.</span>
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
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>

                        <fieldset class="step2">
                            <div class="form-content text-left">
                                <div class="form-header">
                                    <h3 class="heading-medium text-white">Address Details</h3>
                                </div>
                                <div class="row">
                                    {{--<div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Select Company Country <span class="text-danger">*</span></label>
                                            @php
                                                $allCountry = DB::table('countries')->get();
                                            @endphp
                                            <div class="custom-dropdown">
                                                <select name="company_address_country" id="company_address_country" value="{{ old('company_address_country') }}" class="form-control">
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
                                            <span id="company_address_country-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Country <span class="text-danger">*</span></label>
                                            <div class="custom-dropdown">
                                                <select name="company_address_country" id="company_address_country" value="{{ old('company_address_country') }}" class="form-control">
                                                <option value="">Select Country</option>
                                                @foreach($countries as $countryKey => $country)
                                                <option value="{{ $countryKey }}" {{ old('company_address_country') != '' &&  old('company_address_country') == $countryKey ? 'selected' : ''}}>{{ $country }}</option>
                                                @endforeach
                                            </select>
                                                <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                            </div>
                                            @error('company_address_country')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_country-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="">Company State <span class="text-danger">*</span></label>
                                            <div id="loader" class="lds-dual-ring hidden overlay"></div>
                                            <div class="custom-dropdown">
                                                <select name="company_address_state" id="company_address_state" class="form-control">
                                                    <option value="">Select State</option>

                                                </select>
                                                <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                            </div>
                                            @error('company_address_state')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_state-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    {{--<div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company State <span class="text-danger">*</span></label>
                                            <input type="text" id="company_address_state" name="company_address_state" value="{{ old('company_address_state') }}" class="form-control" placeholder="">
                                            @error('company_address_state')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_state-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company City <span class="text-danger">*</span></label>
                                            <div id="loader2" class="lds-dual-ring hidden overlay"></div>
                                            <div class="custom-dropdown">
                                                <select name="company_address_city" id="company_address_city" class="form-control">
                                                    <option value="">Select City</option>

                                                </select>
                                                <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                            </div>
                                            @error('company_address_city')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_city-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    {{--<div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company City <span class="text-danger">*</span></label>
                                            <input type="text" name="company_address_city" id="company_address_city" value="{{ old('company_address_city') }}" placeholder="" class="form-control">
                                            @error('company_address_city')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_city-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Address Line 1 <span class="text-danger">*</span></label>
                                            <input type="text" name="company_address_line_1" id="company_address_line_1" value="{{ old('company_address_line_1') }}" placeholder="" class="form-control">
                                            @error('company_address_line_1')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_line_1-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Address Line 2</label>
                                            <input type="text" name="company_address_line_2" value="{{ old('company_address_line_2') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Company Zip Code <span class="text-danger">*</span></label>
                                            <input type="text" name="company_address_zip" id="company_address_zip" maxlength="8" value="{{ old('company_address_zip') }}" class="form-control" placeholder="">
                                            <small class="text-white">(If your address has no zip code then fill the given number: 654321)</small>
                                            @error('company_address_zip')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="company_address_zip-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Back" /> <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>

                        <fieldset class="step3">
                            <div class="form-content text-left">
                                <div class="form-header">
                                    <h3 class="heading-medium text-white">Contact Person Details</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="first_name" maxlength="250" id="first_name" value="{{ old('first_name') }}" placeholder="" class="form-control">
                                            @error('first_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="first_name-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" name="middle_name" maxlength="250" value="{{ old('middle_name') }}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" maxlength="250" id="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="">
                                            @error('last_name')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="last_name-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Email Address <span class="text-danger">*</span></label>
                                            <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="">
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="email-error" class="text-danger" style="display:none;">This field is required.</span>
                                            <span id="email_val-error" class="text-danger" style="display:none;">Please enter a valid email.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Designation <span class="text-danger">*</span></label>
                                            <input type="text" name="designation" maxlength="250" id="designation" value="{{ old('designation') }}" placeholder="" class="form-control">
                                            @error('designation')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="designation-error" class="text-danger" style="display:none;">This field is required.</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <input type="number" name="phone_nu" id="phone_nu" value="{{ old('phone_nu') }}" class="form-control" minlength="8" maxlength="15" placeholder="">
                                            @error('phone_nu')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <span id="phone_nu-error" class="text-danger" style="display:none;">This field is required.</span>
                                            <span id="phone_nu_num-error" class="text-danger" style="display:none;">Please enter numbers only.</span>
                                            <span id="phone_nu_len-error" class="text-danger" style="display:none;">Please enter valid phone number.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="button" name="previous" class="previous action-button" value="Back" /> <input type="button" name="make_payment" class="next action-button" value="Submit" />
                        </fieldset>

                        <fieldset class="step4">
                            <div class="form-content text-center">
                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                <h2 class="text-white">Thank You</h2>
                                
                                <h4 class="text-white mb-2">Registration Successful</h4>
                                <p class="text-white mb-3">Thanks for registering to our marketplace. You will receive an email when your details are approved by the admin.</p>
                                <a href="{{ route('home') }}" class="next action-button">Visit Website</a>
                            </div>
                        </fieldset>
                    </form>
                    <p class="text-center text-white mt-4 mb-0">Go to <a href="{{ route('login') }}" class="text-white text-underline">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<button id="getDataBtn" style="display:none;">Get Data</button>

@endsection
@section('javascript')
<script src="{{ asset('js/form-main-reg.js') }}"></script>

<script type="text/javascript">
    /* ==================== APPEND STATE ON SELECT COUNTRY ==================== */
    $(document).on('change','#company_address_country',function(){
        var country = $(this).val();
        if(country != ''){
            $('#getDataBtn').trigger('click');
            
            $.ajax({
                url : '/reg-get-state',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'country': country},

                beforeSend: function () {
                    $('#loader').removeClass('hidden')
                },

                success:function(data){
                    $('#company_address_state').empty();
                    $('#company_address_city').empty();
                    $('#company_address_state').append('<option value="">Select State</option>');
                    $('#company_address_City').append('<option value="">Select City</option>');
                    if(data.states[0].length > 0){
                        $.each(data.states[0], function(index, value) {
                            $('#company_address_state').append('<option value="'+ index +'">'+ value.name +'</option>');
                        });
                    }else{
                        $('#company_address_state').append('<option value="No State">No State</option>');
                        $('#company_address_city').empty();
                        $('#company_address_city').append('<option value="">Select City</option>');
                        $('#company_address_city').append('<option value="No City">No City</option>');
                    }
                },

                complete: function () {
                    $('#loader').addClass('hidden')
                },

            });
        }else{
            $('#company_address_state').empty();
            $('#company_address_state').append('<option value="">Select State</option>');
        }
    });

    /* ==================== APPEND CITY ON SELECT STATE ==================== */
    $(document).on('change','#company_address_state',function(){     
        var state = $(this).val();
        var country = $('select[name=company_address_country]').val();
        
        if(country != '' && state != ''){
            $.ajax({
                url : '/reg-get-city',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'state': state, 'country': country},
                
                beforeSend: function () {
                    $('#loader2').removeClass('hidden')
                },

                success:function(data){
                    $('#company_address_city').empty();
                    $('#company_address_city').append('<option value="">Select City</option>');
                    if(data.cities[0].length > 0){
                        $.each(data.cities[0], function(index, value) {
                            $('#company_address_city').append('<option value="'+ value.name +'">'+ value.name +'</option>');
                        });
                    }else{
                        $('#company_address_city').empty();
                        $('#company_address_city').append('<option value="">Select City</option>');
                        $('#company_address_city').append('<option value="No City">No City</option>');
                    }
                },

                complete: function () {
                    // setTimeout(function () {
                        $('#loader2').addClass('hidden')
                    // }, 2000);
                },
            });
        }else{
            $('#company_address_city').empty();
            $('#company_address_city').append('<option value="">Select City</option>');
        }           
    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#fileName').text('The file "' + fileName +  '" has been selected.');
        });
    });
</script> -->
@endsection

