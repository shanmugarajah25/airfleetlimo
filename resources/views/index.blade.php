@extends('Layouts.app')
@section('content')
    <main>

        <!--home banner section start-->
        <section class="home-banner">
            <div class="home-banner-content">
                <div class="home-banner-img"
                    style="background-image: linear-gradient(90deg, #000000 36.46%, rgba(0, 0, 0, 0) 100%),url('{{ asset('images/home-banner.png') }}');">
                    <div class="head">
                        <h1>Professional Airport Limo<br>& Taxi Services</h1>
                    </div>
                    <div class="img-content d-flex">

                        <div class="heading">
                            <h3>What we have</h3>
                        </div>

                        <div class="content">

                            <div class="num-content d-flex">
                                <div class="number d-flex flex-column">
                                    <strong>100+</strong>
                                    <span>CAR LIMO SUV luxurious vehicles</span>
                                </div>
                                <div class="number d-flex flex-column">
                                    <strong>24 Hours 7 Days</strong>
                                    <span>Customer Service & Dispatch</span>
                                </div>
                            </div>

                            <div class="para">
                                <p><b>Never miss a flight!</b> Choose one of our <b>100+ CAR LIMO SUV LUXURIOUS VEHICLES</b>
                                    for your ride
                                    to and from the airport and let<br>
                                    one of <b>our dedicated chauffeurs</b> to make sure that you will be there on time,
                                    hassle-free and comfortably!
                                </p>
                            </div>

                            <div class="banner-btn">
                                <a href="{{ route('reservation') }}">BOOK ONLINE NOW! </a>
                            </div>

                            <div class="banner-bottom-content">
                                <span>Airports we serve</span>

                                <div class="logos">
                                    <a href="https://www.torontopearson.com/en" target="_blank"><img
                                            src="{{ asset('images/banner-logo1.png') }}" alt="bannerLogo one"></a>
                                    <a href="https://www.billybishopairport.com/" target="_blank"><img
                                            src="{{ asset('images/banner-logo2.png') }}" alt="bannerLogo two"></a>
                                    <a href="https://www.buffaloairport.com/" target="_blank"><img
                                            src="{{ asset('images/banner-logo3.png') }}" alt="bannerLogo three"></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="banner-arrow">
                        <p>fare calculator</p>
                        <a href="#calculator"><img src="{{ asset('images/banner-arrow.png') }}" alt="arrow"></a>
                    </div>


                    <div class="home-banner-slider">
                        <div class="owl-carousel owl-theme home-banner-box">
                            <div class="slider-home d-flex align-items-center">
                                <p>100+ Executive Limousines</p>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                            </div>

                            <div class="slider-home d-flex align-items-center">
                                <p>20% Discounted Rates</p>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                            </div>

                            <div class="slider-home d-flex align-items-center">
                                <p>24/7 Customer Service</p>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                            </div>

                            <div class="slider-home d-flex align-items-center">
                                <p> VIP Service</p>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                            </div>

                            <div class="slider-home d-flex align-items-center">
                                <p>Uniformed Chauffeurs</p>
                                <i class="fa fa-circle" aria-hidden="true"></i>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--home banner section end-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWh0ad6D81hnT8H0mv3meJXdtHfg4nTXI&amp;sensor=false&amp;libraries=places">
        </script>
        <style>
            html,
            body,
            #map-canvas {
                height: 100%;
                margin: 0px;
                padding: 0px
            }

            .controls {
                margin-top: 16px;
                border: 1px solid transparent;
                border-radius: 2px 0 0 2px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                height: 32px;
                outline: none;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            }

            #acp {
                background-color: #fff;
                padding: 0 11px 0 13px;
                width: 400px;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                text-overflow: ellipsis;
            }

            #acp:focus {
                border-color: #4d90fe;
                margin-left: -1px;
                padding-left: 14px;
                /* Regular padding-left + 1. */
                width: 401px;
            }

            #acd {
                background-color: #fff;
                padding: 0 11px 0 13px;
                width: 400px;
                font-family: Roboto;
                font-size: 15px;
                font-weight: 300;
                text-overflow: ellipsis;
            }

            #acd:focus {
                border-color: #4d90fe;
                margin-left: -1px;
                padding-left: 14px;
                /* Regular padding-left + 1. */
                width: 401px;
            }

            .pac-container {
                font-family: Roboto;
            }

            #type-selector {
                color: #fff;
                background-color: #4d90fe;
                padding: 5px 11px 0px 11px;
            }

            #type-selector label {
                font-family: Roboto;
                font-size: 13px;
                font-weight: 300;
            }
        </style>

        @if (false)
            <!--calculator section start-->
            <section class="calculator" id="calculator">
                <div class="cal-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content">
                                <div class="head">
                                    <h1>Fare Calculator</h1>

                                </div>


                                <form action="#">

                                    <div class="cal-input">
                                        <label for="check"><strong>Pick-up at</strong> <span>Toronto Pearson
                                                International
                                                Airport?</span></label>
                                        <select name="airportanswer" id="airportanswer"
                                            class="form-select form-select-lg mb-3">
                                            <option selected>Please select</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>

                                        <label>Please enter pickup address</label>
                                        <input type="text" class="autocomplete form-control controls" id="acp"
                                            required style="width: 100%" value="">
                                        <span class="help-block"><strong id="result1"></strong></span>
                                        <label>Please enter dropoff address</label>
                                        <input type="text" class="autocomplete form-control controls" id="acd"
                                            style="width: 100%" value="">
                                        <span class="help-block"><strong id="result2"></strong></span>
                                    </div>
                                    <div class="cal-check-btns">
                                        <!-- <button type="button" onclick="calcRoutenew();" id="checkhide">Check <i class="fa fa-arrow-right" aria-hidden="true"></i></button> -->
                                        <button type="button" onclick="calcRoutenew();"
                                            class="btn btn-outline-danger  btn-lg" style="height: 50px; margin: 20px;">Check
                                            Rate</button>

                                    </div>
                                    <span class="help-block"><strong id="result5"></strong></span>
                                    <div class="cal-price" style="z-index: 200;">
                                        <div class="num-content d-flex" id="ratebox">

                                            <div class="number d-flex flex-column">
                                                <div class="card"
                                                    style="background: white;  padding: 10px 10px 10px 10px;border-radius: 10px; margin:5px; z-index: 200;">
                                                    <img src="{{ asset('images/sedan.png') }}" class="card-img-top"
                                                        alt="..." width=400px>

                                                    <div class="card-body">
                                                        <h5 class="card-title">Sedan</h5>
                                                        <span class="tooltiptext">
                                                            <img class="arrow1" src="{{ asset('images/arrow-tool.png') }}"
                                                                alt="arrow img">
                                                            <img src="{{ asset('images/man.png') }}" alt="man img">
                                                            <span> <span class="count">3</span>passengers</span> <br />
                                                            <img src="{{ asset('images/bag.png') }}" alt="man img">
                                                            <span><span class="count">3</span>Bags</span>
                                                        </span>
                                                        <h5 id="sedanrate" style="color:green;"></h5>
                                                        <a href="{{ route('reservation') }}" class="btn btn-danger">Book
                                                            Now! </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="card"
                                                style="background: white;  padding: 10px 10px 10px 10px;border-radius: 10px; margin:5px; z-index: 200;">
                                                <img src="{{ asset('images/suv.png') }}" class="card-img-top"
                                                    alt="..." width=400px>

                                                <div class="card-body">
                                                    <h5 class="card-title">SUV</h5>
                                                    <span class="tooltiptext">
                                                        <img class="arrow1" src="{{ asset('images/arrow-tool.png') }}"
                                                            alt="arrow img">
                                                        <img src="{{ asset('images/man.png') }}" alt="man img">
                                                        <span> <span class="count">6</span>passengers</span> <br />
                                                        <img src="{{ asset('images/bag.png') }}" alt="man img">
                                                        <span><span class="count">5</span>Bags</span>
                                                    </span>
                                                    <h5 id="suvrate" style="color:green;"></h5>
                                                    <a href="{{ route('reservation') }}" class="btn btn-danger">Book Now!
                                                    </a>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                            </div>
                        </div>


                        </form>

                    </div>
                </div>

                </div>
                </div>
            </section>

            <!--calculator section end-->

            <script>
                $('input[type=radio][name=vehiclenew]').on('change touchend', function() {
                    console.log($(this).val());
                    switch ($(this).val()) {
                        case 'sedan':
                            $("#vehicle-bg").attr('src', "{{ asset('front/images/sedan.png') }}");
                            break;
                        case 'suv':
                            $("#vehicle-bg").attr('src', "{{ asset('front/images/suv.png') }}");
                            break;
                    }
                });

                $('#airportanswer').change(
                    function() {
                        var index = this.selectedIndex;

                        $("#airportanswer").val($(this).val()).change();
                        if ($(this).val() == "yes") {
                            $('#acp').val('Toronto Pearson International Airport');
                            $('#acp').focus();
                        } else {
                            $('#acp').val('');
                            $('#acp').focus();
                        }

                    });



                $(document).ready(function() {
                    //document.getElementById("ratebox")
                    //document.getElementById("divFirst").style.visibility = 'visible';
                    //document.getElementById("ratebox").style.display = 'none';
                    //document.getElementById("ratebox").style.visibility = "hidden"
                    $("#ratebox").hide();

                    var acInputs = document.getElementsByClassName("autocomplete");
                    var options = {
                        // types: ['(cities)'],
                        componentRestrictions: {
                            country: "ca"
                        }
                    };
                    /*
                          for (var i = 0; i < acInputs.length; i++) {
                            var autocomplete = new google.maps.places.Autocomplete(acInputs[i], options);
                            autocomplete.inputId = acInputs[i].id;
                            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                              //acInputs[i].focus();
                            });

                          }
                    */


                    var autocompletep = new google.maps.places.Autocomplete(document.getElementById('acp'), options);
                    autocompletep.inputId = document.getElementById('acp').id;
                    google.maps.event.addListener(autocompletep, 'place_changed', function() {
                        //acInputs[i].focus();
                        $('#acp').val(autocompletep.getPlace().formatted_address);
                    });

                    var autocompleted = new google.maps.places.Autocomplete(document.getElementById('acd'), options);
                    autocompleted.inputId = document.getElementById('acd').id;
                    google.maps.event.addListener(autocompleted, 'place_changed', function() {
                        //acInputs[i].focus();
                        $('#acd').val(autocompleted.getPlace().formatted_address);
                    });


                });

                function calcRoutenew() {
                    var start = document.getElementById('acp').value;
                    var end = document.getElementById('acd').value;
                    var vehicletype = 'sedan'; //$("input[name='vehicle']:checked").val();

                    var airportwordcheckstart = start.includes("Toronto Pearson International Airport");
                    var airportwordcheckend = end.includes("Toronto Pearson International Airport");
                    $('#result5').text('');
                    $('#price').val('');
                    if (start == '' && end == '') {
                        $('#result1').html("<div class='cal-message'><span>Please Select Pickup location</span></div>");
                        $('#result2').html("<div class='cal-message'><span>Please Select Drop location</span></div>");
                    }

                    if (end == '' && start != '') {
                        $('#result1').html("");
                        $('#result2').html("<div class='cal-message'><span>Please Select Drop location</span></div>");
                    }

                    if (end != '' && start != '') {
                        $('#result1').html("");
                        $('#result2').html("");
                    }

                    if (end != '' && start == '') {
                        $('#result1').html("<div class='cal-message'><span>Please Select Pickup location</span></div>");
                        $('#result2').html("");
                    }

                    //if ($("input[name='vehicle']:checked").val() == 'sedan' || $("input[name='vehicle']:checked").val() == 'suv') {
                    $('#result3').html("");
                    if (start != '' && end != '') {

                        $('#checkhide').prop('disabled', true);
                        $('#checkhide').html("Please wait <i class='fa fa-arrow-right' aria-hidden='true'></i>");
                        // $('#ac1').prop('disabled', true);
                        // $('#ac2').prop('disabled', true);
                        if (!airportwordcheckstart && !airportwordcheckend) {

                            var service = new google.maps.DistanceMatrixService();
                            service.getDistanceMatrix({
                                origins: [start],
                                destinations: [end],
                                travelMode: google.maps.TravelMode.DRIVING,
                                unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                                avoidHighways: false,
                                avoidTolls: false
                            }, callbacknew);


                        } else {

                            $.ajax({
                                /* the route pointing to the post function */
                                url: '/farecalculation',
                                type: 'POST',
                                /* send the csrf-token and the input to the controller */
                                data: {
                                    //"_token": "CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0",
                                    start: start,
                                    end: end,
                                    vehicletype: vehicletype
                                },
                                dataType: 'JSON',
                                /* remind that 'data' is the response of the AjaxController */
                                success: function(data) {
                                    console.log(data)
                                    var rate = (data.rate);
                                    var suvrate = (data.suvrate);
                                    if (rate) {
                                        $('#sedanrate').html("$" + rate);
                                        $('#suvrate').html("$" + suvrate);
                                        //document.getElementById("ratebox").style.display = 'block';
                                        //document.getElementById("ratebox").style.visibility = "visible";
                                        //$("#ratebox").show();

                                        document.getElementById("sedanrate").innerHTML = ("$" + rate);
                                        document.getElementById("suvrate").innerHTML = ("$" + suvrate);

                                        document.getElementById("ratebox").scrollIntoView();

                                    } else {
                                        $('#result5').html("<div class='cal-message'><span>" + data.message +
                                            "</span></div>");
                                    }
                                    $('#checkhide').prop('disabled', false);
                                    $('#checkhide').html("check <i class='fa fa-arrow-right' aria-hidden='true'></i>");
                                    //$('#ac1').prop('disabled', false);
                                    //$('#ac2').prop('disabled', false);
                                }

                            });
                        }
                        // }

                    } else {
                        $('#result3').html("<div class='cal-message'><span>Please select vehicle type</span></div>");
                    }
                }

                function callbacknew(response, status) {
                    if (status != google.maps.DistanceMatrixStatus.OK) {
                        $('#result4').html(err);
                    } else {
                        var origin = response.originAddresses[0];
                        var destination = response.destinationAddresses[0];
                        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                            $('#result4').html("Better get on a plane. There are no roads between " + origin + " and " +
                                destination);
                        } else {
                            $('#result4').html("");
                            var distance = response.rows[0].elements[0].distance;
                            var duration = response.rows[0].elements[0].duration;
                            console.log(response.rows[0].elements[0].distance);
                            var distance_in_kilo = distance.value / 1000;
                            var cartype = 'sedan'; //$("input[name='vehicle']:checked").val();

                            $.ajax({
                                url: '/distancecalculation',
                                type: 'POST',
                                data: {
                                    "_token": "CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0",
                                    distance: distance_in_kilo,
                                    cartype: cartype
                                },
                                dataType: 'JSON',
                                success: function(data) {
                                    var total = Number(data.total).toFixed(2);
                                    var totalsuv = Number(data.totalsuv).toFixed(2);
                                    $('#sedanrate').html("$" + total);
                                    $('#suvrate').html("$" + totalsuv);
                                    document.getElementById("sedanrate").innerHTML = ("$" + total);
                                    document.getElementById("suvrate").innerHTML = ("$" + totalsuv);
                                    // document.getElementById("ratebox").style.display = 'block';

                                    // document.getElementById("ratebox").style.visibility = "visible";
                                    //$("#ratebox").show();
                                    document.getElementById("ratebox").scrollIntoView();
                                }
                            });

                        }
                    }
                }
            </script><!--ride section start-->
        @endif


        <section class="py-5 bg-dark bg-gradient" id="calculator">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ asset('images/map-img_Page_3.jpg') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/map-img_Page_3.jpg') }}" class="img-fluid border" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="{{ asset('images/map-img_Page_4.jpg') }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/map-img_Page_4.jpg') }}" class="img-fluid border" alt="">
                    </a>
                </div>
            </div>
        </section>
        <section class="ride mt-5" id="ride">
            <div class="ride-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ride-img">
                            <div class="box"></div>
                            <img src="{{ asset('images/ride-img.png') }}" alt="ride">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ride-para">
                            <h1>We Will Ride You<br>Wherever You Want to</h1>
                            <p>Airfleet Limousine Canada sticks to its principle of providing consistently comfortable
                                traveling experience to its customers. We are imminent with our luxury limousine services in
                                the Southern Ontario area of Canada.</p>
                            <a href="{{ route('about-us') }}"> know more about us <i class="fa fa-arrow-right"
                                    aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--ride section end-->

        <!--our service start-->
        <section class="our-service" id="our-services">
            <div class="head text-center">
                <h1>Our Services</h1>
            </div>
            <div class="box-content">
                <div class="box">
                    <h6>Airport Limo service</h6>
                    <p>Airfleet Limousine Inc Canada makes your travel easy. Avail our online limousine reservation system
                        to arrange your travel</p>
                    <a href="{{ route('services.airport-limo') }}">know more <i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </a>
                </div>

                <div class="box">
                    <h6>Luxury limousine service</h6>
                    <p>With many years of experience with airport ground transportion in Toronto, Airfleet Limousine
                        continues to be</p>
                    <a href="{{ route('services.luxury-limousine-service') }}">know more <i class="fa fa-arrow-right"
                            aria-hidden="true"></i> </a>
                </div>

                <div class="box">
                    <h6>Airport taxi service</h6>
                    <p>Airport taxi services rendered by Airfleet Limousine can ensure that you get the best for your
                        transportation</p>
                    <a href="{{ route('services.airport-taxi') }}">know more <i class="fa fa-arrow-right"
                            aria-hidden="true"></i>
                    </a>
                </div>

                <div class="box">
                    <h6>Toronto Airport Limo Service</h6>
                    <p>Toronto airport limousine service is the first choice for luxury airport ground transportation for
                        business, occasion</p>
                    <a href="{{ route('services.toronto-airport-limo-service') }}">know more <i class="fa fa-arrow-right"
                            aria-hidden="true"></i> </a>
                </div>

            </div>
        </section>
        <!--our service end-->

        <!--Our limousine fleet section start-->
        <section class="Our-limousine">
            <div class="head text-center">
                <h1>Our limousine fleet</h1>
                <div class="d-flex justify-content-center">
                    <p>Airfleet Limousine has a line up of luxurious limousines, cars and coaches to match different needs
                        of different personalities and groups. Our fleet has a full range of Black Town Cars, Passenger
                        Vans, SUV, Stretch Limousines,Executive coaches and Escalades, and includes all passenger amenities.
                    </p>
                </div>
            </div>
            <div class="owl-carousel owl-theme car-slider">
                <div class="slider-cars d-flex justify-content-center">
                    <img src="{{ asset('images/slider-car.png') }}" alt="cars">
                </div>

                <div class="slider-cars d-flex justify-content-center">
                    <img src="{{ asset('images/slider-car.png') }}" alt="cars">
                </div>

                <div class="slider-cars d-flex justify-content-center">
                    <img src="{{ asset('images/slider-car.png') }}" alt="cars">
                </div>
            </div>
            <div class="car-slider-btn">

            </div>
        </section>
        <!--Our limousine fleet section end-->

        <section class="customer-content">
            <div class="head text-center">
                <h1>What customers say</h1>
            </div>
            <div class="slider-customer">
                <div class="owl-carousel owl-theme customer">
                </div>
            </div>
        </section>

        @include('Layouts.newsLetter')

    </main>
@endsection
