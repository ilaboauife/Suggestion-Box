@extends('layouts.auth')

@section('title','Get The Best Suggestions:Shopping | Movies | Entertainment | Sports')

@section('content')
    <div class="site">
        <div id="site_loader" class="site-loader">
            <div class="spinner"><span class="bounce"></span><span class="bounce"></span><span class="bounce"></span></div>
        </div>

        <div class="site-canvas')">
            <div id="site_header" class="site-header">
                <nav id="site_header_navbar" class="site-header-navbar navbar navbar-fixed-top navbar-lg navbar-bg-from-transparent navbar-fg-from-light navbar-light">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#site_header_navbar_collapse" class="navbar-toggle collapsed">
                                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a href="#" class="navbar-brand navbar-brand-has-media">
                  <span class=""><span class="text">SuggBox</span>
                    <img src="{{ asset('public/assets/img/logo.png')}}" alt="" class="navbar-brand-media-img navbar-brand-media-img-light">
                    <img src="{{ asset('public/assets/img/logo.png')}}" alt="" class="navbar-brand-media-img navbar-brand-media-img-dark">
                  </span>
                            </a>
                        </div>
                        <div id="site_header_navbar_collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#page_intro_section" data-smooth-scroll="true"><span class="navbar-nav-elem-wrap"><span class="widget-title primary-text-dark">Home</span></span></a></li>
                                <li><a href="" data-smooth-scroll="true"><span class="navbar-nav-elem-wrap"><span class="widget-title primary-text-dark">How it works</span></span></a></li>
                                <li><a href="" data-smooth-scroll="true"><span class="navbar-nav-elem-wrap"><span class="widget-title primary-text-dark">Contact</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div style="margin-top:-55px" id="site_content" class="site-content">
                <div id="page_intro_section" class="align align-middle page-intro-section page-intro-section-md section section-md bg-default">
                    <div class="bg-img bg-img-parallax bg-repeat bg-no-cover"></div>

                    <div class="align-container">
                        <div class="container">

                            <div class="flexible-widgets row d-sm-flex flex-items-sm-middle">

                                <div class="widget-section widget widget_text wow fadeInUpShort col-sm-10 text-center text-sm-inherit">
                                    <div class="widget-wrap">
                                        <div class="textwidget">
                                            <img src="{{ asset('public/assets/img/bg.png')}}" class="img-responsive mx-auto">
                                        </div>
                                    </div>
                                </div>


                                <div data-wow-delay="100ms" class="widget-section widget widget_text col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-5 col-md-offset-1 mt-vr mt-sm-0 wow fadeInUpShort">
                                    <div class="widget-wrap">
                                        <h3 class="widget-title primary-text-dark text-center">
                                            Sign in now! <br>
                                            No registration needed
                                        </h3>
                                        <div class="textwidget">
                                            <button class="btn btn-wide btn-primary btn-block">
                          <span class="btn-elem-wrap"><span class="icon fa fa-facebook"></span>
                              Login with Facebook
                          </span>
                                            </button>
                                            <button class="btn btn-wide btn-info btn-block">
                          <span class="btn-elem-wrap"><span class="icon fa fa-twitter"></span>
                               Login with Twitter
                          </span>
                                            </button>
                                            <button class="btn btn-wide btn-danger btn-block">
                          <span class="btn-elem-wrap"><span class="icon fa fa-google"></span>
                               Login with Google
                          </span>
                                            </button>
                                            <div>
                                                <br>
                                                <h3 class="widget-title primary-text-dark text-center">Get the best suggestions <br>
                                                    Shopping | Movies | Entertainment | Sports
                                                </h3>
                                                <span class="pr-sm"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="site_footer">
                <div id="site_footer_info" class="site-footer-info  text-center">
                    <div class="container">
                        <div data-wow-delay="600ms" class="site-footer-copyright secondary-text-dark wow fadeInUpShort">Copyright Ilab 2017</div>
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection