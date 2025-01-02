@extends('Layouts.app')
@section('content')
    <!--our fleet banner section start-->
    <section class="our-fleet">
        <div class="our-fleet-content">
            <div class="our-fleet-banner"
                style="background-image: linear-gradient(90deg, #000000 0%, rgba(0, 0, 0, 0.65) 100%),url({{asset('images/our-fleet.png')}});">
                <div class="head">
                    <h2>Our fleet</h2>
                    <h1>Experience the<br>world-class ride with us</h1>
                    <p>Airfleet Limousine has a line up of luxurious limousines, cars and coaches to match different
                        needs of different<br>personalities and groups. Our fleet has a full range of Black Town Cars,
                        Passenger Vans, SUV, Stretch Limousines,<br>Executive coaches and Escalades, and includes all
                        passenger amenities.</p>
                </div>
            </div>
        </div>
    </section>
    <!--our fleet banner section end-->

    <!--executive sedan limousine section start-->
    <section class="executive discipline">
        <div class="row">
            <div class="col-md-6">
                <h1>Executive Sedan<br>Limousine</h1>
                <p>Our sedans have comfortable seating arrangements for four and more, and are roomy to hold a large
                    luggage. The sedans are ideal vehicles for business meetings, airport services, sporting events and
                    dinners.</p>

                <p>The grand look of our black car limousines will augment the presence of our clients in any event. The
                    interior of our executive sedan limousines are furnished with soft leather trim that accentuates the
                    richness of the inside of the car. With more rear leg room, they enhance the comfortability of
                    passengers.</p>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="{{asset('images/executive.png')}}" alt="executive">
                </div>
            </div>
        </div>
    </section>
    <!--executive sedan limousinesection end-->

    <!--suv limousine section start-->
    <section class="fleet-img suv">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/suv.png')}}" alt="suv">
            </div>
            <div class="col-md-6">
                <div class="para">
                    <h1>SUV Limousine</h1>
                    <p>Our SUV limousines combine the features of a pick-up truck and the large carrying space of a mini
                        van. The vehicles are capable of on or off road navigation. For a larger number of passengers,
                        who would like to enjoy a ride in a luxurious manner, our SUV limousine series will be the right
                        choice.</p>
                </div>
            </div>
        </div>
    </section>
    <!--suv limousine section end-->

    <!--stretch limousine section start-->
    <section class="fleet-img stretch">
        <div class="row">
            <div class="col-md-6">
                <div class="para">
                    <h1>Stretch Limousine</h1>
                    <p>Airfleet Limousine operates stretch limousines that can hold passengers up to the highest
                        capacity. Besides, our stretch limousines are equipped with all the luxury amenities to pamper
                        the needs of a travel.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/stretch.png')}}" alt="stretch">
            </div>
        </div>
    </section>
    <!--stretch limousine section end-->

    <!--passenger section start-->
    <section class="fleet-img passenger">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/passenger.png')}}" alt="passenger">
            </div>
            <div class="col-md-6">
                <div class="para">
                    <h1>Passenger Vans</h1>
                    <p>Our passenger vans provide ample room for a group of family members or friends when they take a
                        ride out to somewhere. There is space enough to hold a large amount of luggage also.</p>
                </div>
            </div>
        </div>
    </section>
    <!--passenger section end-->

    <!--executive coaches section start-->
    <section class="fleet-img coaches">
        <div class="row">
            <div class="col-md-6">
                <div class="para">
                    <h1>Executive Coaches</h1>
                    <p>Our luxurious executive coaches can conveniently accommodate a considerable number of passengers.
                        They are designed to have all the equipment to provide enjoyment and entertainment. Our coaches
                        come in with air conditioner/heater, refrigeration, a good music system, mic facility, ample
                        luggage space and comfortable seating arrangements.</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('images/coaches.png')}}" alt="coaches">
            </div>
        </div>
    </section>
    <!--executive coaches section end-->

    @include('Layouts.newsLetter')
@endsection
