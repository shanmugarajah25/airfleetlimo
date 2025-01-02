@extends('Layouts.app')
@section('content')
    <!--airport-taxi banner section start-->
    <section class="fleet airport-taxi-banner">
        <div class="head">
            <h2>Our services</h2>
            <h1>Airport Taxi</h1>
            <p>Airport taxi services rendered by Airfleet Limousine can ensure that you get the best for your
                transportation to and from the airport. We are proud to provide airport taxi services to and from
                Toronto Pearson Airport, Toronto Island Airport, Buffalo Airport and other Airports surrounding Toronto.
                Our drivers are well versed in finding the best navigational route and are held to very strict and high
                quality company standards.</p>
        </div>
    </section>
    <!--airport-taxi banner section end-->

    <!--airport-taxi section start-->
    <section class="airport-taxi discipline">
        <div class="row">
            <div class="col-md-6">
                <h1>Airport Taxi</h1>
                <p>You can expect only great service offered by a company with 10 years of reliable and flawless
                    industry experience in Toronto airport taxi services. Individuals and Corporate customers have been
                    enjoying our airport transportation services since our inception.</p>

                <p>Airport taxi can be booked with Airfleet Limousine at an affordable price. We can provide you with
                    the services which can make your travel a relaxing experience. Booking an airport taxi is very easy
                    with us as you can call us or can follow the easy steps to make an online reservation at our
                    website. You can also select the kind of vehicle needed, including number of people, child seats,
                    and other options.</p>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="{{asset("images/airport-taxi.png")}}" alt="executive">
                </div>
            </div>
        </div>
    </section>
    <!--airport-taxi section end-->

    <!--airport taxi fleet start-->
    <section class="fleet-img airport-taxi-fleet">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/airport-taxi-fleet.png')}}" alt="suv">
            </div>
            <div class="col-md-6">
                <div class="para">
                    <h1>Airport taxi fleet</h1>
                    <p>Our airport taxi fleet consists of over 50 luxury vehicles including Lincoln town car sedans,
                        Mercedes Benz, 7 passenger SUVs, 8 to 15 passenger vans. Our fleet is well maintained beyond the
                        standards set by the Greater Toronto Airport Authority. Airport taxi fleetOur prized experience
                        and continuous research into economics allow us to provide the best airport transportation
                        services at affordable rates. Click here for our airport taxi rates.</p>
                </div>
            </div>
        </div>
    </section>
    <!--airport taxi fleet end-->

    <div class="airport-taxi-para d-flex justify-content-center">
        <div class="text-center">
            <p>Arrange your airport taxi ride with our online reservation facility. Be sure of a comfortable and
                hassle-free travel from or to airport that awaits you. Our Elite Team of customer service specialists
                are always available to assist you.
            </p>
        </div>
    </div>

    @include('Layouts.newsLetter')

@endsection





