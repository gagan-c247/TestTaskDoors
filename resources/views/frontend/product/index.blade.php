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

    .nav-tabs .nav-link{
        color: #000;
    }
    .nav-tabs .nav-link.active {
        background: #ebe8e8;
    }
</style>

		<div class="container-fluid">
            <div class="d-flex justify-content-end header">
                <div class="p-3 cost-div">
                   Cost: <span class="display-amount">$0</span>
                </div>
                <button class="btn btm-primary">Continue</button>
                
            </div>
            <div class="row">
                <div class="col-md-3 border-right" style="height:100vh;">
                   <div style="padding:35px;">
                    <h1 class="text-dark">Section</h1>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach($configurator as $conf)
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="nav-home-tab" data-bs-toggle="tab" href="#{{Str::slug($conf['section'])}}" role="tab" aria-controls="nav-home" aria-selected="true">
                                   <span class="text-capitalize"> {{$conf['section'] ?? '' }}</span>
                                </a>
                            @endforeach
                        </div>
                    </nav>
                   </div>
                </div>
                <div class="col-md-9">
                    <form method="post" id="form_product_id">
                        <div class="" style="padding:50px;">
                            <div class="tab-content" id="myTabContent">
                                @foreach($configurator as $conf)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{Str::slug($conf['section'])}}" role="tabpanel" aria-labelledby="home-tab">
                                    <h1 class="text-capitalize">{{ $conf['section'] }}</h1>
                                    <div class="row">
                                        @foreach($conf['attribute_detail'] as $baseOption)
                                            <div class="col-md-12">
                                                <label for="" class="d-block">{{$baseOption['name'] ?? ''}}</label>
                                                <div class="form-group">
                                                    @include('frontend.product.input',['option' => $baseOption])
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </form>
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

<script>
    $(document).ready(function(){
        var total = 0;
        $.each($('#form_product_id').serializeArray(),function(index,value){
            if(value.value){
                if(!isNaN(parseInt(value.value))) {
                   total += parseInt(value.value)
                }
            }
        })
        $('.display-amount').text('$'+total);
    });

    $(document).on('change','form',function() {
        var total = 0;
        $.each($('#form_product_id').serializeArray(),function(index,value){
            if(value.value){
                if(!isNaN(parseInt(value.value))) {
                   total += parseInt(value.value)
                }
            }
        })
        $('.display-amount').text('$'+total);
    });
</script>
@endsection