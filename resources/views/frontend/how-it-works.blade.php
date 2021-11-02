@extends('frontend.frontBase')
@section('content')

	<section class="common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
		<div class="container">
			<div class="banner-content">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center mb-5">{{$howItWorks->name ?? ''}}</h2>
						{!! $howItWorks->content ?? '' !!}
					</div>
				</div>
				{{-- <div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath1'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading1'} ?? ''}}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content1'} ?? '' !!}</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath2'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading2'} ?? '' }}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content2'} ?? ''  !!}</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath3'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading3'} ?? ''}}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content3'} ?? '' !!}</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath4'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading4'} ?? ''}}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content4'} ?? '' !!}</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath5'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading5'} ?? ''}}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content5'} ?? '' !!}</p>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="work-item text-center">
							<img src="{{ asset(json_decode($howItWorks->content)->{'filePath6'} ?? '') }}">
							<h5>{{json_decode($howItWorks->content)->{'heading6'} ?? ''}}</h5>
							<p>{!! json_decode($howItWorks->content)->{'content6'} ?? '' !!}</p>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

	<!-- <section class="how-it-work-sec pt-70 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath1'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading1'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content1'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath2'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading2'} ?? '' }}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content2'} ?? ''  !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath3'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading3'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content3'} ?? '' !!}</p>
					</div>
				</div>


				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath4'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading4'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content4'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath5'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading5'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content5'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath6'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading6'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content6'} ?? '' !!}</p>
					</div>
				</div>
			</div>
		</div>
	</section><section class="how-it-work-sec pt-70 pb-70">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath1'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading1'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content1'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath2'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading2'} ?? '' }}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content2'} ?? ''  !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath3'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading3'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content3'} ?? '' !!}</p>
					</div>
				</div>


				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath4'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading4'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content4'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath5'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading5'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content5'} ?? '' !!}</p>
					</div>
				</div>

				<div class="col-md-4">
					<div class="work-item text-center">
						<img src="{{ asset(json_decode($howItWorks->content)->{'filePath6'} ?? '') }}">
						<h5>{{json_decode($howItWorks->content)->{'heading6'} ?? ''}}</h5>
						<p>{!! json_decode($howItWorks->content)->{'content6'} ?? '' !!}</p>
					</div>
				</div>
			</div>
		</div>
	</section> -->

@endsection
@section('javascript')
@endsection
