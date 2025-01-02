@extends('Layouts.app')
@section('content')

    <!--airport limo service section start-->
    <section class="fleet">
        <div class="head">
            <h2>Our services</h2>
            <h1>Airport Limousine By<br>Airfleet Limousine Inc Canada</h1>
        </div>
    </section>
    <!--airport limo service section start-->

    <div class="airport-para text-center">
        <p>Airfleet Limousine Inc Canada makes your travel easy. Avail our online limousine reservation system to
            arrange a trouble free trip.</p>

        <p>Arrange a planned travel with our online airport limousine reservation facility. Make your travel trouble
            free.</p>

        <p>Avail our online limousine reservation system to avoid last minute hurry burry. Be at peace with the forward
            booking facility.</p>

        <p>Confirm a cab with our online limousine reservation facility. Be sure of a luxurious travel that awaits you.
        </p>
    </div>

    <!--Our limousine fleet section start-->
    <section class="Our-limousine">
        <div class="owl-carousel owl-theme car-slider">
            <div class="slider-cars d-flex justify-content-center">
                <img src="{{asset('images/slider-car.png')}}" alt="cars">
            </div>

            <div class="slider-cars d-flex justify-content-center">
                <img src="{{asset('images/slider-car.png')}}" alt="cars">
            </div>

            <div class="slider-cars d-flex justify-content-center">
                <img src="{{asset('images/slider-car.png')}}" alt="cars">
            </div>
        </div>
    </section>
    <!--Our limousine fleet section end-->

    @include('Layouts.newsLetter')
@endsection
