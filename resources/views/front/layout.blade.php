<!DOCTYPE html>
<html lang="en">
<head><meta charset="euc-jp">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{ $title }}</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('front/img/favicon.ico') }}" type="image/x-icon">

    <!-- Stylesheets -->
    <link href="{{ asset('front/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/global.css') }}?v=3" rel="stylesheet">
    <link href="{{ asset('front/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/style.css') }}?v=2.2" rel="stylesheet">
    <link href="{{ asset('front/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/responsive.css') }}?v=2.5" rel="stylesheet">
    
        <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/24106902.js"></script>
    <!-- End of HubSpot Embed Code -->

    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TK8CY0LLJM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-TK8CY0LLJM');
    </script>

    @yield('script-up')
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2308894140394504" crossorigin="anonymous"></script>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- mouse-pointer -->
        <div class="mouse-pointer style-11" id="mouse-pointer">
            <div class="icon"><i class="far fa-angle-left"></i><i class="far fa-angle-right"></i></div>
        </div>
        <!-- mouse-pointer end -->

        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader home-12">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="n" class="letters-loading">
                                n
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="javascript:void(0);" class="close-side-widget"><i class="icon-179"></i></a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('front/img/logo.png') }}" alt="" /></a>
                                </div>
                                <div class="text-box">
                                    <h4>{{ trans('home.message_3') }}</h4>
                                    <p>{{ trans('home.message_4') }}</p>
                                </div>
                                <div class="info-inner">
                                    <h4>{{ trans('home.find') }}</h4>
                                    <ul class="info clearfix">
                                        <li><i class="icon-180"></i>{{ config('app.direction_short') }}</li>
                                        <li><i class="icon-181"></i><a href="mailto:{{ config('app.email_contact') }}">{{ config('app.email_contact') }}</a></li>
                                        <li><i class="icon-182"></i><a href="tel:{{ config('app.cell_contact') }}">{{ config('app.cell_contact') }}</a></li>
                                    </ul>
                                </div>
                                <div class="social-inner">
                                    <h4>{{ trans('home.follow') }}</h4>
                                    <ul class="social-links clearfix">
                                        <!-- li><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li-->
                                        <li><a href="https://www.linkedin.com/company/talenter-it/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://instagram.com/talenterit" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <!-- li><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


        <!-- main header -->
        <header class="main-header header-style-two header-style-10">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('front/img/logo.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix home-menu">
                                        <li class="<?php echo ($active_menu=='home')?'current':''; ?>"><a href="{{ url('/') }}">{{ trans('header.home') }}</a></li>
                                        <li class="/#servicios"><a href="/#servicios">{{ trans('header.services') }}</a></li>
                                        <li class="<?php echo ($active_menu=='opportunity')?'current':''; ?>"><a href="/#busquedas-activas">{{ trans('header.active_searches') }}</a></li>
                                        <li class="<?php echo ($active_menu=='blog')?'current':''; ?>"><a href="/#blog">Blog</a></li>
                                        <li class="/#contacto"><a href="/#contacto">{{ trans('header.contact') }}</a>
                                        <li class="dropdown ms-5"><a href="javascript:void(0);"><i class="fas fa-language traducir"></i></a>
                                            <ul>
                                                <li><a href="{{ url('lang/en') }}">English</a></li>
                                                <li><a href="{{ url('lang/es') }}">Español</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="nav-right">
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-22"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('front/img/logo.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="nav-right">
                            <div class="nav-btn nav-toggler navSidebar-button clearfix">
                                <i class="icon-22"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ url('front/img/mobile-logo.png') }}" alt="" title=""></a></div>
                <div class="menu-outer hidde-sm"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>{{ config('app.direction_short') }}</li>
                        <li><a href="tel:{{ config('app.cell_contact') }}">{{ config('app.cell_contact') }}</a></li>
                        <li><a href="mailto:{{ config('app.email_contact') }}">{{ config('app.email_contact') }}</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                         <li><a href="https://www.linkedin.com/company/talenter-it/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                         <li><a href="https://instagram.com/talenterit" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        @yield('content')

        <!-- footer-12 -->
        <footer class="footer-12">
            <div class="footer-top-two">
                <div class="auto-container clearfix">
                    <figure class="footer-logo pull-left">
                        <a href="index.html"><img src="{{ asset('front/img/footer-logo.png') }}" alt=""></a>
                    </figure>
                    <ul class="footer-menu mt_12 pull-right clearfix">
                        <li><a href="{{ url('/') }}">{{ trans('header.home') }}</a></li>
                        <li><a href="/#servicios">{{ trans('header.services') }}</a></li>
                        <li><a href="/#busquedas-activas">{{ trans('header.active_searches') }}</a></li>
                        <li><a href="/#blog">Blog</a></li>
                        <li><a href="/#contacto">{{ trans('header.contact') }}</a>
                    </ul>
                </div>
            </div>
            <div class="auto-container">
                <div class="footer-widget-section">
                    <div class="row clearfix">
                        <div class="col-md-4 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="text">
                                    <p>{{ trans('home.message_20') }}</p>
                                </div>
                                <ul class="footer-social-two clearfix">
                                     <li><a href="https://www.linkedin.com/company/talenter-it/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                         <li><a href="https://instagram.com/talenterit" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-5 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h4>Talenter</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li>{{ config('app.direction_short') }}</li>
                                        <li><a href="tel:{{ config('app.cell_contact') }}">{{ config('app.cell_contact') }}</a></li>
                                        <li><a href="mailto:{{ config('app.email_contact') }}">{{ config('app.email_contact') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner centred">
                        <div class="copyright">
                            <p><a href="{{ url('/') }}">{{ config('app.name') }}</a> &copy; {{ date('Y') }} {{ trans('footer.all_rigth_reserved') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-12 end -->

        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text g_color_2">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/plugins.js') }}"></script>
    <script src="{{ asset('front/js/owl.js') }}"></script>
    <script src="{{ asset('front/js/wow.js') }}"></script>
    <script src="{{ asset('front/js/validation.js') }}"></script>
    <script src="{{ asset('front/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('front/js/appear.js') }}"></script>
    <script src="{{ asset('front/js/scrollbar.js') }}"></script>
    <script src="{{ asset('front/js/parallax.min.js') }}"></script>
    <script src="{{ asset('front/js/circle-progress.js') }}"></script>
    <script src="{{ asset('front/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('front/js/nav-tool.js') }}"></script>
    <script src="{{ asset('front/js/isotope.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('front/js/jquery.paroller.min.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('front/js/script.js') }}"></script>

    <script>
        $(document).ready(function(e){
            if($('.alert-lng').length>0){
                setTimeout(() => {
                    $('.alert-lng').remove();
                }, 8000);
            }
        });
    </script>
    


    @yield('script-down')

</body><!-- End of .page_wrapper -->
</html>
