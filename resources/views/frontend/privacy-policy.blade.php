@extends('frontend.frontBase')
@section('content')

	<section class="common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="policy-content">
						<h2 class="text-center">{{$privacyPolicy->name ?? ''}}</h2>
				
							{{-- Content --}}
							{!! $privacyPolicy->content ?? '' !!}
						
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
@section('javascript')
@endsection