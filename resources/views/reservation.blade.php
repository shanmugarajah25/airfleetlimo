@extends('Layouts.app')
@section('content')



    <form method="POST" action="https://airfleetlimo.ca/reservation" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="CDlZXbKj4NiHWnc0l4fHr9JQLQzHBnuf9Z5R5di0">
        <div id="my_name_8b8XglGGFtkmfZ8y_wrap" style="display:none;">
            <input name="my_name_8b8XglGGFtkmfZ8y" type="text" value="" id="my_name_8b8XglGGFtkmfZ8y">
            <input name="valid_from" type="text"
                value="eyJpdiI6Imx5dzVXRUs3Y241bWMzU0hFMmNVMlE9PSIsInZhbHVlIjoiaHY1M2k3VHRNeE8xUmJmUVFYd0ZKQT09IiwibWFjIjoiZTQxYWE4MGJkZWExYzM2ZWM0MjVkMGZhNDZjNmNhZTE3ZDBkNTJlYTJlMTFjYTc3YzNkMGYyYzNmZmQ4ZWVlMiIsInRhZyI6IiJ9">
        </div>
        <div class="nav-box"></div>
        <div class="online">
            <div class="online-box">
                <div class=" mt-30">
                </div>
                <div class="head text-center">
                    <h3>ONLINE RESERVATION</h3>
                </div>
                <div class="input">
                    <label for="name">Name*</label>
                    <input type="text" name="name" id="name" value="">
                </div>

                <div class="input">
                    <label for="pn">Phone Number*</label>
                    <input type="text" name="phone" id="phone" value="">
                </div>

                <div class="input">
                    <label for="pn">Email*</label>
                    <input type="text" name="email" id="email" value="">
                </div>

                <div class="input">
                    <label for="pcm">Preferred Contact Method*</label>
                    <select name="contact_method" id="contact_method">
                        <option value="0" class="seleted">Please Select</option>
                        <option value="phone">Phone</option>
                        <option value="email">Email</option>
                    </select>
                </div>
                <div class="input">
                    <label for="pm">Payment Method</label>
                    <select name="payment_method" id="payment_method">
                        <option value="0" class="seleted">Please Select</option>
                        <option value="master_card">Master Card</option>
                        <option value="visa">Visa</option>
                        <option value="american_express">American Express</option>
                        <option value="cash">Cash</option>
                        <option value="voucher">Voucher</option>
                    </select>
                </div>

                <div class="input">
                    <label for="pd">Pickup Date*</label>
                    <input type="date" name="pickup_date" id="pickup_date" value="">
                </div>

                <div class="input">
                    <label for="pt">Pickup Time*</label>
                    <input type="time" name="pickup_time" id="pickup_time" value="">
                </div>

                <div class="input">
                    <label for="pa">Pickup Address*</label>
                    <input type="text" value="  " name="pickup_address" id="pickup_address"
                        placeholder="Address, City, Postal Code">
                </div>

                <div class="input">
                    <label for="doa">Drop Off Address*</label>
                    <input type="text" value="  " name="drop_address" id="drop_address"
                        placeholder="Address, City, Postal Code">
                </div>

                <div class="input">
                    <label for="nob">No of Baggages*</label>
                    <input type="number" name="baggage" id="baggage" value="" min="0">
                </div>

                <div class="input">
                    <label for="nop">No of Passengers*</label>
                    <input type="number" name="passenger" id="passenger" value="" min="1">
                </div>


                <div class="input">
                    <label for="vt">Vehicle Type*</label>
                    <select name="vehicle_type">
                        <option value="" class="seleted">Please Select</option>
                        <option value="1"> Sedan </option>
                        <option value="2"> Benz S500 </option>
                        <option value="3"> Stretch Limousine </option>
                        <option value="4"> SUV Stretch </option>
                        <option value="5"> 4x4 7 Passengers Escalade/Denali </option>
                        <option value="6"> Van 15 Passengers </option>
                    </select>
                </div>

                <div class="input input-radio" id="test">
                    <label for="wcn">Wakeup Call Needed</label>

                    <div class="main-radio-btn d-flex">
                        <div class="radio-btn d-flex">
                            <input type="radio" name="wakeup_call" id="wakeup_call1" onchange="myFunction1()"
                                value="1">
                            <label for="yes">Yes</label>
                        </div>
                        <div class="radio-btn d-flex">
                            <input type="radio" name="wakeup_call" id="wakeup_call2" onchange="myFunction()"
                                value="0" checked>
                            <label for="yes">No</label>
                        </div>
                    </div>
                </div>

                <div class="input" id="wakeupcallhide" style="display:none">
                    <label for="wcf">Wake-Up Call For</label>
                    <input type="text" name="wakeup_call_for" id="wakeup_call_for" value="">
                </div>


                <div class="input" id="wakeuptimehide" style="display:none">
                    <label for="wt">Wake-Up Time</label>
                    <input type="time" name="wakeup_time" id="wakeup_time" value="">
                </div>

                <div class="input para">
                    <p>If arriving at Toronto Airport, please specify flight arrival information</p>
                </div>

                <div class="input">
                    <label for="al">Airline Name</label>
                    <input type="text" name="airline_name" id="airline_name" value="">
                </div>

                <div class="input">
                    <label for="fn">Flight No</label>
                    <input type="text" name="flight_no" id="flight_no" value="">
                </div>

                <div class="input">
                    <label for="sr">Special Requests (If Any)</label>
                    <input type="text" name="special_request" id="special_request" value=""
                        placeholder="coffee, wake-up call, stop en route,etc.">
                </div>

                <div class="req-radio">
                    <input type="checkbox" name="return_reservation" id="return_reservation" value="1">
                    <label for="required">RETURN RESERVATION REQUIRED</label>
                </div>

                <div class="submit-btn">
                    <button type="submit" value="submit">Submit <i class="fa fa-arrow-right"
                            aria-hidden="true"></i></button>
                    <button type="reset">reset <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>

            </div>
        </div>
    </form>
    @include('Layouts.newsLetter')
    <script src="../code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function myFunction() {
            if ($('#wakeup_call2').prop('checked')) {
                $("#wakeupcallhide").hide();
                $("#wakeuptimehide").hide();
            }
        }

        function myFunction1() {
            if ($('#wakeup_call1').prop('checked')) {
                $("#wakeupcallhide").show();
                $("#wakeuptimehide").show();
            }
        }
        // $('#emailhide').hide();
        $("#contact_method").change(function() {
            var data = $(this).val();
            if (data == "email") {
                $('#emailhide').show();
            } else {
                $('#emailhide').hide();
            }
        });
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#pickup_date').attr('min', today);
    </script>

@endsection
