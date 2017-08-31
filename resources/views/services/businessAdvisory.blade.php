@extends('layouts.main')

@section('content')
    <div class="wrapper">



        <div class="services" id="scroll-to-top">
            <div class="service-intro">
                <div class="spacer-1"></div>
                <h1 class="wow fadeInLeft text-center" data-wow-delay="3s">Business Advisory</h1>
            </div>
            <div class="spacer-2"></div>
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1 ">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.2s">

                                <div class="service-description">

                                   <p>
                                       Is your organization performing at its optimum? Are your costs hitting the ceiling? Are you facing challenges with your cash flow? These are some of the puzzles we will help you solve. Right from the word go, we’ll review your organization’s current status, work hand in hand with your management team to provide solutions that will help you put in place the building blocks that will ensure your organizations performs more effectively.
                                   </p>

                                    <p>
                                        What we offer:
                                    </p>

                                    <ul class="about-list wow fadeInLeft " data-wow-delay="3s" style="color:#727272; text-align: left">
                                        <li>Business plan formulation</li>
                                        <li>Strategic plan development</li>
                                        <li>Advise on how to leverage technology in your processes & business</li>
                                        <li>Tax returns </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Services-->

        <!-- Call to action Section Starts -->


        <div class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cta-content">
                            <h4 class="wow fadeInLeft" data-wow-delay="0.5s">Work with us</h4>
                            <h2 class="wow fadeInLeft" data-wow-delay="0.5s">Interested? Lets make your <br class="hidden-xs"> Business the best.</h2>
                            <a href="{{ route('contactUs') }}" class="cta-button">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action Section Ends -->


        <div class="spacer-2"></div>



    </div> <!-- Wrapper End -->
@endsection