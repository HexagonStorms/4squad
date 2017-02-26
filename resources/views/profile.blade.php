@extends('master')

@section('title', 'Profile')

@section('content')
	<div class="profile container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<img src="img/ProfileImage.png" class="profile-img" />
			</div>
		</div>
		<div class="row profile-info">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-12">
						<h1>TODD RACHOWIN, 25</h1>
					</div>
					<div class="col-md-12">
						<h4>FEMALE</h4>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6 text-center">
						<H5>POD PTS</H5>
						<div class="number-box">
							11
						</div>
					</div>
					<div class="col-xs-6 text-center">
						<H5>LIKES</H5>
						<div class="number-box">
							11
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="black-line">
		<div class="past-events">
			<div class="row">
				<div class="col-md-12">
					<H1>PAST EVENTS</H1>
				</div>
			</div>
			<div class="row past-event">
				<div class="col-md-10 ">
					<h1>SAN ANTONIO NEW YEAR CELEBRATION</h1>
				</div>
				<div class="col-md-2 text-center past-event-settings">
					<h1>...</h1>
				</div>
			</div>
			<div class="row past-event">
				<div class="col-md-10 ">
					<h1>JON BELLION CONCERT</h1>
				</div>
				<div class="col-md-2 text-center past-event-settings">
					<h1>...</h1>
				</div>
			</div>
			<div class="row past-event">
				<div class="col-md-10 ">
					<h1>AUSTIN CITY LIMITS</h1>
				</div>
				<div class="col-md-2 text-center past-event-settings">
					<h1>...</h1>
				</div>
			</div>
			<div class="row past-event">
				<div class="col-md-10 ">
					<h1>TOUGH MUDDER</h1>
				</div>
				<div class="col-md-2 text-center past-event-settings">
					<h1>...</h1>
				</div>
			</div>
			<div class="row past-event">
				<div class="col-md-10 ">
					<h1>KTSW THIRD THURSDAY</h1>
				</div>
				<div class="col-md-2 text-center past-event-settings">
					<h1>...</h1>
				</div>
			</div>

		</div>
	</div>
@endsection