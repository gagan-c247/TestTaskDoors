@if(auth()->guard('web')->check() || auth()->guard('admin')->check())
@extends('dashboard.base')
@section('content')

@if((isset(auth()->guard('admin')->user()->password_status) && auth()->guard('admin')->user()->password_status == '1') || (isset(auth()->guard('web')->user()->password_status) && auth()->guard('web')->user()->password_status == '1'))
<div class="container-fluid">
    @include('flash') {{--session message--}}
    <div class="db-item-list">
        <div class="row">
            @if(auth()->guard('admin')->check() && Request::segment(1) == 'admin')
                <div class="col-md-4">
                    <a href="{{url('/admin/users')}}">
                        <div class="custom-card">
                            <div class="db-icon mr-3">
                                <img src="{{ asset('images/icon4.png') }}" alt="icon">
                            </div>
                            <div class="db-content">
                                <p>Business Owner Management</p>
                                <h4>{{ number_format($businessOwners) ?? '' }}</h4>
                                <h6>Active: {{ number_format($businessOwnersActive) ?? '' }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

@else
<div class="container-fluid">
    @include('flash') {{--session message--}}
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 m-auto">
                                <form action="{{route('user-login-change-password.store')}}" id="wizard" method="post" autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                        <div class="text-center">
                                            <h2>Change Password</h2>
                                            <br/>
                                            <h6 class="text-danger"><b>Note:</b> Please change the password of your account then you can manage all the modules on this dashboard.</h6>
                                        </div><br/>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="">New Password <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <i class="fa fa-eye c-icon cursor-pointer toggle-password"></i>
                                                        <input class="form-control" type="password" placeholder="{{ __('New Password') }}" name="password">
                                                    </div>
                                                        @error('password')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    
                                                </div>
                                            
                                                <div class="form-group mb-3">
                                                    <label for="phone">Confirm New Password</label>
                                                    <div class="input-group">
                                                    <i class="fa fa-eye c-icon cursor-pointer toggle-password"></i>
                                                    <input class="form-control" type="password" placeholder="{{ __('Confirm New Password') }}" name="password_confirmation">
                                                </div>
                                                    @error('password_confirmation')
                                                        <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12 text-right">
                                                <div class="pt-3">
                                                    <button type="submit" class="btn submit w-100">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('javascript')

<script type="text/javascript">
    $( document ).ready(function() {
        setTimeout(function(){
            $('.alert-success').css('display', 'none')
        }, 4000);
    });
</script>

@endsection
@endif