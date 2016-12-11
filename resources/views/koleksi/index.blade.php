@extends('layouts.app')

@section('content')
	<section class="about-header">
		<div class="container">
			<div class="about-content">
				<h3>Photo Collection</h3>
				<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</h5>
				<h5>Seasson I</h5>
			</div>
		</div>
	</section>
	<section class="foto-section"> 
		<div class="container">
			<div class="col-xs-12" style="margin-top: 50px;">
				<div class="col-md-4 col-xs-12 col-sm-6 f"><img class="img-responsive" src="img/p1.jpg"></div>
				<div class="col-md-4 col-xs-12 col-sm-6 f"><img class="img-responsive" src="img/p2.jpg"></div>
				<div class="col-md-4 col-xs-12 col-sm-6 f"><img class="img-responsive" src="img/p3.jpg"></div>
				<div class="col-md-4 col-xs-12 col-sm-6 f"><img class="img-responsive" src="img/p4.jpg"></div>
				<div class="col-md-4 col-xs-12 col-sm-6 f"><img class="img-responsive" src="img/p5.jpg"></div>
			</div>
		</div>
	</section>
@endsection