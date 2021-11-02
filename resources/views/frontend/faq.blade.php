@extends('frontend.frontBase')
@section('content')
	<section class="common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg); display: inherit;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-content faqs">
						<h2 class="mb-4 text-center">FAQs</h2>
                        @forelse($faqs as $key => $faq)
							<div class="accordion" id="accordionExample">
						        <div class="card">
						            <div class="card-header">
										<h2 class="faq-pageh mb-0">
											<button type="button" class="btn collapsed" data-toggle="collapse" data-target="#collapse-{{$key}}"><h4 class="termsinner-heading">{{ json_decode($faq->content)->{'question'} ?? '' }}</h4></button>                  
										</h2>
						            </div>
						            <div id="collapse-{{$key}}" class="collapse" data-parent="#accordionExample">
										<div class="card-body">
											{{ json_decode($faq->content)->{'answer'} ?? '' }}
										</div>
						            </div>
						        </div>
						    </div>
                        @empty
                        	<div class="text-center">
                        		<h2>No FAQs added yet.</h2>
                        	</div>
                        @endforelse
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section class="faq-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="faqs pt-70 pb-70">
						<div class="accordion" id="accordionExample">
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapseOne"><h4 class="termsinner-heading">Data collection and respect of privacy</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapse-2"><h4 class="termsinner-heading">Typographical errors</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapse-2" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapse-3"><h4 class="termsinner-heading">Navigation and use of the website</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapse-3" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapse-4"><h4 class="termsinner-heading">Prevention of fraud and any fraudulent act</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapse-4" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapse-5"><h4 class="termsinner-heading">Protection of personal information</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapse-5" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					        <div class="card">
					            <div class="card-header">
					              <h2 class="faq-pageh mb-0">
					                <button type="button" class="btn" data-toggle="collapse" data-target="#collapse-6"><h4 class="termsinner-heading">Copyrights and authors rights</h4><i class="fa fa-plus"></i></button>                  
					              </h2>
					            </div>
					            <div id="collapse-6" class="collapse" data-parent="#accordionExample">
					              <div class="card-body">
					                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					              </div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

@endsection
@section('javascript')
@endsection



