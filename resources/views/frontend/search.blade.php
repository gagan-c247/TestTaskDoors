@extends('frontend.frontBase')
@section('content')
	<section class="search_sec1 common-sec1 bgimg" style="background-image: url(frontend/assets/images/bg1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="welcome-content text-center mb-5">
						<h4 class="mb-3">Resin Search Advanced Filter</h4>
						<p>To start you serch, select a resin type and press begin search</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 m-auto">
					<div class="begin-search">
						<select class="form-control">
							<option value="">Resin Type</option>
							<option value="HIIPS">HIIPS</option>
							<option value="ABS">ABS</option>
							<option value="ASA">ASA</option>
							<option value="Polyethylene">Polyethylene</option>
							<option value="PolyPropolene">PolyPropolene</option>
							<option value="PPO/PPE">PPO/PPE</option>
							<option value="Nylon 6">Nylon 6</option>
							<option value="Nylon 6/6">Nylon 6/6</option>
							<option value="Nylon 6/12">Nylon 6/12</option>
							<option value="Nylon Other">Nylon Other</option>
							<option value="PBT">PBT</option>
							<option value="PMMA">PMMA</option>
							<!-- <option value="PC">PC</option>
							<option value="PC / ABS">PC / ABS</option>
							<option value="Acetal">Acetal</option>
							<option value="PEEK">PEEK</option>
							<option value="PEI">PEI</option>
							<option value="PPS">PPS</option>
							<option value="TPE / TPV / TPU">TPE / TPV / TPU</option>
							<option value="PBT/Polycarbonate">PBT/Polycarbonate</option>
							<option value="PBT/Other Blends">PBT/Other Blends</option> -->
						</select>
						<div class="text-center">
							<button class="btn mt-4">Begin Search!</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<img src="assets/images/money-hand.png" class="moneyimg">
	</section>
@endsection
@section('javascript')
@endsection