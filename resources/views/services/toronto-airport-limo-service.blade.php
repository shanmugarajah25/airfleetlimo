@extends('Layouts.app')
@section('content')

        <!--toronto airport limo service banner section start-->
        <section class="fleet airport-taxi-banner limo-service">
            <div class="head">
                <h2>Our services</h2>
                <h1>Toronto Airport Limo<br>Service</h1>
                <p> Toronto airport limousine service is the first choice for
                    luxury airport ground transportation for business, occasion
                    and holiday travellers. Airfleet limousine has many years of
                    experience, serving Greater Toronto Area with professional
                    and reliable airport limousine services. We provide
                    affordable flat-rate airport limo service to and from
                    Toronto Pearson International Airport and Toronto Island
                    Airport.</p>
            </div>
        </section>
        <!--toronto airport limo service banner section end-->

        <section class="fleet-img airport-limo">
            <div class="row">
                <div class="col-md-6">
                    <div class="para">
                        <p>Our fleet consists of over 85 latest model luxurious
                            vehicles which range from Executive Limousine Town
                            cars, luxury SUVs, Vans and Luxurious Stretch
                            Limousines to accommodate all your luxury airport
                            limousine transportation needs. Our state of the art
                            vehicles are fully equipped with modern luxurious
                            amenities and driven by professionally trained and
                            uniformed chauffeurs. Our dedicated chauffeurs are
                            committed to delivering exceptional airport limo
                            service to ensure that you receive a pleasant,
                            hassle-free, smooth and comfortable ride to your
                            desired destination. We will ensure that your ride
                            to the Toronto Pearson Airport is filled with style,
                            elegance and comfort.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{asset("images/limo-service.png")}}"
                        alt="limo-service">
                </div>
            </div>
        </section>

        <section class="fleet-img toronto">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset("images/airport-limo.png")}}"
                        alt="airport-limo">
                </div>
                <div class="col-md-6">
                    <div class="para">
                        <p>Airfleet Limousine provides professional 24/7
                            customer service, with experienced staff to handle
                            all airport limousine reservations and inquiries.
                            Our staff are trained to help you determine the
                            travel time to and from airport depending on the
                            traffic and weather conditions . They will ensure
                            that the customers reach the airport on time for
                            their flight and the limousine ready at the Airport
                            for their pick up. We also monitor your flight times
                            to ensure that your limousine is at the airport to
                            receive you on time.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="toronto-para text-center">
            <p>We understand the value of providing professional staff and
                timely service, which make us the<br>preferred choice for
                toronto airport limousine transportation for our repeated
                customers.</p>
        </div>

        @include('Layouts.newsLetter')

@endsection

