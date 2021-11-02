@extends('frontend.frontBase')
@section('content')
<section class="common-sec1 single-product-sec1 bgimg" style="background-image: url(../frontend/assets/images/bg1.jpg);">
	<div class="container pt-70">
		<div class="row">
			<div class="col-md-5">
				<div class="singlepro_sec1_left">
					<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails d-flex align-items-start" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
                                <img src="{{ url('/'). '/images/'.$productDetail->image->path}}" alt="First slide">
							</div>
							<div class="carousel-item">
                                <img src="{{ url('/'). '/images/'.$productDetail->image->path}}" alt="Second slide">
							</div>
						</div>
					{{--	<ol class="carousel-indicators">
							<li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                <img src="{{ url('/'). '/images/'.$productDetail->image->path}}" class="img-fluid">								
							</li>
							<li data-target="#carousel-thumb" data-slide-to="1">
                                <img src="{{ url('/'). '/images/'.$productDetail->image->path}}" class="img-fluid">
							</li>
						</ol> --}}
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="product-sec1-right">
					<h2 class="title">{{ $productDetail->title ?? '' }}</h2>
					<div class="rating d-flex align-items-center mb-2">
						@for($i =0 ; $i <$rating;$i++)
							<i class="fa fa-star" aria-hidden="true"></i>
						@endfor
						@for ($i = 0; $i < (5 - $rating); $i++)
							<i class="fa fa-star-o" aria-hidden="true"></i>
						@endfor
						<p class="mb-0 ml-2">({{$totalReview ?? '0'}} customer reviews)</p>
					</div>
					<h4 class="price mb-2 mt-2">${{ number_format($productDetail->price) ?? '' }}.00</h4>
					<div class="list">
						<p>
							<span>Quantity: </span>
							{{ $productDetail->quantity ?? '' }}
							@if($productDetail->unit == 1)
								{{'kg' ?? ''}}
							@else
								{{'pounds' ?? ''}}
							@endif
						</p>
						<p><span>Location: </span>{{$productDetail->address->line1 ?? ''}}, {{$productDetail->address->line2 ?? ''}}  <br> {{ $productDetail->address->city ?? '' }}, {{$productDetail->address->zip ?? ''}}, <br> {{ $productDetail->address->state ?? '' }}, {{ $productDetail->address->country ?? '' }} </p>
					</div>
					@if($productDetail->user_id == Auth::guard('web')->id())
					<div class="copy-url mt-3 mb-3">
						<div class="d-flex align-items-center">
							<i class="fa fa-link" aria-hidden="true"></i>
							<input type="text" name="" value="{{ url()->current() }}" class="form-control" readonly="">
							<div id="copy-button"></div>
						</div>
					</div>
					@endif
					<p class="desc mb-3">
						<span>Description: </span>
						@if(strlen($productDetail->description) > 500)
				            {{ substr($productDetail->description, 0, 400) }}
				            <span class="read-more-show text-red hide_content readmore">Read More...</span>
				            <span class="read-more-content"> {{ substr($productDetail->description, 400, strlen($productDetail->description)) }}
				            <span class="read-more-hide text-red hide_content readmore">Read Less...</span> </span>
			            @else
			            	{{ strip_tags($productDetail->description) }}
			            @endif
					</p>

					{{--<p class="mb-3">
						@if(strlen($productDetail->description) > 500)
				            {{ str_replace("&nbsp;", " ", strip_tags(substr($productDetail->description, 0, 400))) }}
				            <span class="read-more-show text-red hide_content readmore">Read More...</span>
				            <span class="read-more-content"> {{ str_replace("&nbsp;", " ", strip_tags(substr($productDetail->description, 400, strlen($productDetail->description)))) }}
				            <span class="read-more-hide text-red hide_content readmore">Read Less...</span> </span>
			            @else
			            	{{ strip_tags($productDetail->description) }}
			            @endif
					</p>--}}

					<div class="mt-4">
						@if(($productDetail->user_id == Auth::guard('web')->id()) || (Auth::guard('admin')->check()))
						<a href="{{ url('/checkout', [$productDetail->id]) }}" class="btn-medium mr-2 disable-btn">Escrow Payment</a>
						<a href="{{route('chat',$productDetail->slug)}}" class="btn-medium bg-gray primeToggle disable-btn">Contact Seller</a>
						@else
						<a href="{{ url('/checkout', [$productDetail->id]) }}" class="btn-medium mr-2">Escrow Payment</a>
						<a href="{{route('chat',$productDetail->slug)}}" class="btn-medium bg-gray primeToggle">Contact Seller</a>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="row specification-sec">
			<div class="col-md-12">
				<h4>Specifications</h4>
				<table class="table mt-4">
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
				</table>
			</div>
		</div>
		<div class="client-reviews pb-70">
			<h4 class="mb-3 text-white">Customer Reviews</h4>
			<div class="row">
				@if(count($showReview) > 3)
				<div class="review-carousel owl-carousel">
				@endif
				@forelse($showReview as $review)
					@if(count($showReview) > 3)
						<div class="review-item">
							<div class="d-flex justify-content-between">
								<div class="review-stars">
									@for($i =0 ; $i <$rating;$i++)
										<i class="fa fa-star" aria-hidden="true"></i>
									@endfor
									@for ($i = 0; $i < (5 - $rating); $i++)
										<i class="fa fa-star-o" aria-hidden="true"></i>
									@endfor
				                </div>
				                <p class="review-date">Posted on: {{ $review->created_at->format('m/d/Y') ?? '' }}</p>
				            </div>
							<h4 class="mt-1">{{ $review->company->business_owner_company_id ?? '' }}</h4>
							<p class="mt-3">{{ $review->review ?? '' }}</p>
						</div>
					@else
						<div class="col-md-4">
							<div class="review-item">
								<div class="d-flex justify-content-between">
									<div class="review-stars">
										@for($i =0 ; $i <$rating;$i++)
											<i class="fa fa-star" aria-hidden="true"></i>
										@endfor
										@for ($i = 0; $i < (5 - $rating); $i++)
											<i class="fa fa-star-o" aria-hidden="true"></i>
										@endfor
					                </div>
					                <p class="review-date">Posted on: {{ $review->created_at->format('m/d/Y') ?? '' }}</p>
					            </div>
								<h4 class="mt-1">{{ $review->company->business_owner_company_id ?? '' }}</h4>
								<p class="mt-3">{{ $review->review ?? '' }}</p>
							</div>
						</div>
					@endif
				@empty
				<div class="no-review">
					<h6>There are no review found.</h6>
				</div>
				@endforelse
				@if(count($showReview) > 3)
				</div>
				@endif
			</div>
		</div>
	</div>
</section>


  {{--	<div class="fabs">
	  <div class="chat">
	    <div class="chat_header">
	      <div class="chat_option">
	      <div class="header_img">
	        <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	        </div>
	        <span id="chat_head">Jane Doe</span> <br> <span class="agent">Agent</span> <span class="online">(Online)</span>
	       <span id="chat_fullscreen_loader" class="chat_fullscreen_loader"><i class="fullscreen zmdi zmdi-window-maximize"></i></span>

	      </div>

	    </div>
	    <div class="chat_body chat_login">
	        <a id="chat_first_screen" class="fab"><i class="fa fa-arrow-right"></i></a>
	        <p>We make it simple and seamless for businesses and people to talk to each other. Ask us anything</p>
	    </div>
	    <div id="chat_converse" class="chat_conversion chat_converse">
	            <a id="chat_second_screen" class="fab"><i class="fa fa-arrow-right"></i></a>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Hey there! Any question?</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Hello!</span>
	            <span class="status">20m ago</span>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Hey! Would you like to talk sales, support, or anyone?</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
	             <span class="status2">Just now. Not seen yet</span>
	    </div>
	    <div id="chat_body" class="chat_body">
	        <div class="chat_category">
	          <a id="chat_third_screen" class="fab"><i class="fa fa-arrow-right"></i></a>
	        <p>What would you like to talk about?</p>
	        <ul>
	          <li>Tech</li>
	          <li class="active">Sales</li>
	          <li >Pricing</li>
	          <li>other</li>
	        </ul>
	        </div>

	    </div>
	    <div id="chat_form" class="chat_converse chat_form">
	    <a id="chat_fourth_screen" class="fab"><i class="fa fa-arrow-right"></i></a>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Hey there! Any question?</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Hello!</span>
	            <span class="status">20m ago</span>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Agent typically replies in a few hours. Don't miss their reply.
	            <div>
	              <br>
	              <form class="get-notified">
	                  <label for="chat_log_email">Get notified by email</label>
	                  <input id="chat_log_email" placeholder="Enter your email"/>
	                  <i class="fa fa-arrow-right"></i>
	              </form>
	            </div></span>

	        <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Send message to agent.
	            <div>
	              <form class="message_form">
	                  <input placeholder="Your email"/>
	                  <input placeholder="Technical issue"/>
	                  <textarea rows="4" placeholder="Your message"></textarea>
	                  <button>Send</button> 
	              </form>

	        </div></span>   
	    </div>
	      <div id="chat_fullscreen" class="chat_conversion chat_converse">
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Hey there! Any question?</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Hello!</span>
	            <div class="status">20m ago</div>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	            </div>Hey! Would you like to talk sales, support, or anyone?</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	             </div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            Where can I get some?</span>
	      <span class="chat_msg_item chat_msg_item_admin">
	            <div class="chat_avatar">
	               <img src="{{ asset('frontend/assets/images/user-5.jpg') }}">
	             </div>The standard chuck...</span>
	      <span class="chat_msg_item chat_msg_item_user">
	            There are many variations of passages of Lorem Ipsum available</span>
	            <div class="status2">Just now, Not seen yet</div>
	    </div>
	    <div class="fab_field">
	      <a id="fab_camera" class="fab"><i class="fa fa-camera"></i></a>
	      <a id="fab_send" class="fab"><i class="fa fa-paper-plane"></i></a>
	      <textarea id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message"></textarea>
	    </div>
	  </div>
	    <a class="primeToggle fab" class="fab"><i class="fa fa-comment" aria-hidden="true"></i></a>
	</div> --}}

@endsection
@section('javascript')

<!-- READ MORE AND LESS SCRIPT -->
<script type="text/javascript">
	// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
	$('.read-more-content').addClass('hide_content')
	$('.read-more-show, .read-more-hide').removeClass('hide_content')

	// Set up the toggle effect:
	$('.read-more-show').on('click', function(e) {
		$(this).next('.read-more-content').removeClass('hide_content');
		$(this).addClass('hide_content');
		e.preventDefault();
	});

	// Changes contributed by @diego-rzg
	$('.read-more-hide').on('click', function(e) {
		var p = $(this).parent('.read-more-content');
		p.addClass('hide_content');
		p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
		e.preventDefault();
	});
</script>

<!-- price range slider js -->
<script>
	function getVals(){
		// Get slider values
		let parent = this.parentNode;
		let slides = parent.getElementsByTagName("input");
		let slide1 = parseFloat( slides[0].value );
		let slide2 = parseFloat( slides[1].value );
		// Neither slider will clip the other, so make sure we determine which is larger
		if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }

		let displayElement = parent.getElementsByClassName("rangeValues")[0];
		displayElement.innerHTML = "$" + slide1 + " - $" + slide2;
	}

	window.onload = function(){
		// Initialize Sliders
		let sliderSections = document.getElementsByClassName("range-slider");
		for( let x = 0; x < sliderSections.length; x++ ){
			let sliders = sliderSections[x].getElementsByTagName("input");
			for( let y = 0; y < sliders.length; y++ ){
				if( sliders[y].type ==="range" ){
					sliders[y].oninput = getVals;
					// Manually trigger event first time to display values
					sliders[y].oninput();
				}
			}
		}
	}
</script>

<!-- Copy link url js start -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
	<script>
		//Inititalize ClipboardJS
			new ClipboardJS('.btnClipboardJS');

			// SET data-clipboard-text TO CURRENT URL ON PAGE LOAD
			window.onload = function currentURL() {
			  const URL = window.location.href;
			  document.getElementById('copy-button').innerHTML = '<a onClick="copiedToClipboard()" class="btn btnClipboardJS bg-red" data-clipboard-text="' + URL + '" id="alertCard">Copy</a>'
			}

			// If you only want the functionality, but not the visual effect, ignore the following function. 

			// AESTHETIC: CHANGE INNER HTML
			function copiedToClipboard() { document.getElementById('alertCard').innerHTML = '<span>Copied!</span>';
			//  setTimeout(function(){document.getElementById('alertCard').innerHTML = '<i class="fa fa-link" aria-hidden="true"></i> Copy URL Again';}, 3000);
			}
	</script>

	<!-- Review slider js start -->
	<script>
			$('.review-carousel').owlCarousel({
				loop:true,
				margin:20,
				autoplay:true,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}
			})
	</script>
	<!-- Review slider js end -->

@endsection
