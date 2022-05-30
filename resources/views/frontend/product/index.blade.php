@extends('frontend.frontBase')
@section('content')
<style>
    .nav-tabs a{
        display: block;
        width: 100%;
    }
</style>
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-3 border-right" style="height:100vh;">
                   <div style="padding:35px;">
                    <h1 class="text-dark">Section</h1>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#base-option" role="tab" aria-controls="nav-home" aria-selected="true">
                                Base Option
                            </a>
                            <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#door" role="tab" aria-controls="nav-profile" aria-selected="false">
                                Door
                            </a>
                            <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#face" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Face
                            </a>
                            <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#hardeware" role="tab" aria-controls="nav-contact" aria-selected="false">
                                Hardware's
                            </a>
                        </div>
                    </nav>
                   </div>
                </div>
                <div class="col-md-9">
                    <div class="" style="padding:50px;">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="base-option" role="tabpanel" aria-labelledby="home-tab">
                                <h1>Base Option</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="door" role="tabpanel" aria-labelledby="profile-tab">
                                <h1>Door</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="face" role="tabpanel" aria-labelledby="contact-tab">
                                <h1>Face</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hardeware" role="tabpanel" aria-labelledby="contact-tab">
                                <h1>Hardware's</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
          
               
            </div>

@endsection
@section('javascript')
@endsection