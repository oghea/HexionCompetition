@extends('layouts.app')

@section('content')
	<section>
		<div class="col-xs-12">
			<div class="container">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="col-xs-6 sosmed" style="margin-top: 60px;">
					<div class="col-xs-12 text-left" style="margin-bottom: 50px;">
						<p>
							Address : U Street Number 9A.
						</p>
						<p>
							Contact : 0812 9734 5428
						</p>
					</div>
					<div class="col-xs-3"><a href="http://facebook.com">F</a></div>
					<div class="col-xs-3"><a href="http://twitter.com">t</a></div>
					<div class="col-xs-3"><a href="https://plus.google.com">G+</a></div>
					<div class="col-xs-3"><a href="http://youtube.com">Youtube</a></div>
				</div>
				<div class="col-xs-6" style="margin-top: 60px;">
					<div class="col-xs-12">
						GET TICKET!
					</div>
					<div class="col-xs-12 text-center">
						<p class="text-justify">We Only sells 1000 ticket, Get Your Ticket only for 100.000 IDR and you'll
							get so much experience.</p>
						<a href="{{url('/tiket')}}"><button class="btn" style="margin-top: 30px;">GET STARTED</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection