@extends('Layouts.app')
@section('content')
<main>

    <!--about us banner section start-->
    <section class="about-us">
        <div class="head">
            <h2>about us</h2>
            <h1>We Will Ride You<br>Wherever You Want to</h1>
        </div>
    </section>
    <!--about us banner section end-->

    <!--about us image section start-->
    <div class="about-us-img">
        <img src="{{asset('images/about-us-img.png')}}" alt="about">
    </div>
    <!--about us image section end-->

    <!--travel made section start-->
    <section class="travel">
        <div class="row">
            <div class="col-md-6">
                <div class="head">
                    <h1>Travel Made Safe,<br>Comfortable</h1>
                </div>
                <div class="para1">
                    <p>Our fleet is an ensemble of luxurious limousines to
                        choose from, which will magnify the personality of
                        our customers. Airfleet Limousine Inc Canada offers
                        the right vehicle to suit the taste of customers
                        according to the demand of the occasion.</p>

                    <p>We engage chauffeurs known for their well manners.
                        They will befriend you quickly, while at the same
                        time maintaining the respectable distance due to a
                        customer. We employ our drivers only after a
                        thorough screening.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="para2">
                    <p>Toronto Airport Limo service is a full-service
                        Limousine & Sedan Transportation specializing in
                        providing Local, National & International Clients
                        with the highest quality of service at the most
                        competitive rates in Toronto GTA area making our
                        company the preferred Limousine and Sedan
                        Transportation Service to major corporations,
                        individuals as well as Travel Agents/Meeting
                        Planners & Destination Management Companies.</p>

                    <p>Quality is of the essence throughout and we pride
                        ourselves in being small enough to care, yet large
                        enough to cater for all enquiries. We welcome the
                        opportunity to earn your business. We treat each
                        client as if they are our only client at Toronto
                        Airport Limo. We are honored to have you as our
                        guest. Please take a moment and explore our website
                        and see the difference for yourself.</p>
                </div>
            </div>
        </div>
    </section>
    <!--travel made section end-->

    <!--presence section start-->
    <section class="presence">
        <div class="row">
            <div class="col-md-6">
                <div class="pre-img">
                    <img src="{{asset('images/presence.png')}}" alt="presence">
                </div>
            </div>

            <div class="col-md-6">
                <div class="para">
                    <h1>Flaunt Your Presence</h1>
                    <p>Airfleet Limousine Inc Canada operates an online
                        limousine reservation system to facilitate easy
                        booking for customers and to avoid last minute
                        embarrassment. The online reservation system
                        provides for all the needs of customers, where they
                        can enter the specific type of vehicle and special
                        amenities they expect at times of traveling.</p>

                    <p>Our professional executives know well the exacting
                        demands of tourism industry. They know the types of
                        visitors they engage, their specific needs and the
                        treatment they expect. Whether you are an
                        individual, or a pair, or a group of friends for
                        outing, or a business executive, Airfleet Limousine
                        Inc Canada can offer the conveyance that best suits
                        your needs.</p>

                    <p>Customers can count upon our services, and we know
                        what a customer expects from a luxury taxi service.
                        Airfleet Limousine Inc Canada uses trouble free
                        vehicles fitted with the utmost conveniences for a
                        comfortable ride. We take care of your luggage. To
                        help the physically disabled, we have accessible
                        vehicles in our fleet too.</p>
                </div>
            </div>
        </div>
    </section>
    <!--presence section end-->

    <!--discipline section start-->
    <section class="discipline">
        <div class="row">
            <div class="col-md-6">
                <h1>We are Disciplined</h1>
                <p>Airfleet Limousine Inc Canada chisels its services with a
                    tinge of humane approach. We cultivate civic sense in
                    our staff and contracted drivers through our unique
                    training program. We inculcate social awareness in them
                    to refine them as dutiful citizens as they are bound to
                    come across customers and people of various mental and
                    physical frames.</p>

                <p> We have made it compulsory for our staff and drivers to
                    undergo the training program that polishes their
                    professionalism with compassion. On completion of the
                    training, our staff emerge above industry training
                    standards and exhibit the highest professional ethics
                    demanded of them.</p>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="{{asset("images/discipline.png")}}" alt="discipline">
                </div>
            </div>
        </div>
    </section>
    <!--discipline section end-->

    @include('Layouts.newsLetter')

</main>
@endsection
