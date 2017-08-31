@extends('layouts.main')


@section('content')
    <div class="wrapper">


    <!-- Main Content Starts Here -->

        <div class="pta-jarallax" id="scroll-to-top">
            <div class="main">
                <div class="container">
                    <div class="main-intro">
                        <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s">Focus<br> Business <span class="s-color">Advisory</span><span class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">.</span>
                        </h1>
                        <h4 class="wow fadeInLeft"data-wow-delay="0.5s">Business Consulting & <br class="hidden-xs"> Advisory </h4>
                    </div>
                </div>
            </div>
        </div>


        <!-- About Section Begins Here -->
        <div class="pta-about">
            <div class="container">
                <div class="pta-about-intro">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="pta-about-title">
                                <h4 class="wow fadeInLeft" data-wow-delay="0.5s">Who we are</h4>
                                <p class="wow fadeInLeft" data-wow-delay="0.5s">Focus Business Advisory (“FBA”) Limited is a consulting and advisory company established to provide contemporary business advisory services of Risk management, Compliance & Internal audits, ICT audit, Forensic audit, Accounting, Tax, Business Advisory and Corporate Governance.  FBA supports its clients to achieve their strategic, financial and business goals.</p>
                                <p class="wow fadeInLeft" data-wow-delay="0.7s">From complex enterprise risk assessments and compliance audits involving multiple stakeholders, to an individual’s business challenges, we are trusted by our clients and their stakeholders, to deliver successful solutions.</p>
                                <p class="wow fadeInLeft" data-wow-delay="0.9s">Our multi-disciplined team of experienced professionals has an extensive track record of delivering worthwhile solutions to our clients across all sectors in the region. In the current market, we are excelling at internal audit and risk compliance services including risk management services (risk identification, assessment and treatment) and ICT audit services.</p>
                                <a href="{{ route('about') }}" class="pta-about-button btn-fill wow fadeIn"data-wow-delay="0.5s">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Section Ends Here -->

        <!--start services section-->
        <div class="services">
            <div class="service-intro">
                <div class="spacer-1"></div>
                <h1 class="wow fadeInLeft" data-wow-delay="1s">Our Services</h1>
            </div>

            <div class="spacer-2"></div>

            <div class="container">

                <div class="row text-center">
                    <div class="col-sm-10 col-sm-offset-1 ">

                        <div class="col-sm-6 col-xs-12 ">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="service-icon">
                                    <i class="ion-ios-paper-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Internal Audits & Risk Compliance Services</h2>
                                    <p>
                                        In today’s rapid environment businesses need to understand the environment in which they operate in, as well as any risks they face so as to manage such risks. Businesses need Internal audit to help them achieve their objectives. Internal audit is concerned with evaluating and improving the effectiveness of ...
                                    </p>
                                    <p><a href="{{ route('internalAudit') }}">read more</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="service-icon">
                                    <i class="ion-ios-monitor-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Operational Excellence</h2>
                                    <p>
                                        The basic goal of any organization is make profits and strive towards increasing shareholder’s wealth. This may be achievable in the short-run. To sustain growth and ensure a progressive trajectory, organizations need to excel in how they operate. Focus Business Advisory will work hand in hand with your organization ...
                                    </p>
                                    <p><a href="{{ route('operational') }}">read more</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="service-icon">
                                    <i class="ion-ios-analytics-outline"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Business Advisory</h2>
                                    <p>
                                        Is your organization performing at its optimum? Are your costs hitting the ceiling? Are you facing challenges with your cash flow? These are some of the puzzles we will help you solve. Right from the word go, we’ll review your organization’s current status, work hand in hand with your management team to provide solutions ...
                                    </p>
                                    <p><a href="{{ route('businessAdvisory') }}">read more</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="service-block wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="service-icon">
                                    <i class="ion-android-done-all"></i>
                                </div>
                                <div class="service-description">
                                    <h2>Accounts & Tax</h2>
                                    <p>
                                        FBA is your business partner when it comes to proving accounting advisory services. We have a team of chartered accountants who will help you meet your specific needs. We have specialized in setting up accounting systems for start-up businesses and/or providing continuous accounting services ...
                                    </p>
                                    <p><a href="{{ route('taxAdvisory') }}">read more</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div><!-- Services-->
        <!--end services section-->


        <div class="row work-section">
            <div class="container">
                <div class="work-intro">
                    <h1 class="wow fadeInLeft" data-wow-delay=".2s">Why choose FBA?</h1>
                    <div class="col-sm-8">
                        <p class="wow fadeInLeft" data-wow-delay=".3s">
                            Our clients benefit from a cohesive approach based on understanding the key issues facing small, medium and large sized organizations. This enables us to meet their specific needs allows them to focus on building the value of their business. At FBA:
                        </p>

                        <ul>
                            <li>We take time to understand our client’s needs</li>
                            <li>We provide realistic and practical solutions</li>
                            <li>We have a team of professionals and experienced staff</li>
                            <li>We provide value for your money</li>
                        </ul>
                    </div>
                    <div class="col-sm-4 wow fadeInRight" data-wow-delay=".2s">
                        <img src="/img/why-choose-focus-business-advisory.jpg" alt="Why choose Focus Business Advisory" class="img-responsive">
                    </div>

                </div>
            </div>
        </div>
        <!-- Call to Action Section Starts Here -->

        <div class="container" style=" border: 2px solid #adadad; text-align: center;">
            <div class="pta-cta">
                <h4 class="wow fadeInLeft" data-wow-delay="0.5s">contact us</h4>
                <h1 class="wow fadeInLeft" data-wow-delay="0.5s"><span style="color: #f4a742">Contact us today </span><a href="{{ route('contactUs') }}" class="pta-button">Contact us <i class="ion-android-drafts"></i></a></h1>
            </div>
        </div>
        <div class="spacer-2"></div>



    </div> <!-- Wrapper End -->


@endsection