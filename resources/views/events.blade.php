@extends('master')

@section('title', 'Events')

@section('content')

<style>
body {
    background: black;
}
</style>

    <div class="container-fluid events no-padding">
        <div class="event col-xs-12">
            <img class="event-img" src="img/deadmau5.jpg" />
            <div class="event-title col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h1>DEADMAU5 CONCERT</h1>
                    </div>
                </div>
            </div>
            <div class="event-date col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h2>3 MI | MAR 24</h2>
                    </div>
                </div>
            </div>
            <div class="event-checkbox"> </div>
            <div class="event-groups">
                <i class="fa fa-users"></i> 23
            </div>
        </div>

        <div class="event col-xs-12">
            <img class="event-img" src="img/farmersmarket.png" />
            <div class="event-title col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h1>FARMER'S MARKET</h1>
                    </div>
                </div>
            </div>
            <div class="event-date col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h2>7.9 MI | THURSDAYS</h2>
                    </div>
                </div>
            </div>
            <div class="event-checkbox"> </div>
            <div class="event-groups">
                <i class="fa fa-users"></i> 31
            </div>
        </div>

        <div class="event col-xs-12">
            <img class="event-img" src="img/burger.png" />
            <div class="event-title col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h1>BURGER UTOPIA FESTIVAL</h1>
                    </div>
                </div>
            </div>
            <div class="event-date col-xs-12">
                <div class="row">
                    <div class="col-md-10">
                        <h2>4 MI | Mar 19</h2>
                    </div>
                </div>
            </div>
            <div class="event-checkbox"> </div>
            <div class="event-groups">
                <i class="fa fa-users"></i> 180
            </div>
        </div>


        <div class="clearfix"></div>
<!--         <div class="event col-xs-12">
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
        </div> -->
    </div>
@endsection