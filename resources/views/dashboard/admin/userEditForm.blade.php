@extends('dashboard.base')
@section('content')
<style>
label.error{
    color: red;
}
</style>
<div class="container-fluid">
    <div class="wrapper">
        @include('flash') {{--session message--}}
        <form action="{{auth()->guard('admin')->check() && Request::segment(1) == 'admin' ? url('/admin/users/'.$user->id) : url('/profile'.'/'.$user->id) }}" id="wizard" method="post" autocomplete="off" enctype="multipart/form-data">
            @csrf
            @if(auth()->guard('admin')->check() && Request::segment(1) == 'admin')
            @method('PUT')
            @endif

            <input type="hidden" name="name" value="My Name">
            <input type="hidden" name="password" value="Password@123">
            <input type="hidden" name="password_confirmation" value="Password@123">
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="text-right">
                    @if(auth()->guard('admin')->check())
                    <a href="{{ url('/admin/users') }}" class="btn addbtn">Back</a>
                    @endif
                </div>
                <div class="inner">
                    <div class="form-content" >
                        <div class="form-header">
                            <h3 class="heading-medium">Company Details</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name <span class="text-danger">*</span></label>
                                    <input type="text" name="company_name" value="{{ $user->company->name ?? '' }}" class="form-control" placeholder="" data-fv-icon-for="company_name">
                                    @error('company_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Registration Year <span class="text-danger">*</span></label>
                                    <input type="number" min="1" name="company_reg_year" value="{{ $user->company->year ?? '' }}" class="form-control" placeholder="">
                                    @error('company_reg_year')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Registration Number</label>
                                    <input type="text" name="company_reg_num" value="{{ $user->company->reg_nu ?? '' }}" class="form-control" placeholder="">
                                    @error('company_reg_num')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="company_phone" value="{{ $user->company->phone_nu ?? '' }}" maxlength="10" class="form-control" placeholder="">
                                    @error('company_phone')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of Company Modeling Machine <span class="text-danger">*</span></label>
                                    <input type="text" name="company_nu_molding_machines" value="{{ $user->company->nu_machines ?? '' }}" class="form-control" placeholder="">
                                    @error('company_nu_molding_machines')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of Company Sites <span class="text-danger">*</span></label>
                                    <input type="text" name="companey_nu_sites" value="{{ $user->company->nu_sites ?? '' }}" class="form-control" placeholder="">
                                    @error('companey_nu_sites')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{--<div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Company Registration Document</label>
                                    <span class="dragBox">
                                        Click to upload <i class="fa fa-upload ml-2" aria-hidden="true"></i><br>
                                        <input type="file" value="{{ $docfile->path }}" id="uploadFile" name="company_reg_doc">
                                    </span>
                                    <span id="fileName"></span>
                                    @error('company_reg_doc')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>--}}
                            {{--<div class="col-md-6">
                                <label>Uploaded Document</label><br/>
                                @if($docfile->path)
                                    <a href="{{url('/').'/docs'.'/'.$docfile->path}}" target="_blank"><i class="fa fa-eye"></i> <span class="text-dark ml-1 text-lowecase">{{$docfile->path}}</span></a>
                                @endif
                            </div>--}}
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="text-right">
                    @if(auth()->guard('admin')->check())
                    <a href="{{ url('/admin/users') }}" class="btn addbtn">Back</a>
                    @endif
                </div>
                <div class="inner">
                    <div class="form-content select_location">
                        <div class="form-header">
                            <h3 class="heading-medium">Address Details</h3>
                        </div>
                        <div class="row row-wrap">
                            {{--<div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Company Country <span class="text-danger">*</span></label>
                                    @php
                                        $allCountry = DB::table('countries')->get();
                                    @endphp
                                    <div class="custom-dropdown">
                                    <select name="company_address_country" value="{{ old('company_address_country') }}" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($allCountry as $country)
                                        <option value="{{ $country->name }}" {{$user->company->address->country == $country->name ? 'selected' : ''}} >{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                            </div>
                                    @error('company_address_country')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>--}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Country <span class="text-danger">*</span></label>
                                    <div class="custom-dropdown">
                                        <select name="company_address_country" id="company_address_country" class="form-control">
                                        <option value="">Select Country</option>
                                        @foreach($countries as $countryKey => $country)
                                        <option value="{{ $countryKey }}" {{ $user->company->address->country == $country  ? 'selected' : '' }}>{{ $country }}</option>
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
                                    <div id="user_edit_loader" class="lds-dual-ring hidden overlay"></div>
                                    <div class="custom-dropdown">
                                        <select name="company_address_state" id="company_address_state" class="form-control company_address_state">
                                            <option value="">Select State</option>

                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    <input type="hidden" name="selectedHideState" id="selectedHideState" value="{{ $user->company->address->state ?? '' }}">
                                    @error('company_address_state')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company City <span class="text-danger">*</span></label>
                                    <div id="user_edit_loader1" class="lds-dual-ring hidden overlay"></div>
                                    <div class="custom-dropdown">
                                        <select name="company_address_city" id="company_address_city" class="form-control">
                                            <option value="">Select City</option>

                                        </select>
                                        <i class="fa fa-caret-down down" aria-hidden="true"></i>
                                    </div>
                                    <input type="hidden" name="selectedHideCity" id="selectedHideCity" value="{{ $user->company->address->city ?? '' }}">
                                    @error('company_address_city')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Zip Code <span class="text-danger">*</span></label><small>(If your address has no zip code then fill the given number: 654321)</small>
                                    <input type="text" name="company_address_zip" maxlength="20" value="{{ $user->company->address->zip ?? '' }}" class="form-control" placeholder="">
                                    @error('company_address_zip')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address Line 1 <span class="text-danger">*</span></label>
                                    <input type="text" name="company_address_line_1" value="{{ $user->company->address->line1 ?? '' }}" placeholder="" class="form-control">
                                    @error('company_address_line_1')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Address Line 2</label>
                                    <input type="text" name="company_address_line_2" value="{{ $user->company->address->line2 ?? '' }}" class="form-control" placeholder="">
                                    @error('company_address_line_2')
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
            <section>
                <div class="text-right">
                    @if(auth()->guard('admin')->check())
                    <a href="{{ url('/admin/users') }}" class="btn addbtn">Back</a>
                    @endif
                </div>
                <div class="inner">
                    <div class="form-content select_location">
                        <div class="form-header">
                            <h3 class="heading-medium">Contact Person Details</h3>
                        </div>
                        <div class="row row-wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" name="first_name" value="{{ $user->first_name ?? '' }}" placeholder="" class="form-control">
                                    @error('first_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" name="middle_name" value="{{ $user->middle_name ?? '' }}" class="form-control" placeholder="">
                                    @error('middle_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" name="last_name" value="{{ $user->last_name ?? '' }}" class="form-control" placeholder="">
                                    @error('last_name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span class="text-danger">*</span></label>
                                    <input type="text" name="email" value="{{ $user->email ?? '' }}" disabled="disabled" class="form-control" placeholder="">
                                    @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <input type="text" name="designation" value="{{ $user->designation ?? '' }}" placeholder="" class="form-control">
                                    @error('designation')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_nu" value="{{ $user->phone_nu ?? '' }}" class="form-control" maxlength="10" placeholder="">
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
    </div>
</div>
@endsection
@section('javascript')
<script src="{{ asset('js/form-main.js') }}"></script>

<script type="text/javascript">

    /* ==================== DEFAULT APPEND STATE SELECTED COUNTRY ==================== */
    $(document).ready(function(){
        /* === STATE === */
        var country = $('select[name=company_address_country]').val();
        var selectedHideState = $('#selectedHideState').val();

        if(country != ''){
            $.ajax({
                url : '/admin/admin-get-state',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'country': country},
                success:function(data){
                    $('#company_address_state').empty();
                    $('#company_address_state').append('<option value="">Select State</option>');
                    $.each(data.states[0], function(index, value) {
                        if(selectedHideState === value.name){
                            $('#company_address_state').append('<option value="'+ index +'" selected>'+ value.name +'</option>');
                        }else{
                            $('#company_address_state').append('<option value="'+ index +'">'+ value.name +'</option>');
                        }
                    });
                    getCity();
                }
            });
        }else{
            $('#company_address_state').empty();
            $('#company_address_state').append('<option value="">Select State</option>');
        }
    });

    /* === CITY === */
    function getCity(){
        var state = $('#company_address_state').val();
        var country = $('select[name=company_address_country]').val();
        var selectedHideCity = $('#selectedHideCity').val();

        if(country != '' && state != ''){
            $.ajax({
                url : '/admin/admin-get-city',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'state': state, 'country': country},
                success:function(data1){
                    $('#company_address_city').empty();
                    $('#company_address_city').append('<option value="">Select City</option>');
                    $.each(data1.cities[0], function(index, value1) {
                        if(selectedHideCity === value1.name){
                            $('#company_address_city').append('<option value="'+ value1.name +'" selected>'+ value1.name +'</option>');
                        }else{
                            $('#company_address_city').append('<option value="'+ value1.name +'">'+ value1.name +'</option>');
                        }
                    });
                }
            });
        }else{
            $('#company_address_city').empty();
            $('#company_address_city').append('<option value="">Select City</option>');
        }
    }

    /* ==================== APPEND STATE ON SELECT COUNTRY ==================== */
    $(document).on('change','#company_address_country',function(){
        var country = $(this).val();
        if(country != ''){
            $.ajax({
                url : '/admin/admin-get-state',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'country': country},

                beforeSend: function () {
                    $('#user_edit_loader').removeClass('hidden')
                },

                success:function(data){
                    $('#company_address_state').empty();
                    $('#company_address_state').append('<option value="">Select State</option>');
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
                    $('#user_edit_loader').addClass('hidden')
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
                url : '/admin/admin-get-city',
                method: 'POST',
                data: {'_token':'{{ csrf_token() }}', 'state': state, 'country': country},

                beforeSend: function () {
                    $('#user_edit_loader1').removeClass('hidden')
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
                    $('#user_edit_loader1').addClass('hidden')
                },

            });
        }else{
            $('#company_address_city').empty();
            $('#company_address_city').append('<option value="">Select City</option>');
        }           
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#fileName').text('The file "' + fileName +  '" has been selected. & Previous file is replace with new one.');
        });
    });
</script>
@endsection
