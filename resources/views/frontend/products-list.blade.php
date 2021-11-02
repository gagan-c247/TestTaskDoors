@extends('frontend.frontBase')
@section('content')
<section class="common-sec1 product-list-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
	<div class="container-fluid">
		@include('flash') {{--session message--}}
		<div class="row">
			@if($filterFlag)
			<div class="col-md-3">
				<div class="left-filter">
					<h5 class="mb-4">Resin Search Advanced Filter<sup>TM</sup></h5>
					<form method="GET" id="productListForm" action="{{ url('/products') }}" autocomplete="off">
						<div class="text-right">
							<button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="Search"><i class="fa fa-search"></i></button>

	                    	<a href="{{ url('/products')}}" class="btn btn-secondary" data-toggle="tooltip" title="Reset"><i class="fa fa-refresh"></i></a>
	                	</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" name="title" value="{{ app('request')->input('title') }}" class="form-control" placeholder="e.g. Heigh Impact">
						</div>
						<div class="form-group">
							<label>Product No.</label>
							<input type="number" name="product_number" value="{{ app('request')->input('product_number') }}" min="1" maxlength="8" class="form-control" placeholder="e.g. 1234">
						</div>

						<div id="accordion" class="myaccordion">
							<div class="card">
								<div class="card-header" id="PriceRange">
									<button type="button" class="d-flex align-items-center btn btn-link" data-toggle="collapse" data-target="#collapsePriceRange" aria-expanded="true" aria-controls="collapsePriceRange">
										Price Range in <strong>&nbsp; USD</strong>
									</button>
								</div>
								<div id="collapsePriceRange" class="collapse show" aria-labelledby="PriceRange" data-parent="#accordion">
									<div class="card-body">
										<div class="checkbox">
											<input type="checkbox" id="allPrice" class="all-price-range" name="priceRange[]" value="1-10000000" checked>  
											<label for="allPrice">all</label>      
											<br>
											<input type="checkbox" id="onePrice" class="price-range" name="priceRange[]" value="1-100" disabled="">
											<label class="price-range-label" for="onePrice">$1 - $100</label>
											<br>
											<input type="checkbox" id="twoPrice" class="price-range" name="priceRange[]" value="100-1000" disabled="">  
											<label class="price-range-label" for="twoPrice">$100 - $1000</label>
											<br>
											<input type="checkbox" id="threePrice" class="price-range" name="priceRange[]" value="1000-10000" disabled="">  
											<label class="price-range-label" for="threePrice">$1000 - $10000</label>
											<br>
											<input type="checkbox" id="fourPrice" class="price-range" name="priceRange[]" value="10000-100000" disabled="">  
											<label class="price-range-label" for="fourPrice">$10000 - $100000</label>
											<br>
											<input type="checkbox" id="fivePrice" class="price-range" name="priceRange[]" value="100000-1000000" disabled="">  
											<label class="price-range-label" for="fivePrice">$100000 - $1000000</label>
											<br>
											<input type="checkbox" id="sixPrice" class="price-range" name="priceRange[]" value="1000000-10000000" disabled="">  
											<label class="price-range-label" for="sixPrice">$1000000 - $10000000</label>      
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingOne">
									<button type="button" class="d-flex align-items-center justify-content-between btn collapsed btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Resin Type
									</button>
								</div>
								<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp
											@foreach($allFilters as $resin_type_key => $resin_type_value)
												@if($resin_type_value->resin_type != '')
													<input id="resin_type-{{$i}}" type="radio" name="resin_type" value="{{ $i-1 }}" {{ app('request')->input('resin_type') == $resin_type_value->resin_type ? 'checked' : '' }}>
													<label for="resin_type-{{$i}}">{{$resin_type_value->resin_type}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading2">
									<button type="button" class="d-flex align-items-center justify-content-between btn collapsed btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
										Filler Type
									</button>
								</div>
								<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item"> 
											@php $i = 1; @endphp	
											@foreach($allFilters as $filler_type_key => $filler_type_value)
												@if($filler_type_value->filler_type != '')
													<input id="filler_type-{{$i}}" type="radio" name="filler_type" value="{{ $i-1 }}" {{ app('request')->input('filler_type') == $filler_type_value->filler_type ? 'checked' : '' }}>
													<label for="filler_type-{{$i}}">{{$filler_type_value->filler_type}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading3">
									<button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
										Filler %
									</button>
								</div>
								<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp	
											@foreach($allFilters as $filler_percentage_key => $filler_percentage_value)
												@if($filler_percentage_value->filler_percentage != '')
													<input id="filler_per-{{$i}}" type="radio" name="filler_percentage" value="{{ $i-1 }}" {{ app('request')->input('filler_percentage') == $filler_percentage_value->filler_percentage ? 'checked' : '' }}>
													<label for="filler_per-{{$i}}">{{$filler_percentage_value->filler_percentage}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading4">
									<button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
										Color
									</button>
								</div>
								<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp	
											@foreach($allFilters as $color_key => $color_value)
												@if($color_value->color != '')
													<input id="color-{{$i}}" type="radio" name="color" value="{{ $i-1 }}" {{ app('request')->input('color') == $color_value->color ? 'checked' : '' }}>
													<label for="color-{{$i}}">{{$color_value->color}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading5">
									<button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
										Character A
									</button>
								</div>
								<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp	
											@foreach($allFilters as $character_a_key => $character_a_value)
												@if($character_a_value->character_a != '')
													<input id="charA-{{$i}}" type="radio" name="character_a" value="{{ $i-1 }}" {{ app('request')->input('character_a') == $character_a_value->character_a ? 'checked' : '' }}>
													<label for="charA-{{$i}}">{{$character_a_value->character_a}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading6">
									<button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
										Character B
									</button>
								</div>
								<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp	
											@foreach($allFilters as $character_b_key => $character_b_value)
												@if($character_b_value->character_b != '')
													<input id="charB-{{$i}}" type="radio" name="character_b" value="{{ $i-1 }}" {{ app('request')->input('character_b') == $character_b_value->character_b ? 'checked' : '' }}>
													<label for="charB-{{$i}}">{{$character_b_value->character_b}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="heading7">
									<button type="button" class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
										Brand
									</button>
								</div>
								<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
									<div class="card-body">
										<div class="radio sidebar-item">
											@php $i = 1; @endphp	
											@foreach($allFilters as $brand_key => $brand_value)
												@if($brand_value->brand != '')
													<input id="brand-{{$i}}" type="radio" name="brand" value="{{ $i-1 }}" {{ app('request')->input('brand') == $brand_value->brand ? 'checked' : '' }}>
													<label for="brand-{{$i}}">{{$brand_value->brand}}</label><br>
												@endif
											@php $i++; @endphp
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-secondary" data-toggle="tooltip" title="Search"><i class="fa fa-search"></i></button>

	                    	<a href="{{ url('/products')}}" class="btn btn-secondary" data-toggle="tooltip" title="Reset"><i class="fa fa-refresh"></i></a>
	                	</div>
					</form>
				</div>
			</div>
			@endif
			<div class="col-md-9">
				<div class="right-filter">
					<div class="row m-0 list-wrapper">
						@forelse($allProductList as $product_key => $product_value)
							@if($product_value->user->status == 1)
								<div class="col-lg-4 col-md-6 list-item">
									<div class="result-item text-center">
										<a href="{{ url('/product-detail/'.$product_value->slug) }}">
											<div class="item-image">
												<img src="{{ url('/'). '/images/'.$product_value->image->path }}" alt="">
											</div>
											<p class="pro-title"><span>{{ $product_value->title ?? '' }} </span><br>
												${{ number_format($product_value->price) ?? '' }}/{{ $product_value->quantity ?? '' }}
												@if($product_value->unit == '1')
													{{'kg'}}
												@else
													{{'pound'}}
												@endif
											</p>
											<div class="pro-address">
												<p class="d-flex text-left"><span>Product No: </span>{{ $product_value->product_number ?? '' }}</p>
												<p class="d-flex text-left"><span>Location :</span>{{ $product_value->address->state ?? '' }}, {{ $product_value->address->country ?? '' }}</p>
											</div>
										</a>
										<div class="two-btn d-flex justify-content-between">
											@if(($product_value->user_id == Auth::guard('web')->id()) || (Auth::guard('admin')->check()))
											<a href="{{ url('/checkout', [$product_value->id]) }}" class="btn-medium mr-2 disable-btn">Buy Now</a>
											<a href="{{route('chat',$product_value->slug)}}" class="btn-medium bg-gray ml-2 disable-btn">Make an Offer</a>
											@else
											<a href="{{ url('/checkout', [$product_value->id]) }}" class="btn-medium mr-2">Buy Now</a>
											<a href="{{route('chat',$product_value->slug)}}" class="btn-medium bg-gray ml-2">Make an Offer</a>
											@endif
										</div>
									</div>
								</div>
							@endif
						@empty
						<div class="col-md-12">
							@if($searchFlag)
								<h2 class="title-medium pb-0 text-center">No data found.</h2>
                            @else
                               	<h2 class="title-medium pb-0 text-center offset-3">No Product added by Business Owner.</h2>
                            @endif
						</div>
						@endforelse
					</div>
					<div id="pagination-container">
						@if($allProductList != [])
							{{ $allProductList->appends(request()->query())->links() }}
						@endif	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('javascript')

<script type="text/javascript">

	$( document ).ready(function() {
		$(".price-range-label").css('color', '#cccc');
	});

	$('#allPrice').click(function(){
		if($('#allPrice').is(":checked")){
			$(".price-range").prop("checked", false);
			$('.price-range').prop("disabled", true);
			$(".price-range-label").css('color', '#cccc');
		}else{
			$(".price-range-label").css('color', '#fff');
			$('.price-range').removeAttr("disabled");
		}
	})
</script>

<script>
	$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
		$(e.target)
		.prev()
		.find("i:last-child")
		.toggleClass("fa-minus fa-plus");
	});
</script>


<!-- <script>
	var items = $(".list-wrapper .list-item");
	var numItems = items.length;
	var perPage = 9;

	items.slice(perPage).hide();

	$('#pagination-container').pagination({
		items: numItems,
		itemsOnPage: perPage,
		prevText: "&laquo;",
		nextText: "&raquo;",
		onPageClick: function (pageNumber) {
			var showFrom = perPage * (pageNumber - 1);
			var showTo = showFrom + perPage;
			items.hide().slice(showFrom, showTo).show();
		}
	});
</script> -->
@endsection
