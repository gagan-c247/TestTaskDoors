@extends('frontend.frontBase')
@section('content')
<section class="common-sec1 single-product-sec1 bgimg" style="background-image: url(../frontend/assets/images/bg1.jpg);">
	<div class="container">
		<div class="col-md-12">
			@include('flash') {{--session message--}}
		</div>
        <div class="banner-content">
	        <div class="row">
	        	<div class="col-md-12">
	        		<h4 class="mb-4">Checkout</h4>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="product-image h-auto">
		        		<img src="{{ url('/'). '/images/'.$productDetail->image->path}}" alt="First slide">
		        	</div>
	        	</div>
	        	<div class="col-md-3"></div>
	        	<div class="col-md-3 col-sm-6">
	        		<div class="chk-detail">
	        			<h5 class="mb-3">Product Details</h5>
		        		<!-- <p><span>Contract ID: </span>3423222</p> -->
		        		<p><span>Product No: </span>{{ $productDetail->product_number ?? '' }}</p>
		        		<p><span>Title: </span>{{ $productDetail->title ?? '' }}</p>
		    			<p><span>Quantity: </span>{{ $productDetail->quantity ?? '' }}
							@if($productDetail->unit == 1)
								{{'kg' ?? ''}}
							@else
								{{'pounds' ?? ''}}
							@endif</p>
		    			<p><span>Total: </span>${{ number_format($productDetail->price) ?? '' }}.00</p>
		    		</div>
	        	</div>
	        	<div class="col-md-3 col-sm-6">
	        		<div class="chk-detail">
	        			<h5 class="mb-3">PickUp Address</h5>
		        		<p><span>Address:</span> {{ $productDetail->address->line1 ?? '' }}, {{ $productDetail->address->line2 ?? '' }}</p>
						<p><span>City:</span> {{ $productDetail->address->city ?? '' }}</p>
						<p><span>State:</span> {{ $productDetail->address->state ?? '' }}</p>
						<p><span>Country:</span> {{ $productDetail->address->country ?? '
						' }}</p>
						<p><span>Zip Code:</span> {{ $productDetail->address->zip ?? '' }}</p>
	    			</div>
		        </div>
		    </div>
		    <div class="row">
		    	<div class="col-md-6">
		    		<div class="mt-5">
						<h4>Specifications</h4>
						<table class="table mt-4 text-white">
							<tbody>
								<tr>
									<td>Resin Type</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $resin_type_key => $resin_type_value)
			                            @if($resin_type_value->resin_type != '')
			                        		@if($i == $productDetail->resin_type)
												<td>{{ $resin_type_value->resin_type ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Filler Type</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $filler_type_key => $filler_type_value)
			                            @if($filler_type_value->filler_type != '')
			                        		@if($i == $productDetail->filler_type)
												<td>{{ $filler_type_value->filler_type ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Filler %</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $filler_percentage_key => $filler_percentage_value)
			                            @if($filler_percentage_value->filler_percentage != '')
			                        		@if($i == $productDetail->filler_percentage)
												<td>{{ $filler_percentage_value->filler_percentage ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Color</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $color_key => $color_value)
			                            @if($color_value->color != '')
			                        		@if($i == $productDetail->color)
												<td>{{ $color_value->color ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Character A</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $character_a_key => $character_a_value)
			                            @if($character_a_value->character_a != '')
			                        		@if($i == $productDetail->character_a)
												<td>{{ $character_a_value->character_a ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Character B</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $character_b_key => $character_b_value)
			                            @if($character_b_value->character_b != '')
			                        		@if($i == $productDetail->character_b)
												<td>{{ $character_b_value->character_b ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
								<tr>
									<td>Brand</td>
									@php $i = 0; @endphp	
								    @foreach($allFilters as $brand_key => $brand_value)
			                            @if($brand_value->brand != '')
			                        		@if($i == $productDetail->brand)
												<td>{{ $brand_value->brand ?? ''}}</td>
			                        		@endif
			                            @endif
			                           	@php $i++; @endphp
			                        @endforeach
								</tr>
							</tbody>
						</table>
					</div>
		    	</div>
		    	<div class="col-md-6">
		    		<div class="mt-5">
		    			<h4>Credit/Debit Card Details</h4>
						@if(isset(auth()->guard('web')->user()->pm_type) && auth()->guard('web')->user()->pm_type != null)
							<div class="card-details mt-4 mb-3">
								<div class="flip-container" id="flip-toggle">
									<div class="flipper">
									<div class="card front">
										<div class="card-provider text-right">
											@if(auth()->guard('web')->user()->pm_type == 'visa')
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/visa-card-logo.png') }}" alt="">
												</div>
											@elseif(auth()->guard('web')->user()->pm_type == 'mastercard')	
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/master-card-logo.png') }}" alt="">
												</div> 
											@elseif(auth()->guard('web')->user()->pm_type == 'amex')	
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/american-card-logo.png') }}" alt="">
												</div> 
											@elseif(auth()->guard('web')->user()->pm_type == 'discover')
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/discover-card-logo.jpg') }}" alt="">
												</div> 
											@elseif(auth()->guard('web')->user()->pm_type == 'diners')
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/diners-club-logo.png') }}" alt="">
												</div> 
											@elseif(auth()->guard('web')->user()->pm_type == 'jcb')
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/jcb-card-logo.jpg') }}" alt="">
												</div> 
											@elseif(auth()->guard('web')->user()->pm_type == 'unionpay')
												<div class="c-image">
													<img src="{{ asset('frontend/assets/images/unionpay-card-logo.png') }}" alt="">
												</div> 
											@endif
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="cardholder-name-wrap">
												<label for="c-name" class="input-title cardholder-name">
													Name on card <span class="text-danger">*</span>
												</label>
												<input type="text" name="c-number" id="c-name" class="input-field cardholder-name" value="{{ $cardDetail->card_name ?? '' }}" readonly>
												</div>
											</div>
											<div class="col-lg-9 col-md-8">
												<div class="card-number-wrap">
												<label class="input-title" for="c-number">
													Card Number <span class="text-danger">*</span>
												</label>
												<input type="text" name="c-number" id="c-name" class="input-field cardholder-name" value="{{ $cardDetail->card_number ?? '' }}" readonly>
												</div>
											</div>
											<div class="col-lg-3 col-md-4">
												<div class="card-expiry-wrap">
												<label class="input-title">Expiry Date <span class="text-danger">*</span></label>
												<input type="text" name="c-number" id="c-name" class="input-field cardholder-name" value="{{ $cardDetail->expire_month ?? '' }} / {{ $cardDetail->expire_year ?? '' }}" readonly>
												</div>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						@endif
						<div class="d-flex {{ (isset(auth()->guard('web')->user()->pm_type) && auth()->guard('web')->user()->pm_type != null) ? 'justify-content-end' : 'justify-content-start' }} ">
							<button class="btn-medium"  data-toggle="modal" data-target="#myModal">{{ (isset(auth()->guard('web')->user()->pm_type) && auth()->guard('web')->user()->pm_type != null) ? 'Add New Card' : 'Add Card' }}</button>
							<a href="{{ url('/contract', $productDetail->id) }}" class="btn-medium ml-3 {{ (isset(auth()->guard('web')->user()->pm_type) && auth()->guard('web')->user()->pm_type != null) ? ' ' : 'disable-btn' }} ">Escrow Payment</a>
						</div>
					</div>
		    	</div>
		    </div>

	{{--	<div class="row">
			<div class="col-md-12">
				<table class="table table-responsive-sm table-striped text-white">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                    		<td class="text-center">
                    			<img src="{{ url('/'). '/images/'.$productDetail->image->path}}" alt="First slide" width="150" height="150">
                    		</td>
                    		<td>{{ $productDetail->title ?? '' }}</td>
                    		<td>
                    			Resin {{ $productDetail->quantity ?? '' }}
								@if($productDetail->unit == 1)
									{{'kg' ?? ''}}
								@else
									{{'pounds' ?? ''}}
								@endif
                    		</td>
                    		<td>${{ number_format($productDetail->price) ?? '' }}.00</td>
                    	</tr>
                    </tbody>
                </table>
			</div>
		</div>  --}}
		<!-- <div class="row">
			<div class="col-md-6">
				<h4>Credit/Debit Card Details</h4>
				@if(isset($cardDetail) && $cardDetail != [])
					<h5>Card Number: {{ $cardDetail->card_number ?? '' }}</h5>
					<h5>Expire Month: {{ $cardDetail->expire_month ?? '' }}</h5>
					<h5>Expire Year: {{ $cardDetail->expire_year ?? '' }}</h5>
					<button class="btn-medium" data-toggle="modal" data-target="#myModal">Edit Card</button>
				@else
					<button class="btn-medium" data-toggle="modal" data-target="#myModal">Add Card</button>
				@endif
			</div>
			<div class="col-md-6">
				<h4>PickUp Address</h4>
				<h5>Address: {{ $productDetail->address->line1 ?? '' }} {{ $productDetail->address->line2 ?? '' }}</h5>
				<h5>City: {{ $productDetail->address->city ?? '' }}</h5>
				<h5>State: {{ $productDetail->address->state ?? '' }}</h5>
				<h5>Country: {{ $productDetail->address->country ?? '
				' }}</h5>
				<h5>Zip Code: {{ $productDetail->address->zip ?? '' }}</h5>
			</div>
		</div> -->
		<!-- <div class="row">
			<div class="col-md-12 text-right">
				<a href="{{ url('/contract', $productDetail->id) }}" class="btn-medium">Escrow Payment</a>
			</div>
		</div> -->
	</div>
</section>

<!-- Credit/Debit Card Details Modal -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" id="payment-form" action="{{ route('card.store') }}">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Credit/Debit Card Details</h4>
				</div>
				<div class="modal-body">
					<div class="form-group row">
                        <div class="col-md-12">
                        	<div class="form-group">
	                            <label>Name on card <span class="text-danger">*</span></label>
								<input type="text" id="card-holder-name" value="" class="form-control" placeholder="Name" name="card_name">
								<span class="text-danger name-error" style="display:none">This field is required.</span>
	                        </div>
							
                        	<div class="form-group">
	                            <label>Enter Your card details <span class="text-danger">*</span></label>
								<input type="hidden" name="hidenRedirect" value="hidenRedirect">
	                            <div id="card-element"></div>
								<span class="error text-danger"></span>
	                        </div>
                        </div>
                    </div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="d-none">submit</button>
					<button type="button" class="d-none" id="card-button" data-secret="{{ $intent->client_secret }}">update payment method</button>
					<button type="button"  id="card-submit" class="btn-medium">Save</button>
					<button type="button" class="btn-medium bg-gray" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $('#number').on('keyup', function(e){         
        var val = $(this).val();         
        var newval = '';         
        val = val.replace(/\s/g, ''); 

        for(var i = 0; i < val.length; i++) {             
            if(i%4 == 0 && i > 0) newval = newval.concat(' ');             
            newval = newval.concat(val[i]);         
        }        
        $(this).val(newval);     
	});
</script>

<script src="https://js.stripe.com/v3/"></script>

<script>
     var style = {
        base: {
            color: '#32325d',
            lineHeight: '18px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    const stripe = Stripe('{{env("STRIPE_KEY")}}');
    const elements = stripe.elements();
    const cardElement = elements.create('card',{hidePostalCode: true, style: style });
    cardElement.mount('#card-element');
    $('.InputElement').addClass('InputElement is-empty Input Input--empty form-control');
</script>


<script>

    const cardHolderName = document.getElementById('card-holder-name');
    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;

	$(document).on('click','#card-submit',function(){
        var name = $('#card-holder-name').val();
        if(name == ''){
            $('.name-error').show();
        }else{
            $('.name-error').hide();
            $('#card-submit').prop('disabled',true);
            $('#card-button').trigger('click');
        }
       
    });

    cardButton.addEventListener('click', async (e) => {
      
        stripe.handleCardSetup(clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value }
            }
        }).then(function(result) {
            console.log(result);
            if (result.error) {
            	$('#card-submit').prop('disabled',false);
                // Inform the user if there was an error.
                // var errorElement = document.getElementById('card-errors');
                // errorElement.textContent = result.error.message;
                $('.error').html(' ');
                $('.error').append(result.error.message);
                console.log(result.error.message);
            } else {
                console.log(result);
                // Send the token to your server.
                stripeTokenHandler(result.setupIntent.payment_method);
            }
        });;


        function stripeTokenHandler(paymentMethod) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'paymentMethod');
            hiddenInput.setAttribute('value', paymentMethod);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
        
        // console.log(paymentMethod.billing_details);
        //     console.log(paymentMethod);
        //     // console.log(paymentMethod.id);result.setupIntent.payment_method

        // if (error) {
        //     alert(error.message);
        //     // Display "error.message" to the user...
        // } else {
        //     // The card has been verified successfully...
        //     alert('The card has been verified successfully...');
        //     $('.payment_method_value').val(paymentMethod);
        // }
    });
</script>
@endsection

