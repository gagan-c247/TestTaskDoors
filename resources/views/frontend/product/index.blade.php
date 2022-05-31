@extends('frontend.frontBase')
@section('content')
<style>
    .nav-tabs a{
        display: block;
        width: 100%;
    }

    .img-product {
        height: 100px;
        width: 150px;   
    }
    .cost-div{
        border: 2px solid #f0f0f0;
        margin-right: 2px;
    }
    .header{
        background: #9b9b9b5e;
        padding: 11px 8px;
    }
</style>
@php 
$cost = 0;
@endphp
		<div class="container-fluid">
            <div class="d-flex justify-content-end header">
                <div class="p-3 cost-div">
                   Cost: <span class="">${{$cost}}</span>
                </div>
                <button class="btn btm-primary">Continue</button>
                
            </div>
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
                                    @foreach($option['base_option'] as $baseOption)
                                    <div class="col-md-12">
                                        <label for="" class="d-block">{{$baseOption['name'] ?? ''}}</label>
                                        <div class="form-group">
                                            @include('frontend.product.input',['option' => $baseOption])
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="door" role="tabpanel" aria-labelledby="profile-tab">
                                <h1>Door</h1>
                                <div class="row">
                                    @foreach($option['door'] as $door)
                                        <div class="col-md-12">
                                            <label for="" class="d-block">{{$door['name'] ?? ''}}</label>
                                            @include('frontend.product.input',['option' => $door])
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="face" role="tabpanel" aria-labelledby="contact-tab">
                                <h1>Face</h1>
                                <div class="row">
                                    @foreach($option['face'] as $face)
                                        <div class="col-md-12">
                                            <label for="" class="d-block">{{$face['name'] ?? ''}}</label>
                                            @include('frontend.product.input',['option' => $face])
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="hardeware" role="tabpanel" aria-labelledby="contact-tab">
                                <h1>Hardware's</h1>
                                <div class="row">
                                    @foreach($option['hardware'] as $hardware)
                                        <div class="col-md-12">
                                            <label for="" class="d-block">{{$hardware['name'] ?? ''}}</label>
                                            @include('frontend.product.input',['option' => $hardware])
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
          
               
            </div>
        </div>

@endsection
@section('javascript')
<script>
    $(document).on('click', '.radio-click', function() {
        var value = $(this).data('value');
        $('.'+value).closest('.img-container').find('.img').each(function(){
            $(this).hide();
        });
        $('.'+value).closest('.img').show();
    }); 

    $(document).on('change', '.select-change', function() {
        var value = $(this).find(':selected').data('value');
        $('.'+value).closest('.img-container').find('.img').each(function(){
            $(this).hide();
        });
        $('.'+value).closest('.img').show();
    }); 
    
</script>
@endsection