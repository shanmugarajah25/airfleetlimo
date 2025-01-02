@extends('Layouts.app')
@section('content')


    <!--contact banner section start-->
    <section class="contact-banner">
        <div class="row">
            <div class="col-md-6">
                <div class="head">
                    <h2>Contact us</h2>
                    <h1>Travel Made Safe,<br>Comfortable</h1>
                </div>
                <div class="location">
                    <h6>Our location</h6>
                    <p>Airfleet limousine inc<br>1315 Pickering Parkway <br>Suite 300 <br>Pickering, ON L1V 7G5</p>
                    <a href="#map">
                        <h6>Map Location</h6><img src="{{asset('images/banner-arrow.png')}}" alt="">
                    </a>
                </div>
                <div class="social-link">
                    <a href="https://www.facebook.com/AirfleetLimousineCanada" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Airfleetslimo" target="_blank"><i
                            class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" target="_blank"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" target="_blank"></i></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxes">
                    <div class="box"></div>
                    <div class="contact-box">
                        <form method="POST" action="https://airfleetlimo.ca/contact">
                            <input type="hidden" name="_token" value="CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0">
                            <div id="my_name_JOBWrL8LRHyCXzYw_wrap" style="display:none;">
                                <input name="my_name_JOBWrL8LRHyCXzYw" type="text" value=""
                                    id="my_name_JOBWrL8LRHyCXzYw">
                                <input name="valid_from" type="text"
                                    value="eyJpdiI6Im4zVmRDQWdTaG4rSTZFUVFCd3NrMnc9PSIsInZhbHVlIjoiZGkxcTRsNlROTVRMK09zTHJVQUQ4QT09IiwibWFjIjoiMDc5OTJmZjI0ZDIyODc3YWE2NDYwN2E0ZWY1Yzg1ZGEzZGRjZWJiMGI2ZjgyNTYwM2I2ZDVmZTAwNTFmMjU3NyIsInRhZyI6IiJ9">
                            </div>
                            <input type="text" id="name" name="name" value=""
                                placeholder="Name *">
                            <input type="text" id="phone" name="phone" value=""
                                placeholder="Phone Number *">
                            <input type="email" id="email" name="email" value=""
                                placeholder="Email Address *">
                            <input type="text" id="msg" name="msg" value=""
                                placeholder="Message *">
                            <button type="submit">send message <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact banner section end-->


    <!--map section start-->
    <section class="map" id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.093988291919!2d-79.0879084!3d43.8331491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4dedded370de3%3A0x3786391de5ec7b28!2s1315%20Pickering%20Pkwy%20Suite%20%23300%2C%20Pickering%2C%20ON%20L1V%207G5%2C%20Canada!5e0!3m2!1sen!2slk!4v1678250690443!5m2!1sen!2slk"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--map section en-->

    @include('Layouts.newsLetter')



@endsection
