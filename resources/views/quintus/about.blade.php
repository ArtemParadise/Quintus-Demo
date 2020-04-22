@extends('layouts.quintus-layout')


@section('content')
    <!-- SECTION 1 -->
    <!-- FIRST CONTENT -->
    <div class="row hight-padding mt_about_section1_bg">
        <div class="col-sm-12 col-md-12">
            <div class="gambit_background_row mt_about_style" data-zindex="-1">
            </div>
            <div class="gambit_parallax_row" data-bg-align="" data-direction="down" data-opacity="100" data-velocity="-0.3" data-mobile-enabled="" data-bg-height="1200" data-bg-width="1920" data-bg-image="images/quitus_parallax-5.jpg" data-bg-repeat="false" data-zindex="-2">
            </div>
            <h1 class="custom_heading custom_1458646501026 light_title text-center mt_fond_bold">ABOUT US</h1>
            <h3 class="custom_heading custom_1486370244120 light-paragraph text-center mt_fond_bold">Manufacturing Complex / Professional Workers / Latest Industrial Technology</h3>
        </div>
    </div>
    <div class="clearfix"></div>


    <!-- SECTION 2 -->
    <!-- STARTING PRIMARY / PAGE FIRST CONTENT -->
    <div class="clearfix"></div>
    <div class="mt_site_slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            @include('quintus.parts.carousel')
        </div>
    </div>

    <!-- SECTION 3  -->
    <div class="row high-padding mt_about_section4_bg">
        <div class="container mt_padding_top_15">
            <div class="col-sm-6 col-md-6">
                <img src="images/mt_quintus_about_image3.jpg" alt=""/>
            </div>
            <div class="col-sm-6 col-md-6"></div>
            <div class="col-sm-6 col-md-6 text-center post-details">
                <h2 class="custom_heading dark_title text-left mt_fond_bold">We Are Professional</h2>
                <div class="empty_space" style="height: 20px">
                    <span class="empty_space_inner pull-left"></span>
                </div>
                <p class="mt_about_section_p dark_subtitle">Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Enim minim veniam, quis sit nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <div class="mt_margin_left_about_30">
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Duis aute irure dolor in reprehenderit</p>
                    </div>
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Enim minim veniam</p>
                    </div>
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Duis aute irure dolor in reprehenderit</p>
                    </div>
                    <div class="mt-icon-list-item">
                        <div class="mt-icon-list-icon-holder">
                            <div class="mt-icon-list-icon-holder-inner clearfix">
                                <i class="fa fa-check-circle-o mt_about_section_i"></i>
                            </div>
                        </div>
                        <p class="mt-icon-list-text mt_about_section_p">Enim minim veniam</p>
                    </div>
                </div>
                <button name="contact_me" type="submit" class="mt_about_button mt_align_about_button_30">READ MORE
                </button>
            </div>
        </div>
    </div>


    <!-- STARTING PRIMARY / PAGE CONTENT -->
    <div id="primary" class="no-padding content-area no-sidebar">
        <main id="main" class="col-md-12 site-main main-content">

            <!-- SECTION: CLIENTS -->
            @include('quintus.parts.clients')

            <!-- SECTION: TESTIMONIALS -->
            @include('quintus.parts.testimonials')

            <!-- SECTION: CONTACT -->
            @include('quintus.parts.contacts')
        </main>
    </div>
    <script>
        let element = document.querySelector('.carousel-inner');
        element.classList.add("mt_left_15")
    </script>
@endsection


