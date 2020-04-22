@extends('layouts.quintus-layout')


@section('content')
<!-- STARTING PRIMARY / PAGE FIRST CONTENT -->
<div class="mt_site_slider mt_margin_left_15">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        @include('quintus.parts.carousel')

    </div>
</div>


<!-- STARTING PRIMARY / PAGE CONTENT -->
<div id="primary" class="no-padding content-area no-sidebar">
    <main id="main" class="col-md-12 site-main main-content">

        <!-- SECTION: OUR SERVICES FIRST -->
        <div class="clearfix"></div>
        <div class="row high-padding section-coloredbg-semitransparent">
            <div class="container mt_padding_top_15">
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_nasa-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">SPACE INDUSTRY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_depository-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">STORAGE FACTORY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_extracting-1-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">EXTRACTIVE INDUSTRY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>

        <!-- SECTION: OUR BLOG -->
        <div class="clearfix"></div>
        <div class="row section-light high-padding">
            <div class="container">
                <!-- BLOCK: TITLE/SUBTITLE -->
                <div class="title-subtile-holder">
                    <h1 class="section-title dark_title"><b>BLOG POSTS</b></h1>
                    <!-- <div class="section-border dark_border"></div> -->
                    <div class="section-subtitle dark_subtitle"><b>INDUSTRIAL NEWS</b></div>
                </div>
                <!-- BLOCK: BLOG POSTS -->
                <div class="blog-posts wow fadeInUp">
                    <article class="single-post list-view">
                        <div class="blog_custom">
                            <div class="post-details col-md-6">
                                <h3 class="post-name row">
                                    <a href="#" title="Article Page">New Wellhead Design Speeds Up Operations</a>
                                </h3>
                                <div class="post-category-comment-date row">
                                    <div class="post-date">
                                        <a href="#">
                                            <span class="blog_date blog_day">18</span>
                                            <span class="blog_date blog_month">Feb</span>
                                        </a>
                                    </div>
                                    <span class="post-tags">
											<i class="icon-tag"></i>
											<a href="#" rel="tag">Industrial</a>
										</span>
                                    <span class="post-author">
											<i class="icon-user icons"></i>
											<a href="#">James Colies</a>
										</span>
                                </div>
                                <div class="post-excerpt row">
                                    <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                                    <a class="more-link" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 post-thumbnail">
                                <a class="relative mt_full_size" href="#" >
                                    <img class="blog_post_image mt_full_size" src="images/blog_post-1.jpg" alt="Post Image" />
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="single-post list-view">
                        <div class="blog_custom">
                            <div class="post-details col-md-6">
                                <h3 class="post-name row ">
                                    <a href="#" title="Article Page">Corrosion—The Longest War</a>
                                </h3>
                                <div class="post-category-comment-date row">
                                    <div class="post-date">
                                        <a href="#">
                                            <span class="blog_date blog_day">18</span>
                                            <span class="blog_date blog_month">Feb</span>
                                        </a>
                                    </div>
                                    <span class="post-tags">
											<i class="icon-tag"></i>
											<a href="#" rel="tag">Industrial</a>
										</span>
                                    <span class="post-author">
											<i class="icon-user icons"></i>
											<a href="#">James Colies</a>
										</span>
                                </div>
                                <div class="post-excerpt row">
                                    <p>Trying to catch up with every new social network? Do you find yourself juggling with copy and images to make sure to share <i>at least</i> a certain number of social media posts each</p>
                                    <a class="more-link" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6 post-thumbnail">
                                <a class="relative mt_full_size" href="#">
                                    <img class="blog_post_image mt_full_size" src="images/blog_post-2.jpg" alt="Post Image" />
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- asfd -->
        <!-- SECTION: PRICING TABLES -->
        <div class="clearfix"></div>


        <!-- SECTION: OUR SERVICES -->
        <div class="clearfix"></div>
        <div class="row high-padding section-blackbg-semitransparent">
            <div class="container">
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_factory-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">INDUSTRIAL FACTORY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_cargo-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">NAVAL INDUSTRY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="col-sm-4 col-md-4 text-center">
                    <img class="single_image-img" src="images/industrial_delivery-100x100.png" width="100" height="100" alt="industrial_factory" title="industrial_factory" />
                    <h4 class="custom_heading light-heading mt_fond_bold">DISTRIBUTOR INDUSTRY</h4>
                    <p class="light-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
        </div>


        @include('quintus.parts.clients')


        @include('quintus.parts.testimonials')


        @include('quintus.parts.contacts')
    </main>
</div>
@endsection
