@extends('front.layout')

@section('content')





    <!-- faq-page-section -->
    <section class="faq-page-section faq-page-2 p_relative pt_100 pb_100">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-side">

                            <div class="col-lg-12 form-column mb_35">


                                <div class="form-inner p_relative pt_30 pr_30 pb_30 pl_30 b_radius_10 b_shadow_6">

                                    <div class="row datos-oportunidad">
                                        <div class="col-sm-2">
                                            <?php if(!$o->confidential){ ?><img src="{{ '/storage/'.$o->logo }}" class="" alt=""><?php }else{ ?><img src="{{ asset('front/img/default.jpg') }}" class="" alt=""><?php } ?>
                                        </div>

                                        <div class="col-sm-8">
                                            <h3 class="titulo uppercase">{{ (config('app.locale')=='es')?$o->title:$o->title_en }}</h3>
                                        </div>

                                        <div class="col-sm-2 abierto abierto-single" <?php echo $o->public_statuses->color ?>>
                                            <i class="{{ $o->public_statuses->icon }} pt_25" <?php echo $o->public_statuses->color ?>></i><br>
                                            {{ (config('app.locale')=='es')?$o->public_statuses->name:$o->public_statuses->name_en }}</div>


                                        <div class="col-sm-12 borde-superior">
                                            <div class="row">

                                                <div class="col-sm-3 item"><strong>{{ trans('opportunity.category') }}:</strong><br> {{ (config('app.locale')=='es')?$o->category->name:$o->category->name_en }}</div>
                                                <div class="col-sm-3 item"><strong>{{ trans('opportunity.company') }}:</strong><br> {{ ($o->confidential)?trans('opportunity.confidential'):((config('app.locale')=='es')?$o->company:$o->company_en) }}</div>
                                                <div class="col-sm-3 item"><strong>{{ trans('opportunity.location') }}:</strong><br> {{ (config('app.locale')=='es')?$o->location:$o->location_en }}</div>
                                                <div class="col-sm-3 item"><strong>REF:</strong><br> {{ $o->id }}</div>
                                            </div>
                                        </div>

                                        </div>
                                    </div>




                                    <div class="form-inner p_relative pt_30 pr_30 pb_30 pl_30">


                    <div class="faq-content">
                        <div class="content_block_five">
                            <div class="content-box p_relative d_block">
                                <ul class="accordion-box">
                                    <li class="accordion block active-block p_relative d_block mb_30">
                                        <div class="acc-btn active p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                            <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                            <h4 class="p_relative d_block fs_20 lh_30 fw_medium">{{ trans('opportunity.description') }}</h4>
                                        </div>
                                        <div class="acc-content current p_relative pt_25 pr_50 pl_30">
                                            <div class="text p_relative d_block">
                                                <?php echo (config('app.locale')=='es')?$o->description:$o->description_en ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block p_relative d_block mb_30">
                                        <div class="acc-btn p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                            <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                            <h4 class="p_relative d_block fs_20 lh_30 fw_medium">{{ trans('opportunity.requirements') }}</h4>
                                        </div>
                                        <div class="acc-content p_relative pt_25 pr_50 pl_30">
                                            <?php echo (config('app.locale')=='es')?$o->requirements:$o->requirements_en ?>
                                        </div>
                                    </li>
                                    <li class="accordion block p_relative d_block mb_30">
                                        <div class="acc-btn p_relative d_block tran_5 pt_16 pr_80 pb_16 pl_30">
                                            <div class="icon-outer p_absolute fs_10 tran_5 z_1"><i class="icon-29"></i></div>
                                            <h4 class="p_relative d_block fs_20 lh_30 fw_medium">{{ trans('opportunity.offered') }}</h4>
                                        </div>
                                        <div class="acc-content p_relative pt_25 pr_50 pl_30">
                                            <?php echo (config('app.locale')=='es')?$o->offered:$o->offered_en ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>








                </div>


                <!-- compartir -->

            <div class="blog-details-content p_relative d_block mt_100">
                <div class="row clearfix">
                    <div class="col-sm-12 big-column">
                        <div class="post-share-option clearfix p_relative d_block pt_35 pb_35 mb_70">
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-625705d5de29eee0"></script>

                                <center>
                                <h6 class="fs_16 fw_medium lh_40 text-center">{{ trans('blog.share') }}</h6>
                                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                <div class="addthis_inline_share_toolbox"></div>
                                </center>

                            <!--ul class="social-list clearfix pull-right">
                                <li class="p_relative pull-left mr_20"><h6 class="fs_16 fw_medium lh_40">{{ trans('blog.share') }}</h6></li>
                                <li class="p_relative pull-left mr_10"><a href="javascript:void(0);" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="p_relative pull-left mr_10"><a href="javascript:void(0);" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-twitter"></i></a></li>
                                <li class="p_relative pull-left"><a href="javascript:void(0);" class="p_relative d_iblock fs_14 lh_20 font_family_poppins b_radius_50 w_40 h_40 lh_40 centred"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul-->
                        </div>
                    </div>
                </div>
            </div>

    <!-- compartir -->


                </div>




</div>


                <div class="col-lg-5 form-column">
                    <div class="form-inner p_relative pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                        <div class="text p_relative d_block mb_35">
                            <h3 class="d_block fs_30 lh_40 fw_bold uppercase azul_talenter">{{ trans('opportunity.apply') }}</h3>
                        </div>
                        <form method="post" id="contact-form" enctype="multipart/form-data">
                            <div class="row clearfix">
                                @csrf
                                @if (session()->has('form_success'))
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <div class="alert alert-success alert-lng">{{ session()->get('form_success') }}</div>
                                    </div>
                                @endif
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="{{ trans('contact.message_8') }}*" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="phone" class="form-control" required="" placeholder="{{ trans('contact.message_10') }}*" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="currency" id="currency" required>
                                                <option value="Dolares"> USD </option>
                                                <option value="Pesos"> $ </option>
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" step="0.00" name="salary" class="form-control" required="" placeholder="{{ trans('contact.message_14') }}*" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="linkedin" class="form-control" placeholder="Linkedin">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label for="cv">CV</label>
                                    <input type="file" name="cv" class="form-control" placeholder="CV">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">{{ trans('opportunity.apply') }} <i class="icon-4"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-page-section end -->











@endsection


