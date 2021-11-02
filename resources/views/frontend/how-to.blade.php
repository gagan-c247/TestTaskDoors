@extends('frontend.frontBase')
@section('content')
	<section class="common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 m-auto">
					<div class="banner-content rules">
						<h2 class="mb-3 text-center">{{$howto->name ?? ''}}</h2>
						{{-- CONTENT --}}
						{!! $howto->content ?? '' !!}
					</div>
					
				</div>
			</div>
		</div>
	</section>

@endsection
@section('javascript')
@endsection