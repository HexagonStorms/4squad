@extends('master')

@section('title', 'Chats')

@section('content')
    <div class="chats container-fluid">
    	<div class="row chat" style="background: #cecece;">
    		<div class="col-xs-6 col-sm-4 col-md-4">
    			<div class="chat-img-holder">
    				<img src="img/Composite.png" class="chat-img">
    			</div>
    		</div>
    		<div class="col-xs-6 col-sm-8 col-md-8">
    			<div class="row">
    				<div class="col-md-12 chat-event-title">
    					<h1>DEADMAU5 CONCERT</h1>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-date">
    					<h5>MARCH 24</h5>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-time">
    					<h5>7 PM - 1 AM</h5>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="row chat">
    		<div class="col-xs-6 col-sm-4 col-md-4 chat-img-holder">
    			<img src="img/Composite.png" class="chat-img">
    		</div>
    		<div class="col-xs-6 col-sm-8 col-md-8">
    			<div class="row">
    				<div class="col-md-12 chat-event-title">
    					<h1>FARMER'S MARKET</h1>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-date">
    					<h5>THIS THURSDAY</h5>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-time">
    					<h5>12 PM - 4 PM</h5>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="row chat" style="background: #cecece;">
    		<div class="col-xs-6 col-sm-4 col-md-4 chat-img-holder">
    			<img src="img/Composite.png" class="chat-img">
    		</div>
    		<div class="col-xs-6 col-sm-8 col-md-8">
    			<div class="row">
    				<div class="col-md-12 chat-event-title">
    					<h1>BURGER UTOPIA FESTIVAL</h1>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-date">
    					<h5>MARCH 19</h5>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12 chat-event-time">
    					<h5>ALL DAY</h5>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
@endsection