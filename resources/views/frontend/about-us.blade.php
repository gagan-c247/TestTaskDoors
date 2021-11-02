@extends('frontend.frontBase')
@section('content')
	<section class="common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-10 m-auto">
					<div class="banner-content">
						<h2 class="mb-4 text-center">{{$aboutus->name ?? ''}}</h2>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<h5>{{json_decode($aboutus->content)->{'headingFirst'} ?? ''}}</h5>
								<p>{!! json_decode($aboutus->content)->{'contentFirst'} ?? '' !!}</p>
							</div>
							<div class="col-lg-12 col-md-12">
								<h5>{{json_decode($aboutus->content)->{'headingTwo'} ?? '' }}</h5>
								<p>{!! json_decode($aboutus->content)->{'contentTwo'} ?? ''  !!}</p>
							</div>
							<div class="col-lg-12 col-md-12">
								<h5>{{json_decode($aboutus->content)->{'headingThree'} ?? ''}}</h5>
								<p>{!! json_decode($aboutus->content)->{'contentThree'} ?? '' !!}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
@section('javascript')
@endsection