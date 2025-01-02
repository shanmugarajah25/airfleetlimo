@extends('Layouts.app')
@section('content')

    <div class="top-banner"
        style="background-image: linear-gradient( rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url('../front/images/top-banner-city.png');">
        <div class="head text-center">
            <h2>Airport Services</h2>
            <h1>Airport Limo service - GOODWOOD</h1>
        </div>
    </div>
    <!--top banner section end-->

    <!--ajax contant start-->
    <div class="ajax-contant">
        <div class="image-contant">
            <img src="{{ asset('images/city-img.png') }}" alt="">
            <p><strong>Airport limousine service from / to Goodwood</strong> - Airfleet limousine specializes in
                providing Goodwood
                <a href="../index.html">airport limo service</a> to and from <strong>Toronto Pearson Airport, Toronto
                    Island Airport and
                    Buffalo Airport.</strong> With over <strong>85 luxury vehicles in its fleet,</strong> Airfleet
                Limousine
                provides reliable and economical flat-rate airport limousine and taxi transportation to / from Goodwood
                and
                surrounding areas.
            </p>

            <p>Why not avoid the hassle of traffic delays to and from the airport, parking difficulties, and expensive,
                undependable and expensive taxi cab rides, and leave your airport transportation arrangements to the
                professionals. We are committed to providing you with <strong>highest standard, reliable and
                    timely</strong>
                airport limousine service from/to Goodwood and surrounding areas.</p>

            <p>Airport limo service is the most reliable, hassle-free option for airport <strong>transportation from
                    Goodwood.</strong> We will ensure that your ride to the Airport from / to Goodwood, is filled with
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
                    Goodwood
                    and Airport.</span></p>
            <a href="../contact-us.html">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->

    <!--map section start-->
    <div class="map-content">
        <div class="head">
            <h6>AIRPORT LIMO FROM GOODWOOD TO TORONTO PEARSON AIRPORT</h6>
        </div>

        <!--map view-->
        <div class="ajax-map">
            <iframe
                src="https://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=Goodwood,+ON,+Canada&amp;daddr=Toronto+Pearson+International+Airport,+Mississauga,+ON,+Canada&amp;hl=en&amp;geocode=Far5mwId-ARH-ykJtmaeXtDUiTF7gEckzmNu8A%3BFRZ4mgIdjAVB-yHFDgPE6V0dtCmR1C3ASjkriDHFDgPE6V0dtA&amp;aq=&amp;sll=43.409084,-80.167803&amp;sspn=0.58362,1.352692&amp;mra=ls&amp;ie=UTF8&amp;t=m&amp;ll=43.734256,-79.424007&amp;spn=0.105653,0.384581&amp;output=embed"
                height="220" width="100%" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
        </div>
        <!--/map view-->

        <div class="para">
            <p>Uxbridge is a township in south-central Ontario, Canada, in the Regional Municipality of Durham, in the
                Greater Toronto Area. </p>
        </div>

        <div class="service">
            <h6>Our finest Airport Limousine Services</h6>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Toronto <span>Pearson Airport limousine</span> service from / to Goodwood</p>
            </div>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Toronto Island Airport limousine service from / to Goodwood</p>
            </div>

            <div class="box">
                <img src="{{ asset('images/map-mark.png') }}" alt="mark img">
                <p>Buffalo Airport Limo Service from / to Goodwood</p>
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
                from an incredible experience on your airport limo from / to Goodwood.<br>
                To book your airport limo</p>
            <a href="../contact-us.html">Contact us</a>
        </div>
    </div>
    <!--ajax banner section end-->


    <!--footer section start-->
    <footer class="footer">
        <div class="footer-content">

            <div class="footer-logo">
                <a href="#"><img src="../{{ asset('images/footer-main-logo.png') }}" alt="Airfleet"></a>
            </div>

            <div class="company">
                <div class="head">
                    <h6>Company</h6>
                </div>
                <div class="links">
                    <a href="../about-us.html">About Us</a>
                    <a href="../index.html#our-services">Airport Services</a>
                    <a href="../our-fleet.html">Our Fleet</a>
                    <a href="../rates.html">Our Rates</a>
                </div>
            </div>

            <div class="office">
                <h6>Office</h6>
                <p>Airfleet limousine inc<br> 1315 Pickering Parkway<br>Suite 300<br> Pickering, ON L1V 7G5</p>
                <a href="../contact-us.html" class="office-btn">contact us <i class="fa fa-arrow-right"
                        aria-hidden="true"></i></a>
            </div>

            <div class="follow-us">
                <div class="head text-center">
                    <h6>Follow us</h6>
                </div>
                <div class="links">
                    <a href="https://www.facebook.com/AirfleetLimousineCanada" target="_blank"><i
                            class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://twitter.com/Airfleetslimo" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube" target="_blank"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" target="_blank"></i></a>
                </div>
            </div>

            <div class="contact">
                <a href="tel:416 447 5000">416 447 5000</a>
                <a href="mailto:info@airfleetlimo.ca">info@airfleetlimo.ca</a>
                <a href="../reservation.html">Make a reservation <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="footer-bottom-content">
            <h6>Important links</h6>
            <div class="box first-box">
                <a href="../airport-limos.html">Airport Limos</a>
                <a href="../airport-taxis.html">Airport Taxis</a>
                <a href="../index.html">Bus Charter Toronto</a>
            </div>

            <div class="box">
                <a href="airport-limo-ajax.html">Airport Limo Ajax</a>
                <a href="airport-limo-barrie.html">Airport Limo Barrie</a>
                <a href="airport-limo-brampton.html">Airport Limo Brampton</a>
                <a href="airport-limo-pickering.html">Airport Limo Pickering</a>
                <a href="airport-limo-burlington.html">Airport Limo Burlington</a>
                <a href="airport-limo-detroit.html">Airport Limo Detroit</a>
                <a href="airport-limo-hamilton.html">Airport Limo Hamilton</a>
                <a href="airport-limo-kitchener.html">Airport Limo Kitchener</a>
                <a href="airport-limo-london.html">Airport Limo London</a>
            </div>

            <div class="box last-box">
                <a href="airport-limo-markham.html">Airport Limo Markham</a>
                <a href="airport-limo-mississauga.html">Airport Limo Mississauga</a>
                <a href="airport-limo-newmarket.html">Airport Limo New Market</a>
                <a href="airport-limo-niagara-falls.html">Airport Limo Niagara Falls</a>
                <a href="airport-limo-oakville.html">Airport Limo Oakville</a>
                <a href="airport-limo-scarborough.html">Airport Limo Scarborough</a>
                <a href="airport-limo-st-catharines.html">Airport Limo St. Catharines</a>
            </div>
        </div>

        <div class="footer-bottom-box">
            <p>Airfleet Limousine Canada. Copyrights © 2024. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- Java Script
                        ================================================== -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../{{ asset('js/script.js') }}"></script>


    <script>
        $('.d-newsletter-btn').on('click', function() {
            var email = $("input#nemail").val()
            if (isValidEmailAddress(email)) {
                $.ajax({
                    url: 'https://airfleetlimo.ca/subscribe',
                    method: 'post',
                    data: {
                        'email': email,
                        '_token': 'CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0'
                    },
                    success: function(response) {
                        if (response.type == 'success') {
                            setTimeout(function() {
                                $('#newsletter-success').html(response.message);
                                $('#newsletter-success').removeClass('d-none');
                            }, 200);
                        } else {
                            setTimeout(function() {
                                $('#newsletter-error').html(response.message);
                                $('#newsletter-error').removeClass('d-none');
                                $('#newsletter-success').addClass('d-none');
                            }, 200);
                        }
                    },
                });
            } else {
                setTimeout(function() {
                    $('#newsletter-error').html("Invalid Email Address");
                    $('#newsletter-error').removeClass('d-none');
                    $('#newsletter-success').addClass('d-none');
                }, 200);
            }
        });

        function isValidEmailAddress(emailAddress) {
            var pattern =
                /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        };
    </script>


    <script type="text/javascript">
        var map = null;
        var directions = null;
        var routeBoxer = null;
        var distance = null; // km

        function initialize() {
            if (GBrowserIsCompatible()) {
                // Default the map view to the continental U.S.
                map = new GMap2(document.getElementById("map"));
                map.setCenter(new GLatLng(37.09024, -95.712891), 4);
                map.setUIToDefault();

                directions = new GDirections(map);

                GEvent.addListener(directions, 'error', function() {
                    alert("Directions request failed: " + directions.getStatus().code);
                });
                route();
            }
        }

        function route() {
            map.clearOverlays();

            // Make the directions request
            var from = 'Goodwood", Ontario"';
            var to = 'Toronto Pearson International Airport, Toronto, ON';
            directions.load("from:" + from + " to:" + to);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        var directionsService = new google.maps.DirectionsService();
        var request = {
            origin: 'Goodwood.", Ontario"',
            destination: 'Toronto Pearson International Airport, Toronto, ON',
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };

        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {

                // Display the distance:
                document.getElementById('distance').innerHTML +=
                    (response.routes[0].legs[0].distance.value / 1000) + " KM";

                total_minutes = response.routes[0].legs[0].duration.value / 60;
                hours = Math.floor(total_minutes / 60);
                minutes = Math.floor(total_minutes) - (60 * hours)
                // Display the duration:
                document.getElementById('duration').innerHTML += "" +
                    hours + " hrs and " + minutes + " mins";


            }
        });
    </script>

    </body>


    <!-- Mirrored from airfleetlimo.ca/airport-limo/airport-limo-goodwood by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 05:56:28 GMT -->

    </html>
