@extends('layouts.main')


@section('content')
    <div class="wrapper">

    <!-- Contact Page -->

        <div class="contact-us" id="scroll-to-top">
            <div class="container">
                <div class="ct-intro">
                    <h5 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">Contact Us</h5>
                    <h2 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="3s">Always waiting to<br class="hidden-xs"> hear from you.</h2>
                    <div class="aft-line"></div>
                </div>
                <div class="spacer-2"></div>
                <div class="col-sm-6">
                    <div class="ct-section-1">
                        <div class="ct-section-title">
                            <h2 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="3.5s">Have some coffee<br> with us at.</h2>
                            <i class ="ion-coffee"></i>
                        </div>
                        <div class="ct-section-content">
                            <p>
                                <span>Location:</span> Westlands Business Park - 6th Floor, Chiromo Lane
                            </p>
                            <p>
                                <span>Address:</span>
                                P.O Box 670 – 00100
                                Nairobi, Kenya.<br>

                            </p>
                            <p>
                                <span>Tel:</span> +254 734 291121

                            </p>
                            <p>
                                <span>Mail:</span> <a href="mailto:advisory@fba.co.ke">advisory@fba.co.ke</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="spacer-1 hidden-lg hidden-md hidden-sm"></div>

                <contact-form></contact-form>

                <div class="spacer-2"></div>
                <div class="col-sm-12 " style="margin-top: 2%;">
                  <div id="googleMap">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.838488041054!2d36.80764376537592!3d-1.2698307359681267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f173bceb9c755%3A0xdcf06f7949e7fa69!2sWestlands+Business+Centre%2C+Chiromo+Ln%2C+Nairobi!5e0!3m2!1sen!2ske!4v1504100507809" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>                  </div>
                </div>
            </div>
        </div>

        <div class="spacer-2"></div>

    </div> <!-- Wrapper End -->
@endsection

