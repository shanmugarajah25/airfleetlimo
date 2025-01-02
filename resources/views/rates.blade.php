@extends('Layouts.app')
@section('content')
        <!--rates banner section start-->
        <section class="fleet">
            <div class="head">
                <h2>Rates</h2>
                <h1>Travel Made Safe,<br>Comfortable</h1>
                <p>Airfleet Limousine Inc Canada offers an attractive size of
                    fleet to suit different needs and styles of our
                    clients.<br>Rates for our services are subject to change.
                    Customers can get details of our latest tariff by giving us
                    a call.</p>
            </div>
        </section>
        <!--rates banner section end-->

        <!--call us section start-->
        <section class="call-us text-center">
            <h2>Please call us to find our latest Local & Out of Town Special
                Rates.</h2>
            <p>You can view our current rates for Out of Town here.</p>
            <a href="docs/taxi-limo-outoftown.pdf" target="_blank">Limo / Taxi
                Tariffs - Out-of-Town <i class="fa fa-arrow-right"
                    aria-hidden="true"></i></a>
        </section>
        <!--call us section end-->

        @include('Layouts.newsLetter')
@endsection
