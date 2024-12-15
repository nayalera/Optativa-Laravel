@extends('front.layout')

@section('content')
    <!-- google-map-section -->
    <section class="google-map-section">
        <div class="map-inner">
            <div
                class="google-map p_relative d_block"
                id="contact-google-map"
                data-map-lat="40.712776"
                data-map-lng="-74.005974"
                data-icon-path="assets/images/icons/map-marker-2.png"
                data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                    "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                }'>

            </div>
        </div>
    </section>
    <!-- google-map-section end -->


    <!-- contact-four -->
    <section class="contact-four p_relative sec-pad">
        <div class="shape">
            <div class="shape-1 p_absolute l_0 t_0" style="background-image: url({{ asset('front/img/shape-210.png') }});"></div>
            <div class="shape-2 p_absolute b_0 r_150" style="background-image: url({{ asset('front/img/shape-211.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-inner">
                        <div class="sec-title p_relative d_block mb_40">
                            <h5 class="d_block fs_17 lh_20 fw_sbold uppercase mb_17">{{ trans('contact.message_1') }}</h5>
                            <h3 class="d_block fs_30 lh_40 fw_bold">{{ trans('contact.message_2') }} <br>{{ trans('contact.message_3') }}</h3>
                        </div>
                        <ul class="info-list clearfix">
                            <li class="p_relative d_block pl_100 pb_18 mb_25">
                                <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-180"></i></div>
                                    <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-133.png') }}" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">{{ trans('contact.message_4') }}</h4>
                                <p class="font_family_poppins">{{ trans('contact.direction_short') }}</p>
                            </li>
                            <li class="p_relative d_block pl_100 pb_18 mb_25">
                                <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-181"></i></div>
                                    <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-134.png') }}" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">{{ trans('contact.message_5') }}</h4>
                                <p class="font_family_poppins"><a href="mailto:{{ config('app.email_contact') }}">{{ config('app.email_contact') }}</a></p>
                            </li>
                            <li class="p_relative d_block pl_100 pb_18">
                                <div class="icon-box p_absolute l_0 t_0 d_iblock w_80 h_80 lh_80 b_radius_50 text-center fs_45 z_1 mb_25 tran_5">
                                    <div class="icon p_relative d_iblock"><i class="icon-182"></i></div>
                                    <div class="icon-img hidden-icon"><img src="{{ asset('front/img/hid-icon-135.png') }}" alt=""></div>
                                </div>
                                <h4 class="d_block fs_20 lh_30 fw_sbold mb_7">{{ trans('contact.message_6') }}</h4>
                                <p class="font_family_poppins"><a href="tel:{{ config('app.cell_contact') }}">{{ config('app.cell_contact') }}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                    <div class="form-inner p_relative ml_40 pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                        <div class="text p_relative d_block mb_35">
                            <h3 class="d_block fs_30 lh_40 fw_bold">{{ trans('contact.message_7') }}</h3>
                        </div>
                        <form method="post" id="contact-form">
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
                                    <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">{{ trans('contact.message_13') }} <i class="icon-4"></i></button>
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
