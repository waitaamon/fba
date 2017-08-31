@extends('layouts.main')

@section('content')
    <div class="wrapper">



        <div class="services" id="scroll-to-top">
            <div class="service-intro">
                <div class="spacer-1"></div>
                <h1 class="wow fadeInLeft text-center" data-wow-delay="3s">Accounts & Tax Advisory Services</h1>
            </div>
            <div class="spacer-2"></div>
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1 ">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.2s">

                                <div class="service-description">

                                    <p>
                                        FBA is your business partner when it comes to proving accounting advisory services. We have a team of chartered accountants who will help you meet your specific needs. We have specialized in setting up accounting systems for start-up businesses and/or providing continuous accounting services to small and medium sized businesses.
                                    </p>

                                    <p>
                                        FBA gives business owners the freedom to concentrate on their core services. There's no need to scratch your head when it comes to accounting, focus on selling and we'll do the rest for you.
                                    </p>

                                    <p>
                                        We partner with businesses by providing a myriad of accounting and tax advisory services:
                                    </p>

                                    <ul class="about-list wow fadeInLeft " data-wow-delay="3s" style="color:#727272; text-align: left">
                                        <li>Accounting for start-ups including initial account set-up, and training.</li>
                                        <li>Accounts review and advisory</li>
                                        <li>Tax advisory to ensure full tax compliance</li>
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