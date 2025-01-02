@extends('Layouts.app')
@section('content')
    <!--luxury limousine service banner section start-->
    <section class="fleet">
        <div class="head">
            <h2>Our services</h2>
            <h1>Luxury Limousine Service</h1>
        </div>
    </section>
    <!--luxury limousine service banner section end-->

    <div class="service-para d-flex justify-content-center">
        <div class="text-center">
            <p>With many years of experience with airport ground transportion in Toronto, Airfleet Limousine continues
                to be an industry icon with infrastructure & capability that remains to be unmatched by any of it's
                competitors.</p>

            <p>Airfleet Limousine has designed an array of limousine services that cater to every singular need of our
                customers. We are at your beck and call and do our best to satisfy your transportation needs. We are
                available anytime, any day.</p>

            <p>The moment our customer service receives a call from a customer, we forward the information to the
                dispatching system. The dispatcher will then transfer the details to our first available independent
                contracted driver, who will attend the customer accordingly.</p>
        </div>
    </div>

    <div class="service-img d-flex justify-content-center">
        <img src="{{asset('images/service-img.png')}}" alt="service">
    </div>

    @include('Layouts.newsLetter')
@endsection






