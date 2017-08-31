@extends('layouts.main')

@section('content')
    <div class="wrapper">



        <div class="services" id="scroll-to-top">
            <div class="service-intro">
                <div class="spacer-1"></div>
                <h1 class="wow fadeInLeft text-center" data-wow-delay="3s">Operational Excelence</h1>
            </div>
            <div class="spacer-2"></div>
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1 ">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.2s">

                                <div class="service-description">

                                    <p>
                                        The basic goal of any organization is make profits and strive towards increasing shareholder’s wealth. This may be achievable in the short-run. To sustain growth and ensure a progressive trajectory, organizations need to excel in how they operate. Focus Business Advisory will work hand in hand with your organization to ensure your business achieves its desired operational excellence in its operations.
                                    </p>
                                    <p>
                                        Operational excellence (“OE”) is simply exceeding customer expectation while ensuring continued and sustainable business growth and improvements. To better understand OE, let us try to answer this question:
                                    </p>

                                    <blockquote class="blockquote-reverse" style="margin-top: 2%; margin-bottom: 3%; font-size: .9em">
                                        “Where will our journey of continuous improvement take us?”
                                        a good answer is

                                        <hr>

                                        “Our journey of continuous improvement will take us to Operational Excellence”
                                    </blockquote>

                                    <p>

                                        Some of the fundamental components to have in mind during this journey of Operational Excellence include:
                                    </p>

                                    <ul class="about-list wow fadeInLeft " data-wow-delay="3s" style="color:#727272; text-align: left">
                                        <li>Leadership</li>
                                        <li>Culture</li>
                                        <li>Process</li>
                                        <li>Technology </li>
                                        <li>People</li>
                                    </ul>

                                    <p style="text-align: center; font-weight: 600; margin-top: 3%;">
                                        “Operational excellence is a journey and we are ready to walk with you.”
                                    </p>

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