@extends('front.layout')

@section('content')
    <!-- banner-three -->
    <section class="banner-three p_relative pb_160">
        <div class="shape parallax-scene parallax-scene-1">
            <div data-depth="0.40" class="shape-1 p_absolute" style="background-image: url({{ asset('front/img/shape-66.png') }});"></div>
            <div data-depth="0.30" class="shape-2 p_absolute" style="background-image: url({{ asset('front/img/shape-66.png') }});"></div>
            <div data-depth="0.50" class="shape-3 p_absolute" style="background-image: url({{ asset('front/img/shape-66.png') }});"></div>
            <div data-depth="0.40" class="shape-4 p_absolute"></div>
        </div>
        <div class="pattern-layer hero-shape-four p_absolute"></div>
        <div class="pattern-layer-2 hero-shape-four p_absolute"></div>
        <div class="bg-layer p_absolute t_0 r_0 wow slideInDown animated" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url({{ asset('front/img/banner-1-1.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xl-5 content-column">
                    <div class="content-box p_relative d_block wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <h2 class="d_block fs_65 lh_80 fw_bold font_family_jost mb_25">{{ trans('home.message_1') }}</h2>
                        <p class="fs_17 font_family_poppins lh_28 mb_20">{{ trans('home.message_2') }}</p>
                        <div class="btn-box clearfix">
                            <a href="#nosotros" class="theme-btn theme-btn-five mr_25">{{ trans('home.message_19') }} <i class="icon-4"></i></a>
                            {{-- <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn p_relative d_iblock fs_20 font_family_jost fw_medium pl_80 t_15 pt_11 pb_7" data-caption=""><i class="icon-24"></i>Check Our Intro <br>Video</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-three end -->

    <!-- clients-one 
    <section class="clients-one home-12 p_relative pt_100">
        <div class="auto-container">
            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                <div class="clients-logo-box">
                    <figure class="image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-1.png') }}" alt=""></a></figure>
                    <figure class="overlay-image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-1.png') }}" alt=""></a></figure>
                </div>
                <div class="clients-logo-box">
                    <figure class="image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-2.png') }}" alt=""></a></figure>
                    <figure class="overlay-image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-2.png') }}" alt=""></a></figure>
                </div>
                <div class="clients-logo-box">
                    <figure class="image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-3.png') }}" alt=""></a></figure>
                    <figure class="overlay-image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-3.png') }}" alt=""></a></figure>
                </div>
                <div class="clients-logo-box">
                    <figure class="image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-4.png') }}" alt=""></a></figure>
                    <figure class="overlay-image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-4.png') }}" alt=""></a></figure>
                </div>
                <div class="clients-logo-box">
                    <figure class="image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-5.png') }}" alt=""></a></figure>
                    <figure class="overlay-image"><a href="{{ url('/') }}"><img src="{{ asset('front/img/clients-logo-5.png') }}" alt=""></a></figure>
                </div>
            </div>
        </div>
    </section>
    clients-one end -->

    <!-- about-12 -->
    <section class="about-12 p_relative sec-pad pb-5" id=nosotros>
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_13">
                        <div class="image-box p_relative d_block">
                            <div class="shape parallax-scene parallax-scene-2">
                                <div data-depth="0.40" class="shape-1 p_absolute" style="background-image: url({{ asset('front/img/shape-66.png') }});"></div>
                                <div data-depth="0.30" class="shape-2 p_absolute" style="background-image: url({{ asset('front/img/shape-66.png') }});"></div>
                                <div data-depth="0.40" class="shape-3 p_absolute"></div>
                                <div data-depth="0.50" class="shape-4 p_absolute"></div>
                                <div data-depth="0.30" class="shape-5 p_absolute"></div>
                            </div>
                            <figure class="image image-1 p_absolute d_block wow slideInDown animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('front/img/about-3.png') }}" alt=""></figure>
                            <figure class="image image-2 p_absolute d_block wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('front/img/about-4.png') }}" alt=""></figure>
                            <figure class="image image-3 p_absolute d_block wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('front/img/about-5.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_nine">
                        <div class="content-box p_relative d_block ml_40">
                            <div class="sec-title-nine p_relative d_block mb_25">
                                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">Talenter</h6>
                                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('home.message_3') }}</h2>
                            </div>
                            <div class="text p_relative d_block mb_35">
                                <p class="font_family_poppins mb_25">{{ trans('home.message_4') }}</p>
                                <p class="font_family_poppins mb_25">{{ trans('home.message_5') }}</p>
                                <p class="font_family_poppins">{{ trans('home.message_5_1') }}</p>
                            </div>
                            {{-- <div class="btn-box">
                                <a href="javascript:void(0);" class="theme-btn theme-btn-two"><span data-text="Read More">Read More</span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-12 end -->

    <!-- service-12 -->
    <section class="service-12 p_relative centred sec-pad pt-5" id="servicios">
        <div class="auto-container">
            <!-- div class="sec-title-nine p_relative d_block mb_50">
                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins"></h6>
                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('home.message_10') }}</h2>
            </div -->
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-10 wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block b_radius_10 pt_60 pl_30 pb_50 pr_30 tran_5 mb_30">
                            <div class="icon-box p_relative d_iblock fs_45 mb_30">
                                <div class="shape-1 l_0 t_0 hero-shape-four p_absolute tran_5"></div>
                                <div class="shape-2 p_absolute l_0 t_5" style="background-image: url({{ asset('front/img/shape-132.png') }});"></div>
                                <div class="icon"><i class="icon-86"></i></div>
                                <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-69.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h3 class="d_block fs_24 lh_30 fw_sbold font_family_jost mb_17"><a href="javascript:void(0);" class="d_iblock color_black">{{ trans('home.message_6_1') }}</a></h3>
                                <p class="fs_16 font_family_poppins mb_25 lh_28">{{ trans('home.message_7_1') }}</p>
                                <div class="link">
                                    {{-- <a href="javascript:void(0);" class="d_iblock p_relative fs_15 fw_sbold font_family_poppins color_black">Learn more<i class="icon-4"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-10 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block b_radius_10 pt_60 pl_30 pb_50 pr_30 tran_5 mb_30">
                            <div class="icon-box p_relative d_iblock fs_45 mb_30">
                                <div class="shape-1 l_0 t_0 hero-shape-four p_absolute tran_5"></div>
                                <div class="shape-2 p_absolute l_0 t_5" style="background-image: url({{ asset('front/img/shape-134.png') }});"></div>
                                <div class="icon"><i class="icon-87"></i></div>
                                <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-70.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h3 class="d_block fs_24 lh_30 fw_sbold font_family_jost mb_17"><a href="javascript:void(0);" class="d_iblock color_black">{{ trans('home.message_6_2') }}</a></h3>
                                <p class="fs_16 font_family_poppins mb_25 lh_28">{{ trans('home.message_7_2') }}<br><br><br><br><br></p>
                                <div class="link">
                                    {{-- <a href="javascript:void(0);" class="d_iblock p_relative fs_15 fw_sbold font_family_poppins color_black">Learn more<i class="icon-4"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-10 wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block b_radius_10 pt_60 pl_30 pb_50 pr_30 tran_5 mb_30">
                            <div class="icon-box p_relative d_iblock fs_45 mb_30">
                                <div class="shape-1 l_0 t_0 hero-shape-four p_absolute tran_5"></div>
                                <div class="shape-2 p_absolute l_0 t_5" style="background-image: url({{ asset('front/img/shape-136.png') }});"></div>
                                <div class="icon"><i class="icon-88"></i></div>
                                <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-71.png') }}" alt=""></div>
                            </div>
                            <div class="lower-content">
                                <h3 class="d_block fs_24 lh_30 fw_sbold font_family_jost mb_17"><a href="javascript:void(0);" class="d_iblock color_black">{{ trans('home.message_6_3') }}</a></h3>
                                <p class="fs_16 font_family_poppins mb_25 lh_28">{{ trans('home.message_7_3') }}<br><br><br><br></p>
                                <div class="link">
                                    {{-- <a href="javascript:void(0);" class="d_iblock p_relative fs_15 fw_sbold font_family_poppins color_black">Learn more<i class="icon-4"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service-12 end -->

    <!-- chooseus-nine -->
    <section class="chooseus-nine p_relative pt_150 pb_75">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_five">
                        <div class="content-box p_relative d_block mr_30">
                            <div class="sec-title-nine p_relative d_block mb_25">
                                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">{{ trans('home.message_6') }}</h6>
                                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('home.message_6') }}</h2>
                            </div>
                            <ul class="accordion-box">
                                <li class="accordion block active-block p_relative d_block">
                                    <div class="acc-btn active p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                        <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                        <h5 class="p_relative d_block fs_20 lh_28 fw_medium font_family_jost">{{ trans('home.message_7_4') }}</h5>
                                    </div>
                                    <div class="acc-content current p_relative pt_25 pr_50 pb_25 pl_30">
                                        <div class="text p_relative d_block">
                                            <p class="font_family_poppins">{{ trans('home.message_7_4_1') }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block p_relative d_block">
                                    <div class="acc-btn p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                        <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                        <h5 class="p_relative d_block fs_20 lh_28 fw_medium font_family_jost">{{ trans('home.message_7_5') }}</h5>
                                    </div>
                                    <div class="acc-content p_relative pt_25 pr_50 pb_25 pl_30">
                                        <div class="text p_relative d_block">
                                            <p class="font_family_poppins">{{ trans('home.message_7_5_1') }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="accordion block p_relative d_block">
                                    <div class="acc-btn p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                        <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                        <h5 class="p_relative d_block fs_20 lh_28 fw_medium font_family_jost">{{ trans('home.message_7_6') }}</h5>
                                    </div>
                                    <div class="acc-content p_relative pt_25 pr_50 pb_25 pl_30">
                                        <div class="text p_relative d_block">
                                            <p class="font_family_poppins">{{ trans('home.message_7_6_1') }}</p>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_14">
                        <div class="image-box p_relative d_block pr_150 pb_150">
                            <div class="shape">
                                <div class="shape-1 p_absolute rotate-me" style="background-image:url({{ asset('front/img/shape-66.png') }});"></div>
                                <div class="shape-2 p_absolute rotate-me" style="background-image:url({{ asset('front/img/shape-66.png') }});"></div>
                                <div class="shape-3 p_absolute"></div>
                                <div class="shape-4 p_absolute"></div>
                                <div class="shape-5 p_absolute"></div>
                            </div>
                            <figure class="image image-1 p_relative d_block wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('front/img/chooseus-1.png') }}" alt=""></figure>
                            <figure class="image image-2 p_absolute r_0 b_0 wow slideInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('front/img/chooseus-2.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-nine end -->

    <!-- news-12 ----------- OPORTUNIDADES ------------------ -->
    <section class="news-12 p_relative sec-pad" id="busquedas-activas">
        <div class="auto-container">
            <div class="sec-title-nine p_relative d_block mb_50 centred">
                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">
                    {{ trans('opportunity.opportunities') }}
                </h6><br />
                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('header.active_searches') }}</h2><br>
                <form method="post" style="margin: 1em 0;" action="{{ url('busquedas-activas') }}" id="contact-form">
                    <div class="row clearfix">
                        @csrf
                        <div class="col-md-3 form-group offset-md-2">
                            <input type="text" name="title" class="form-control" placeholder="{{ trans('opportunity.key_words') }}">
                        </div>
                        <div class="col-md-3 form-group">
                            <select name="opportunityCategory_id" id="opportunityCategory_id" class="form-control">
                                <option value="">--{{ trans('opportunity.select_category') }}--</option>
                                <?php
                                $categoryModel = new \App\Models\OpportunityCategories();
                                $categories = $categoryModel->all();
                                ?>
                                @foreach ($categories as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 form-group">
                            <button class="theme-btn theme-btn-five" type="submit" name="submit-form">{{ trans('opportunity.search') }} <i class="icon-4"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row clearfix">
                <?php
                $opportunityModel = new \App\Models\Opportunity();
                $opportunities = $opportunityModel->where('status', 'active')
                ->take(3)->orderBy('id', 'DESC')->get();
                ?>
                @foreach ($opportunities as $key => $value)

            <div class="col-sm-10 offset-sm-1 mt_20">

                <div class="form-inner p_relativeb_radius_10 b_shadow_6">


                    <div class="datos-oportunidad news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">

                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset('front/img/shape-60.png') }});"></div>
                            <div class="row pt_30 pr_30 pb_30 pl_30 ">
                                <div class="col-sm-2">
                                    <figure class="image"><a href="{{ url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}"><?php if(!$value->confidential){ ?><img src="{{ '/storage/'.$value->logo }}" class="" alt=""><?php }else{ ?><img src="{{ asset('front/img/default.jpg') }}" class="" alt=""><?php } ?></a></figure>
                                </div>
                                <div class="col-sm-3">
                                    <h3 class="titulo uppercase"><a href="{{ url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}">{{ html_entity_decode(strip_tags(((config('app.locale')=='es')?$value->title:$value->title_en))) }}</a></h3>
                                </div>
                                <div class="col-sm-2">
                                    <?php echo ($value->confidential)?trans('opportunity.confidential'):'' ?><br>
                                    <div class="talenter"><strong>REF:</strong> {{ $value->id }}</div>
                                </div>
                                <div class="col-sm-2 abierto" <?php echo $value->public_statuses->color ?>>
                                    <i class="{{ $value->public_statuses->icon }} pt_25" <?php echo $value->public_statuses->color ?>></i><br>
                                    {{ (config('app.locale')=='es')?$value->public_statuses->name:$value->public_statuses->name_en }}</div>
                                <div class="col-sm-3">
                                    <div class="btn-box">
                                        <a href="{{ url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}" class="theme-btn theme-btn-two"><span data-text="{{ trans('blog.learn_more') }}">{{ trans('blog.learn_more') }}</span></a>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="btn-box pt_30 col-sm-10 offset-sm-1 text-right">
                <a href="{{ url('busquedas-activas') }}" class="theme-btn theme-btn-two"><span data-text="{{ trans('blog.learn_more') }}">{{ trans('blog.learn_more') }}</span></a>
            </div>
        </div>
    </section>
    <!-- news-12 end -->

    <!-- testimonial-nine 
    <section class="testimonial-nine p_relative pt_100 pb_120">
        <div class="pattern-layer p_absolute l_0 t_0" style="background-image: url({{ asset('front/img/shape-143.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title-nine p_relative d_block">
                        <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">Testimonials</h6><br />
                        <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">Trusted by <br />More Than 3k Clients.</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                    <div class="inner-content p_relative pl_65">
                        <div class="two-column-carousel owl-carousel owl-theme owl-dots-none nav-style-one overflow_visible">
                            <div class="testimonial-block-one">
                                <div class="inner-box p_relative d_block">
                                    <div class="text p_relative d_block b_radius_10 pt_35 pr_30 pb_40 pl_40 mb_30">
                                        <ul class="rating clearfix p_relative d_block mb_15">
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                        </ul>
                                        <p class="font_family_poppins">Lorem ipsum dolor amet consectur elitadicing elit sed do usmod tempor uincididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                    </div>
                                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('front/img/testimonial-1.png') }}" alt=""></figure>
                                        <h4 class="d_block fs_20 lh_30 mb_2 fw_sbold font_family_jost">Kevin Spacey</h4>
                                        <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-one">
                                <div class="inner-box p_relative d_block">
                                    <div class="text p_relative d_block b_radius_10 pt_35 pr_30 pb_40 pl_40 mb_30">
                                        <ul class="rating clearfix p_relative d_block mb_15">
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16 mr_5"><i class="icon-20"></i></li>
                                            <li class="p_relative d_iblock pull-left fs_16"><i class="icon-20"></i></li>
                                        </ul>
                                        <p class="font_family_poppins">Lorem ipsum dolor amet consectur elitadicing elit sed do usmod tempor uincididunt enim ad minim veniam quis nostrud exer citation laboris nis aliquip comodo perspiatix.</p>
                                    </div>
                                    <div class="author p_relative d_block pl_90 pt_7 pb_11 ml_20">
                                        <figure class="thumb-box p_absolute l_0 t_0 w_70 h_70 b_radius_50"><img src="{{ asset('front/img/testimonial-2.png') }}" alt=""></figure>
                                        <h4 class="d_block fs_20 lh_30 mb_2 fw_sbold font_family_jost">Nicolas Lawson</h4>
                                        <span class="designation p_relative d_block fs_16 lh_20 font_family_poppins">Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     testimonial-nine -->


    <!-- funfact-seven -->
    <!-- section class="funfact-seven text-center p_relative pt_70 pb_70">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 fw_bold mb_14 font_family_jost">
                                <span class="count-text font_family_jost" data-speed="2500" data-stop="90">0</span>
                            </div>
                            <p class="p_relative d_block fs_16 font_family_poppins color_black">{{ trans('home.message_21') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 fw_bold mb_14 font_family_spartan">
                                <span class="count-text font_family_jost" data-speed="2500" data-stop="230">0</span>
                            </div>
                            <p class="p_relative d_block fs_16 font_family_poppins color_black">{{ trans('home.message_22') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 fw_bold mb_14 font_family_spartan">
                                <span class="count-text font_family_jost" data-speed="2500" data-stop="35">0</span>
                            </div>
                            <p class="p_relative d_block fs_16 font_family_poppins color_black">{{ trans('home.message_24') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="counter-block-one wow slideInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <div class="count-outer count-box p_relative d_block fs_70 lh_70 fw_bold mb_14 font_family_spartan">
                                <span class="count-text font_family_jost" data-speed="2500" data-stop="8">0</span>
                            </div>
                            <p class="p_relative d_block fs_16 font_family_poppins color_black">{{ trans('home.message_23') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section -->
    <!-- funfact-seven end -->

    <!-- project-six ---------- BLOGS --------------- -->
    <section class="project-six p_relative sec-pad" id="blog">
        <div class="auto-container">
            <div class="sec-title-nine p_relative d_block mb_50 centred">
                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">
                    BLOG
                </h6>
                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('blog.ultimate_blogs') }}</h2>
            </div>
            <div class="row clearfix">
                <?php
                $blogModel = new \App\Models\Blog();
                ?>
                @foreach ($blogModel->where('status', 'active')->take(6)->orderBy('id', 'DESC')->get() as $key => $value)
                <div class="col-lg-4 col-md-6 col-sm-12 project-block">
                    <div class="project-block-five wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block b_radius_5"><img src="{{ '/storage/'.$value->photo }}" alt=""></figure>
                                <div class="link p_absolute tran_5"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}" class="w_60 h_60 lh_60 centred color_black p_relative d_iblock fs_16"><i class="icon-4"></i></a></div>
                            </div>
                            <div class="lower-content p_relative pt_25 pb_40">
                                <h4 class="d_block fs_20 lh_30 fw_sbold font_family_jost mb_4"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}" class="d_iblock p_relative color_black">{{ (config('app.locale')=='es')?$value->title:$value->title_en }}</a></h4>
                                <!--p class="d_block fs_16 font_family_poppins">{{ (config('app.locale')=='es')?$value->text:$value->text_en }}</p-->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-box pt_30 col-sm-10 offset-sm-1 text-right">
                <a href="{{ url('blog') }}" class="theme-btn theme-btn-two"><span data-text="{{ trans('blog.learn_more') }}">{{ trans('blog.learn_more') }}</span></a>
            </div>
        </div>
    </section>
    <!-- project-six end -->

    <!-- contact-four -->
    <section class="contact-four p_relative sec-pad" id="contacto">
        <div class="shape">
            <div class="shape-1 p_absolute l_0 t_0" style="background-image: url({{ asset('front/img/shape-210.png') }});"></div>
            <div class="shape-2 p_absolute b_0 r_150" style="background-image: url({{ asset('front/img/shape-211.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title-nine p_relative d_block mb_50 centred">
                <h6 class="d_iblock pl_20 pr_20 fs_14 lh_30 b_radius_5 mb_18 fw_medium font_family_poppins">
                    {{ trans('contact.message_6') }}
                </h6>
                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('contact.message_1') }}</h2>
            </div>
            <div class="row clearfix">
                <div class="col-md-8 offset-md-2 form-column">
                    <div class="form-inner p_relative ml_40 pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                        <div class="text p_relative d_block mb_35">
                            <h3 class="d_block fs_30 lh_40 fw_bold">{{ trans('contact.message_7') }}</h3>
                        </div>
                        <form method="post" action="{{ url('contact') }}" id="contact-form">
                            <div class="row clearfix">
                                @csrf
                                @if (session()->has('form_success'))
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="alert alert-success alert-lng">{{ session()->get('form_success') }}</div>
                                </div>
                                @endif
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" placeholder="{{ trans('contact.message_8') }}" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="{{ trans('contact.message_9') }}" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" required="" placeholder="{{ trans('contact.message_10') }}">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" required="" placeholder="{{ trans('contact.message_11') }}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="{{ trans('contact.message_12') }}"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn theme-btn-five mr_25" type="submit" name="submit-form">{{ trans('contact.message_13') }} <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-four end -->
@endsection
