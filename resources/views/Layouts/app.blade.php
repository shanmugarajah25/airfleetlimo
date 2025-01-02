<!DOCTYPE html>
<html lang="en">

@include('Layouts.header')

<!-- Mirrored from airfleetlimo.ca/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 05:52:10 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->


<body id="top">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW6JC56" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="main-top">
        <div class="top-contact">
            <a href="tel:416 447 5000">
                <i class="fa-solid fa-phone"></i>
                <span>Please call us to make a reservation or inquiries 24/7 - 416 447 5000</span>
            </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('images/Airfleet-main-logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-content menu-list" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link  active " aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Airport Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('services.airport-limo') }}">Airport Limo
                                        Service</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('services.airport-taxi') }}">Airport
                                        Taxi</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('services.luxury-limousine-service') }}">Luxury
                                        Limousine Service</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('services.toronto-airport-limo-service') }}">Toronto
                                        Airport Limo Service</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('our-fleet') }}">Our Fleet</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('rates') }}">Our Rates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ asset('contact-us') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link Reservations " href="{{ route('reservation') }}">Online-Reservations</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--navbar section end-->

    @yield('content')

    @include('Layouts.footer')


    <!-- Java Script
    ================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWh0ad6D81hnT8H0mv3meJXdtHfg4nTXI&amp;sensor=false&amp;libraries=places">
    </script>


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
    <script>
        $(document).ready(function() {
            var acInputs = document.getElementsByClassName("autocomplete");
            var options = {
                // types: ['(cities)'],
                componentRestrictions: {
                    country: "ca"
                }
            };

            for (var i = 0; i < acInputs.length; i++) {
                var autocomplete = new google.maps.places.Autocomplete(acInputs[i], options);
                autocomplete.inputId = acInputs[i].id;
                google.maps.event.addListener(autocomplete, 'place_changed', function() {

                });
            }

        });

        function calcRoute() {
            var start = document.getElementById('ac1').value;
            var end = document.getElementById('ac2').value;
            var vehicletype = $("input[name='vehicle']:checked").val();

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

            if ($("input[name='vehicle']:checked").val() == 'sedan' || $("input[name='vehicle']:checked").val() == 'suv') {
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
                        }, callback);


                    } else {

                        $.ajax({
                            /* the route pointing to the post function */
                            url: '/farecalculation',
                            type: 'POST',
                            /* send the csrf-token and the input to the controller */
                            data: {
                                "_token": "CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0",
                                start: start,
                                end: end,
                                vehicletype: vehicletype
                            },
                            dataType: 'JSON',
                            /* remind that 'data' is the response of the AjaxController */
                            success: function(data) {
                                console.log(data)
                                var rate = (data.rate);
                                if (rate) {
                                    $('#price').val(rate);
                                } else {
                                    $('#result5').html("<div class='cal-message'><span>" + data.message +
                                        "</span></div>");
                                }
                                $('#checkhide').prop('disabled', false);
                                $('#checkhide').html(
                                    "check <i class='fa fa-arrow-right' aria-hidden='true'></i>");
                                //$('#ac1').prop('disabled', false);
                                //$('#ac2').prop('disabled', false);
                            }

                        });
                    }
                }

            } else {
                $('#result3').html("<div class='cal-message'><span>Please select vehicle type</span></div>");
            }
        }

        function callback(response, status) {
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
                    var cartype = $("input[name='vehicle']:checked").val();

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
                            $('#price').val(total);
                            $('#checkhide').prop('disabled', false);
                            $('#checkhide').html("check <i class='fa fa-arrow-right' aria-hidden='true'></i>");
                            $('#ac1').prop('disabled', false);
                            $('#ac2').prop('disabled', false);
                        }
                    });

                }
            }
        }

        $('#airport').click(function() {
            if ($(this).is(':checked')) {
                $('#airport2').prop('disabled', true);
                var airport_address = 'Toronto Pearson International Airport';
                $('#ac1').prop('disabled', true);
                $('#ac1').val(airport_address);
            }

            if (!$(this).is(':checked')) {
                $('#ac1').val('');
                $('#airport2').prop('disabled', false);
                $('#ac1').prop('disabled', false);
            }
        });

        $('#airport2').click(function() {
            if ($(this).is(':checked')) {
                $('#airport').prop('disabled', true);
                var airport_address = 'Toronto Pearson International Airport';
                $('#ac2').val(airport_address);
                $('#ac2').prop('disabled', true);
            }

            if (!$(this).is(':checked')) {
                $('#ac2').val('');
                $('#airport').prop('disabled', false);
                $('#ac2').prop('disabled', false);
            }
        });

        $('input[type=radio][name=vehicle]').on('change', function() {
            switch ($(this).val()) {
                case 'sedan':
                    $("#vehicle-bg").attr('src', "../www.airfleetlimo.ca/front/images/sedan.png");
                    break;
                case 'suv':
                    $("#vehicle-bg").attr('src', "{{ asset('images/suv.png') }}");
                    break;
            }
        });
    </script>



</body>


<!-- Mirrored from airfleetlimo.ca/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Dec 2024 05:52:45 GMT -->

</html>
