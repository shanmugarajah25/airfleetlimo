@extends('Layouts.app')
@section('content')

    <div class="top-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('../front/images/top-banner-city.png');">
        <div class="head text-center">
            <h2>Airport Services</h2>
            <h1>Airport Limo service - BRAMPTON</h1>
        </div>
    </div>
    <!--top banner section end-->

    <!--ajax contant start-->
    <div class="ajax-contant">
        <div class="image-contant">
            <img src="{{asset('images/city-img.png')}}" alt="">
            <p><strong>Airport limousine service from / to Brampton</strong> - Airfleet limousine specializes in
                providing Brampton
                <a href="{{route('home')}}">airport limo service</a> to and from <strong>Toronto Pearson Airport, Toronto
                    Island Airport and
                    Buffalo Airport.</strong> With over <strong>85 luxury vehicles in its fleet,</strong> Airfleet
                Limousine
                provides reliable and economical flat-rate airport limousine and taxi transportation to / from Brampton
                and
                surrounding areas.
            </p>

            <p>Why not avoid the hassle of traffic delays to and from the airport, parking difficulties, and expensive,
                undependable and expensive taxi cab rides, and leave your airport transportation arrangements to the
                professionals. We are committed to providing you with <strong>highest standard, reliable and
                    timely</strong>
                airport limousine service from/to Brampton and surrounding areas.</p>

            <p>Airport limo service is the most reliable, hassle-free option for airport <strong>transportation from
                    Brampton.</strong> We will ensure that your ride to the Airport from / to Brampton, is filled with
                <strong>style, elegance and comfort.</strong>
            </p>

            <p> We understand the value of providing professional staff and timely service, which make us the preferred
                choice for <a href="{{route('services.toronto-airport-limo-service')}}">toronto airport limousine</a>
                transportation for our repeated customers. Airfleet
                limo services are available for your convenience <strong>24 hours a day and 365 days a year.</strong>
            </p>

        </div>

        <div class="boxes-contant">
            <div class="top-box">
                <h6>Download</h6>
                <a href="{{asset('taxi-limo-outoftown.pdf')}}"><i class="fa-regular fa-file-pdf"></i> Limo / Taxi Tariffs -
                    Out-of-Town <i class="fa-solid fa-arrow-down"></i></a>
            </div>
            <div class="bottom-box">
                <img src="{{asset('images/Airfleet-main-logo.png')}}" alt="logo">
                <h6 class="text-center">Need help? we are here<br>to help you</h6>
                <div class="box">
                    <strong>85+ Executive Limousines</strong>
                    <strong>Save up to <span>20% off</span></strong>
                </div>
                <a href="{{route('contact-us')}}">Contact us</a>
            </div>
        </div>
    </div>
    <!--ajax contant end-->

    <!--ajax banner section start-->
    <div class="ajax-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url('{{asset('images/city-banner.png')}}');">
        <div class="head text-center">
            <p><span>Never miss a flight!</span> Choose one of our <span>50 luxurious vehicles</span> for your ride from
                /
                to the airport and let one of our<br><span>dedicated chauffeurs serve you</span>, to make sure that you
                will
                be there on time, hassle-free and comfortably. Take<br>advantage of our <span>DISCOUNTED rates between
                    Brampton
                    and Airport.</span></p>
            <a href="{{route('contact-us')}}">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->

    <!--map section start-->
    <div class="map-content">
        <div class="head">
            <h6>AIRPORT LIMO FROM BRAMPTON TO TORONTO PEARSON AIRPORT</h6>
        </div>

        <!--map view-->
        <div class="ajax-map">
            <iframe
                src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Brampton,+ON,+Canada&amp;daddr=Toronto+Pearson+International+Airport,+Mississauga,+ON,+Canada&amp;hl=en&amp;geocode=Far5mwId-ARH-ykJtmaeXtDUiTF7gEckzmNu8A%3BFRZ4mgIdjAVB-yHFDgPE6V0dtCmR1C3ASjkriDHFDgPE6V0dtA&amp;aq=&amp;sll=43.409084,-80.167803&amp;sspn=0.58362,1.352692&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=43.734256,-79.424007&amp;spn=0.105653,0.384581&amp;output=embed"
                height="220" width="100%" frameborder="0" marginwidth="0" marginheight="0"
                scrolling="no"></iframe>
        </div>
        <!--/map view-->

        <div class="para">
            <p>Brampton is a city in Southern Ontario Canada. It is the third-largest city in the Greater Toronto Area
                (GTA) of Ontario, Canada and the seat of Peel Region. As of the 2011 census, Brampton\&#039;s population
                was 523,911, making it the ninth largest city in Canada. With the median age at 33.7, it is the youngest
                community in the GTA. Brampton is served by several major transportation routes: Highway 401 from
                Toronto is a short distance south in Mississauga, and can be reached by Highway 410, which runs
                north-south through the middle of the city. Highway 407 runs along the southern portion of the city,
                just north of the boundary with Mississauga. </p>
        </div>

        <div class="service">
            <h6>Our finest Airport Limousine Services</h6>

            <div class="box">
                <img src="{{asset('images/map-mark.png')}}" alt="mark img">
                <p>Toronto <span>Pearson Airport limousine</span> service from / to Brampton</p>
            </div>

            <div class="box">
                <img src="{{asset('images/map-mark.png')}}" alt="mark img">
                <p>Toronto Island Airport limousine service from / to Brampton</p>
            </div>

            <div class="box">
                <img src="{{asset('images/map-mark.png')}}" alt="mark img">
                <p>Buffalo Airport Limo Service from / to Brampton</p>
            </div>

            <div class="box">
                <img src="{{asset('images/map-mark.png')}}" alt="mark img">
                <p>Airport meet and greet service</p>
            </div>
        </div>
    </div>
    <!--map section end-->


    <!--ajax banner section start-->
    <div class="ajax-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url('{{asset('images/city-banner.png')}}');">
        <div class="head text-center">
            <p>Our experts are just a call away <span>416-447-5000 / 1-866-991-5548</span>, which makes you one<br>call
                away
                from an incredible experience on your airport limo from / to Brampton.<br>
                To book your airport limo</p>
            <a href="{{route('contact-us')}}">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->
@endsection

