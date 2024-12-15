@extends('front.layout')

@section('content')
    <!-- Page Title -->
    <section class="page-title about-page-5 style-two p_relative centred">
        <div class="pattern-layer">
            <div class="shape-1 p_absolute l_120 t_120 rotate-me" style="background-image: url({{ asset('front/img/shape-176.png') }});"></div>
            <div class="shape-2 p_absolute t_180 r_170 float-bob-y" style="background-image: url({{ asset('front/img/shape-56.png') }});"></div>
            <div class="shape-3 p_absolute l_0 b_0" style="background-image: url({{ asset('front/img/shape-189.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">{{ trans('opportunity.opportunities') }}</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte mr_20"><a href="{{ url('/') }}">{{ config('app.name') }}</a></li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inte">{{ trans('opportunity.opportunities') }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- faq-page-section -->
    <section class="p_relative contact-five">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <div class="faq-content">
                        <div class="content_block_five">
                            <div class="content-box p_relative d_block">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-column">
                                    <div class="form-inner p_relative pt_45 pr_50 pb_50 pl_50 b_radius_10 b_shadow_6">
                                        <div class="text p_relative d_block mb_35">
                                            <h2 class="d_block fs_30 lh_40 fw_bold text-center">{{ trans('opportunity.search') }}</h2>
                                        </div>
                                        <form method="post" id="contact-form">
                                            <div class="row clearfix">
                                                @csrf
                                                <div class="col-md-3 offset-md-2 form-group">
                                                    <input type="text" name="title" class="form-control" value="{{ !empty($key_word)?$key_word:'' }}" placeholder="{{ trans('opportunity.key_words') }}">
                                                </div>
                                                <div class="col-md-3 form-group">
                                                    <select name="opportunityCategory_id" id="opportunityCategory_id" class="form-control">
                                                        <option value="">--{{ trans('opportunity.select_category') }}--</option>
                                                        <?php
                                                            $categoryModel = new \App\Models\OpportunityCategories();
                                                            $categories = $categoryModel->all();
                                                        ?>
                                                        @foreach ($categories as $key => $value)
                                                            <option {{ !empty($category_id)?(($category_id==$value->id)?'selected':''):'' }} value="{{ $value->id }}">{{ (config('app.locale')=='es')?$value->name:$value->name_en }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-2 form-group message-btn">
                                                    <button class="theme-btn theme-btn-eight" type="submit" name="submit-form">{{ trans('opportunity.search') }} <i class="icon-4"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq-page-section end -->

    <!-- news-12 -->
    <section class="news-12 p_relative sec-pad">
        <div class="auto-container">
            <div class="sec-title-nine p_relative d_block mb_50 centred">
                <h2 class="d_block fs_45 lh_55 fw_bold font_family_jost">{{ trans('opportunity.list_opportunities') }}</h2>
            </div>
            <?php if(!$isButton){ ?>
                <h4 class="text-center">({{ $cantResult }}) Resultados de la búsqueda para: {{ $key_word }}</h4>
            <?php } ?>
            <div class="row clearfix" id="content-opportunity">
                @foreach ($opportunities as $key => $value)
                    <div class="col-sm-10 offset-sm-1 mt_20">

    <div class="form-inner p_relativeb_radius_10 b_shadow_6">


        <div class="datos-oportunidad news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">

            <div class="inner-box">
                <div class="pattern-layer" style="background-image: url({{ asset('front/img/shape-60.png') }});"></div>
                <div class="row pt_30 pr_30 pb_30 pl_30 ">
                    <div class="col-sm-2">
                        <figure class="image b_radius_10"><a href="{{ url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}">
                            <?php if(!$value->confidential){ ?><img src="{{ '/storage/'.$value->logo }}" class="" alt=""><?php }else{ ?><img src="{{ asset('front/img/default.jpg') }}" class="" alt=""><?php } ?></a>
                        </figure>
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
                        <div class="btn-box pb_30">
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
            @if ($isButton)
                <div class="pagination-wrapper p_relative text-center d_block pt_40">
                    <ul class="pagination clearfix">
                        <div class="btn-box" data-cant="15" data-category="<?php echo $category_id ?>" id="showMoreOpportunity">
                            <a href="javascript:void(0);" class="theme-btn theme-btn-six">{{ trans('opportunity.mas_oportunidades') }}</a>
                        </div>
                    </ul>
                </div>
            @endif
        </div>
    </section>
    <!-- news-12 end -->
@endsection

@section('script-down')
    <script>
        $(document).ready(function(e){
            if($('#showMoreOpportunity').length){
                let cant = $('#showMoreOpportunity').data('cant');
                let category_id = $('#showMoreOpportunity').data('category');
                if(category_id=='all'){
                    category_id = '';
                }
                $('#showMoreOpportunity').click(function(e){
                    $.get('/busquedas-activas/get_opportunity/'+cant+'/'+category_id, function(data){
                        if(data=='error'){
                            alert('Ha ocurrido un error al realizar la petición');
                        }else if(data == 'null'){
                            $('#content-opportunity').append('<div id="alert-showMoreOpportunity" class="alert alert-danger m-5  alert-dismissible fade show margen-alerta">No hay más oportunidades en la base de datos<div>');
                            setTimeout(() => {
                                $('#alert-showMoreOpportunity').remove();
                            }, 6000);
                            $('#showMoreOpportunity').remove();
                        }else{
                            $('#content-opportunity').append(data);
                            cant += 15;
                        }
                    });
                });
            }
        });
    </script>
@endsection
