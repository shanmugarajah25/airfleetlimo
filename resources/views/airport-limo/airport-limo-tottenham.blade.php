@extends('Layouts.app')
@section('content')
    <div class="top-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('../front/images/top-banner-city.png');">
        <div class="head text-center">
            <h2>Airport Services</h2>
            <h1>Airport Limo service - TOTTENHAM</h1>
        </div>
    </div>
    <!--top banner section end-->

    <!--ajax contant start-->
    <div class="ajax-contant">
        <div class="image-contant">
            <img src="{{ asset('images/city-img.png') }}" alt="">
            <p><strong>Airport limousine service from / to Tottenham</strong> - Airfleet limousine specializes in
                providing Tottenham
                <a href="../index.html">airport limo service</a> to and from <strong>Toronto Pearson Airport, Toronto
                    Island Airport and
                    Buffalo Airport.</strong> With over <strong>85 luxury vehicles in its fleet,</strong> Airfleet
                Limousine
                provides reliable and economical flat-rate airport limousine and taxi transportation to / from Tottenham
                and
                surrounding areas.
            </p>

            <p>Why not avoid the hassle of traffic delays to and from the airport, parking difficulties, and expensive,
                undependable and expensive taxi cab rides, and leave your airport transportation arrangements to the
                professionals. We are committed to providing you with <strong>highest standard, reliable and
                    timely</strong>
                airport limousine service from/to Tottenham and surrounding areas.</p>

            <p>Airport limo service is the most reliable, hassle-free option for airport <strong>transportation from
                    Tottenham.</strong> We will ensure that your ride to the Airport from / to Tottenham, is filled with
                <strong>style, elegance and comfort.</strong>
            </p>

            <p> We understand the value of providing professional staff and timely service, which make us the preferred
                choice for <a href="../services/toronto-airport-limo-service.html">toronto airport limousine</a>
                transportation for our repeated customers. Airfleet
                limo services are available for your convenience <strong>24 hours a day and 365 days a year.</strong>
            </p>

        </div>

        <div class="boxes-contant">
            <div class="top-box">
                <h6>Download</h6>
                <a href="../taxi-limo-outoftown.pdf"><i class="fa-regular fa-file-pdf"></i> Limo / Taxi Tariffs -
                    Out-of-Town <i class="fa-solid fa-arrow-down"></i></a>
            </div>
            <div class="bottom-box">
                <img src="../{{ asset('images/Airfleet-main-logo.png') }}" alt="logo">
                <h6 class="text-center">Need help? we are here<br>to help you</h6>
                <div class="box">
                    <strong>85+ Executive Limousines</strong>
                    <strong>Save up to <span>20% off</span></strong>
                </div>
                <a href="../contact-us.html">Contact us</a>
            </div>
        </div>
    </div>
    <!--ajax contant end-->

    <!--ajax banner section start-->
    <div class="ajax-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url('../front/images/city-banner.png');">
        <div class="head text-center">
            <p><span>Never miss a flight!</span> Choose one of our <span>50 luxurious vehicles</span> for your ride from
                /
                to the airport and let one of our<br><span>dedicated chauffeurs serve you</span>, to make sure that you
                will
                be there on time, hassle-free and comfortably. Take<br>advantage of our <span>DISCOUNTED rates between
                    Tottenham
                    and Airport.</span></p>
            <a href="../contact-us.html">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->

    <!--map section start-->
    <div class="map-content">
        <div class="head">
            <h6>AIRPORT LIMO FROM TOTTENHAM TO TORONTO PEARSON AIRPORT</h6>
        </div>

        <!--map view-->
        <div class="ajax-map">
            <iframe
                src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Tottenham,+ON,+Canada&amp;daddr=Toronto+Pearson+International+Airport,+Mississauga,+ON,+Canada&amp;hl=en&amp;geocode=Far5mwId-ARH-ykJtmaeXtDUiTF7gEckzmNu8A%3BFRZ4mgIdjAVB-yHFDgPE6V0dtCmR1C3ASjkriDHFDgPE6V0dtA&amp;aq=&amp;sll=43.409084,-80.167803&amp;sspn=0.58362,1.352692&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=43.734256,-79.424007&amp;spn=0.105653,0.384581&amp;output=embed"
                height="220" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <!--/map view-->

        <div class="para">
        </div>

        <div class="service">
            <h6>Our finest Airport Limousine Services</h6>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Toronto <span>Pearson Airport limousine</span> service from / to Tottenham</p>
            </div>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Toronto Island Airport limousine service from / to Tottenham</p>
            </div>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Buffalo Airport Limo Service from / to Tottenham</p>
            </div>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Airport meet and greet service</p>
            </div>
        </div>
    </div>
    <!--map section end-->


    <!--ajax banner section start-->
    <div class="ajax-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.85),rgba(0, 0, 0, 0.85)),url('../front/images/city-banner.png');">
        <div class="head text-center">
            <p>Our experts are just a call away <span>416-447-5000 / 1-866-991-5548</span>, which makes you one<br>call
                away
                from an incredible experience on your airport limo from / to Tottenham.<br>
                To book your airport limo</p>
            <a href="../contact-us.html">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->
@endsection
