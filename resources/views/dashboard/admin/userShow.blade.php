@extends('dashboard.base')
@section('content')
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-4">
                <h3>Personal</h3>
                <h5><b>Name:</b> {{ $user->first_name ?? '' }} {{ $user->middle_name ?? '' }} {{ $user->last_name ?? '' }}</h5>
                <h5><b>E-mail:</b> {{ $user->email ?? '' }}</h5>
                <h5><b>Phone:</b> {{ $user->phone_nu ?? '' }}</h5>
                <h5><b>Designation:</b> {{ $user->designation ?? '' }}</h5>
            </div>
            <div class="col-md-4">
                <h3>Address</h3>
                <h5><b>Address 1:</b> {{ $address->line1 ?? '' }}</h5>
                <h5><b>Address 2:</b> {{ $address->line2 ?? '' }}</h5>
                <h5><b>State:</b> {{ $address->state ?? '' }}</h5>
                <h5><b>City:</b> {{ $address->city?? '' }}</h5>
                <h5><b>Country:</b> {{ $address->country ?? '' }}</h5>
                <h5><b>Zip Code:</b> {{ $address->zip ?? '' }}</h5>
            </div>
            <div class="col-md-4">
                <h3>Company</h3>
                <h5><b>Name:</b> {{ $company->name ?? '' }}</h5>
                <h5><b>Registration Year:</b> {{ $company->year ?? '' }}</h5>
                <h5><b>Registration Number:</b> {{ $company->reg_nu ?? '' }}</h5>
                <h5><b>Phone:</b> {{ $company->phone_nu ?? '' }}</h5>
                <h5><b>Nu Modling Machine:</b> {{ $company->nu_machines ?? '' }}</h5>
                <h5><b>Nu Sites:</b> {{ $company->nu_sites ?? '' }}</h5>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
@endsection