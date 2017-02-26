@extends('master')

@section('title', 'Events')

@section('content')
    <div class="events">
        <div class="event col-xs-12">
            <div class="calendar-date">
                <span class="event-month">March</span>
                <span class="event-day">17</span>
            </div>
            <img class="event-img" src="img/deadmau5.jpg" />
            <div class="row">
                <button class=" col-xs-4 col-sm-3 col-md-1 join-button"><i class="fa fa-user-plus"></i></button>
                <button class=" col-xs-8 col-sm-9 col-md-11 info-button">Deadmau5 Concert - San Antonio, TX</button>
            </div>
        </div>

        <div class="event col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <img class="event-img" src="img/coffee.png" />
                </div>
            </div>
            <div class="row">
                <button class=" col-xs-4 col-sm-3 col-md-1 join-button"><i class="fa fa-user-plus"></i></button>
                <button class=" col-xs-8 col-sm-9 col-md-11 info-button">FOD Coffee Shop - San Antonio, TX</button>
            </div>
        </div>

        <div class="event col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <img class="event-img" src="img/farmersmarket.png" />
                </div>
            </div>
            <div class="row">
                <button class=" col-xs-4 col-sm-3 col-md-1 join-button"><i class="fa fa-user-plus"></i></button>
                <button class=" col-xs-8 col-sm-9 col-md-11 info-button">Farmer's Market - San Antonio, TX</button>
            </div>
        </div>

        <div class="event col-xs-12">
            <div class="row">
                <div class="col-md-12">
                    <img class="event-img" src="img/burger.png" />
                </div>
            </div>
            <div class="row">
                <button class=" col-xs-4 col-sm-3 col-md-1 join-button"><i class="fa fa-user-plus"></i></button>
                <button class=" col-xs-8 col-sm-9 col-md-11 info-button">Hopdoddy - San Antonio, TX</button>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
@endsection