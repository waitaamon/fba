@extends('layouts.main')

@section('content')
    <div class="wrapper">



        <div class="services" id="scroll-to-top">
            <div class="service-intro">
                <div class="spacer-1"></div>
                <h1 class="wow fadeInLeft" data-wow-delay="3s">Our Services</h1>
            </div>
            <div class="spacer-2"></div>
            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1 ">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="service-icon">
                                    <i class="ion-ios-paper-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Internal Audits & Risk Compliance Services</h2>
                                    <p>
                                        In today’s rapid environment businesses need to understand the environment in which they operate in, as well as any risks they face so as to manage such risks. Businesses need Internal audit to help them achieve their objectives. Internal audit is concerned with evaluating and improving the effectiveness of risk management, control and governance processes in an organization. An organization with a strong internal audit function – be it internal or outsourced – enjoys the perks of risks being identified and addressed in time if not real time.
                                    </p>
                                    <p><a href="{{ route('internalAudit') }}">Read More...</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.8s">
                                <div class="service-icon">
                                    <i class="ion-ios-monitor-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Operational Excellence</h2>
                                    <p>
                                        The basic goal of any organization is make profits and strive towards increasing shareholder’s wealth. This may be achievable in the short-run. To sustain growth and ensure a progressive trajectory, organizations need to excel in how they operate. Focus Business Advisory will work hand in hand with your organization to ensure your business achieves its desired operational excellence in its operations.
                                    </p>
                                    <p><a href="{{ route('operational') }}">Read More...</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.8s">
                                <div class="service-icon">
                                    <i class="ion-ios-analytics-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Business Advisory</h2>
                                    <p>
                                        Is your organization performing at its optimum? Are your costs hitting the ceiling? Are you facing challenges with your cash flow? These are some of the puzzles we will help you solve. Right from the word go, we’ll review your organization’s current status, work hand in hand with your management team to provide solutions that will help you put in place the building blocks that will ensure your organizations performs more effectively.
                                    </p>
                                    <p><a href="{{ route('businessAdvisory') }}">Read More...</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="col-sm-12 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.8s">
                                <div class="service-icon">
                                    <i class="ion-android-done-all"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Accounts & Tax</h2>
                                    <p>
                                        FBA is your business partner when it comes to proving accounting advisory services. We have a team of chartered accountants who will help you meet your specific needs. We have specialized in setting up accounting systems for start-up businesses and/or providing continuous accounting services to small and medium sized businesses.
                                    </p>
                                    <p><a href="{{ route('taxAdvisory') }}">Read More...</a></p>
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