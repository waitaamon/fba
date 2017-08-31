@extends('layouts.main')

@section('content')

    <div class="wrapper">

    <!-- About Section Begins -->

        <div class="about-us" id="scroll-to-top">
            <div class="about-intro">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1 class="wow fadeInLeft" data-wow-delay="3.1s">
                                We are
                                <br/>FBA.
                            </h1>
                            <p class="wow fadeInLeft" data-wow-delay="3.2s">
                                Focus Business Advisory (“FBA”) is a leading professional Advisory firm based in Nairobi, Kenya, providing Enterprise Risk Management services, Internal Audits & Compliance Reviews, Forensic Audits as well as IT Audits & Compliance Reviews in the East African region. At FBA, we engage our clients and provide solutions that help them achieve their strategic, financial and business goals.
                            </p>
                            <p class="wow fadeInLeft" data-wow-delay="3.3s">
                                Our multi-disciplined team of experienced professionals has an extensive track record of delivering worthwhile solutions for our clients across all sectors in the region. Our team has vast experience in various sectors including:
                            </p>

                            <ul class="about-list wow fadeInLeft" data-wow-delay="3.4s">
                                <li>Fast Moving Consumer Goods (FMCGs)</li>
                                <li>Financial Sector - Banking, SACCOs and Insurance</li>
                                <li>Trading & Manufacturing</li>
                                <li>Not for Profit Organizations (NGOs)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Work Section -->

        <div class="row work-section">
            <div class="container">
                <div class="work-intro">
                    <h4 class="wow fadeInLeft" data-wow-delay=".1s">Work</h4>
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
                    <div class="col-sm-4">
                        <img src="/img/focus-business-advisor-lead-advisory.png" alt="" class="img-responsive">
                    </div>

                </div>
            </div>
        </div>

        <!-- Call To Action Section -->
        <div class="cta-section">
            <div class="container text-center wow fadeInLeft" data-wow-delay=".3s">
                <div class="cta-content">
                    <h2>We are ready to work for you.</h2>
                    <p>
                        Get in touch with us to grow your business.
                    </p><a href="{{ route('contactUs') }}" class="about-button">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Call To Action Section Ends -->

        <div class="spacer-2"></div>


    </div> <!-- Wrapper End -->

@endsection