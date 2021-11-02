@extends('frontend.frontBase')
@section('content')
	
	<section class="common-sec1 bgimg" style="{{Request::segment(1) == 'contact-us' ? 'background-image: url(frontend/assets/images/bg1.jpg);' : 'background-image: url(../frontend/assets/images/bg1.jpg);' }}">
		<div class="container">
			<div class="contact_info_box mt-4">
		        <div class="row">
		          <div class="col-md-6">
				
		            <div class="contact_sec1_left">
		              <h5>Get in touch!</h5>
		              {{--<p class="mb-3">Let us know more about you !</p>--}}
		              <p class="mb-3">Please share in brief, issue you are facing!</p>
		              <form action="#" method="POST">
		              	<input type="hidden" id="contact_by" name="contact_by" value="{{$raise['contact_by'] ?? '2'}}">
		                <div class="row">
							<div class="col-md-12 success"></div>
							<div class="col-md-6">
								<div class="form-group">
								<!-- <label>Your Name</label> -->
								<input type="text" name="name" class="form-control transparent name" placeholder="Name" value="{{$raise['name'] ?? ''}}">
								<span class="error-name text-danger"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<!-- <label>Your Email</label> -->
								<input type="email" name="email" class="form-control transparent email"  placeholder="Email" value="{{$raise['email'] ?? ''}}">
								<span class="error-email text-danger"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<!-- <label>Your Phone</label> -->
								<input type="number" name="phone" class="form-control transparent phone" placeholder="Phone" autocomplete="disabled" value="{{$raise['phone'] ?? ''}}"> 
								<span class="error-phone text-danger"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<!-- <label>Subject</label> -->
								<input type="text" name="subject" class="form-control transparent subject" placeholder="Subject" value="{{isset($raise) ? $raise['subject'].' ('.$raise['contract_id'].')' : ''}}">
								<span class="error-subject text-danger"></span>
								</div>
								</div>
							<div class="col-md-12">
								<div class="form-group">
									<!-- <label>Message</label> -->
									<textarea class="form-control transparent message" rows="5" placeholder="Write your message to dispute">{{$raise['message'] ?? ''}}</textarea>
									<span class="error-message text-danger"></span>
								</div>
								<button type="button" class="btn-medium submit">Send</button>
							</div>
		                </div>
		              </form>
		            </div>
		          </div>
		          <div class="col-md-5 offset-md-1">
		            <div class="contact_info">
		              <h5 class="mb-3">Contact Information</h5>
		              <div class="info_item">
		                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {!! $settInfo->address ?? 'Resin Trader 5751 Edgewood Rd.<br>USA, New York 43654' !!}</p>
		              </div>
		              <div class="info_item">
		                <p><i class="fa fa-phone" area-hidden="true"></i> <a href="tel:7412589650">{{ $settInfo->phone ?? '7412589650' }}</a></p>
		              </div>
		              <div class="info_item">
		                <p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:{{ $settInfo->email  ?? 'info@resintrader.com'}}">{{ $settInfo->email  ?? 'info@resintrader.com'}}</a></p>
		              </div>
		              
		              <h5 class="mt-4">Follow Us</h5>
		              <ul class="footer-social">
						<li><a href="{{ $settInfo->facebook ?? 'https://www.facebook.com/' }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="{{ $settInfo->twitter ?? 'https://www.twitter.com/' }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="{{ $settInfo->instagram ?? 'https://www.instagram.com/' }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="{{ $settInfo->linkedin ?? 'https://www.linkedin.com/' }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
					</ul>
		            </div>
		          </div>
		        </div>
		    </div>
		</div>
	</section>

	{{-- <section class="contact_sec1">
	    <div class="container">
	    	<div class="row">
		        <div class="col-md-4 col-sm-12">
		          <div class="contact_info_item text-center">
		            <img src="{{ asset('frontend/assets/images/call.png') }}" class="img-fluid" alt="icons">
		            <h5 class="mt-3">+1 88 8888 8888 <br> +1 42 4242 4242</h5>
		          </div>
		        </div>
		        <div class="col-md-4 col-sm-12">
		          <div class="contact_info_item text-center">
		            <img src="{{ asset('frontend/assets/images/location.png') }}" class="img-fluid" alt="icons">
		            <h5 class="mt-3">4356 ST-Francois<br> SS-Laurent DQ, H4S 1A6</h5>
		          </div>
		        </div>
		        <div class="col-md-4 col-sm-12">
		          <div class="contact_info_item text-center">
		            <img src="{{ asset('frontend/assets/images/message.png') }}" class="img-fluid" alt="icons">
		            <h5 class="mt-3">resintrader@gmail.com<br> info@resintrader.com</h5>
		          </div>
		        </div>
		    </div>
		    <div class="contact_info_box mt-5">
		        <div class="row">
		          <div class="col-md-6">
		            <div class="contact_sec1_left">
		              <h5>Send us a Message</h5>
		              <form action="">
		                <div class="row">
		                  <div class="col-md-6">
		                    <div class="form-group">
		                      <label>Your Name</label>
		                      <input type="" name="" class="form-control">
		                    </div>
		                  </div>
		                  <div class="col-md-6">
		                    <div class="form-group">
		                      <label>Your Email</label>
		                      <input type="" name="" class="form-control">
		                    </div>
		                  </div>
		                  <div class="col-md-6">
		                    <div class="form-group">
		                      <label>Your Phone</label>
		                      <input type="" name="" class="form-control">
		                    </div>
		                  </div>
		                  <div class="col-md-6">
		                    <div class="form-group">
		                      <label>Subject</label>
		                      <input type="" name="" class="form-control">
		                    </div>
		                    </div>
		                  <div class="col-md-12">
		                    <div class="form-group">
		                      <label>Message</label>
		                      <textarea class="form-control" rows="5"></textarea>
		                    </div>
		                    <button type="button" class="btn-medium">Send</button>
		                  </div>
		                </div>
		              </form>
		            </div>
		          </div>
		          <div class="col-md-6">
		          	<div class="contact-image">
		          		<img src="{{ asset('frontend/assets/images/contact-1.png') }}" alt="">
		          	</div>
		          </div>
		        </div>
		    </div>
	    </div>
	</section> --}}

@endsection
@section('javascript')
<script>
	//Disabled Cut Copy Paste
	$('.phone').on("cut copy paste",function(e) {
      e.preventDefault();
   	});
	//phone number keypress validation
	$(document).on('keypress','.phone',function(){
		if(event.keyCode == '101' || event.keyCode == '43' || $(this).val().length >= 10 || event.keyCode == 99 || event.keyCode == 17){ //restrict e or + in phone number
			return false;
		}
	});
	//Form Submit
	$(document).on('click','.submit',function(){
		var name = $('.name').val();
		var email = $('.email').val();
		var phone = $('.phone').val();
		var subject = $('.subject').val();
		var message = $('.message').val();
		var contact_by = $('#contact_by').val();

		var error = true;
		//Validate Name
		if(name == '' || name == undefined){
			$(this).closest('.row').find('.error-name').last().html(' ');
			$(this).closest('.row').find('.error-name').last().append('This field is required.');
			error = false;
		}else{
			error = true;
			$(this).closest('.row').find('.error-name').last().html(' ');
		}
		//Validate Email
		if(email == '' || email == undefined){
			$(this).closest('.row').find('.error-email').last().html(' ');
			$(this).closest('.row').find('.error-email').last().append('This field is required.');
			error = false;
		}else{
			error = true;
			$(this).closest('.row').find('.error-email').last().html(' ');
			if(isValidEmailAddress(email)){
				$(this).closest('.row').find('.error-email').last().html(' ');
				error = true;
			}else{
				$(this).closest('.row').find('.error-email').last().html(' ');
				$(this).closest('.row').find('.email').next().append('<span>Please enter valid email address.</span>');	
				error = false;
			}
		}
		//Validate Phone
		if(phone == '' || phone == undefined){
			$(this).closest('.row').find('.error-phone').last().html(' ');
			$(this).closest('.row').find('.error-phone').last().append('This field is required.');
			error = false;
		}else{
			error = true;
			$(this).closest('.row').find('.error-phone').last().html(' ');
			if(phone.length < '10'){
				$(this).closest('.row').find('.error-phone').last().append('Please enter 10 digits only.');
			}else{
				$(this).closest('.row').find('.error-phone').last().html(' ');
				error = true;
			}
		}
		//Validate Subject
		if(subject == '' || subject == undefined){
			$(this).closest('.row').find('.error-subject').last().html(' ');
			$(this).closest('.row').find('.error-subject').last().append('This field is required.');
			error = false;
		}else{
			error = true;
			$(this).closest('.row').find('.error-subject').last().html(' ');
		}
		//Validate Message
		if(message == '' || message == undefined){
			$(this).closest('.row').find('.error-message').last().html(' ');
			$(this).closest('.row').find('.error-message').last().append('This field is required.');
			error = false;
		}else{
			error = true;
			$(this).closest('.row').find('.error-message').last().html(' ');
		}

		if(error){
			$.ajax({
				url : '/contact-us',
				method: 'post',
				data : {_token:'{{csrf_token()}}', name:name, email:email, phone:phone, subject:subject, message:message, contact_by:contact_by},
				success:function(data){
					if(data.status == 'success'){
						var row = '';
						row += '<div class="alert alert-card alert-success" role="alert"><strong class="text-capitalize">Thank you!</strong> 	Your message has been successfully sent.';
						row += '	<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>';
						row += '<br />We will contact you very soon!';
						row += '</div>';
						$('.success').html(' ');
						$('.success').append(row);
								// setTimeout(function() {
								// 	window.location.href = 'http://resin.c247.website';
								// }, 5000);

						$('.name').val(null);
						$('.email').val(null);
						$('.phone').val(null);
						$('.subject').val(null);
						$('.message').val(null);
					}
				}
			});
		}

	});

	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	}

</script>
@endsection
