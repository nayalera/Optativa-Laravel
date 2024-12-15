@extends('front.layout')

@section('content')
    <!-- Page Title -->
    <section class="page-title p_relative centred">
        <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('front/img/page-title-5.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1 class="d_block fs_60 lh_70 fw_bold mb_10">{{ $objNames }}</h1>
                <ul class="bread-crumb p_relative d_block mb_8 clearfix">
                    <li class="p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter mr_20"><a href="{{ url('/') }}">{{ config('app.name') }}</a></li>
                    <li class="current p_relative d_iblock fs_16 lh_25 fw_sbold font_family_inter">{{ $title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-standard-2 blog-list p_relative sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-8 col-sm-8 content-side">
                    <div class="blog-list-content p_relative d_block mr_20" id="content-blogs">
                        @foreach ($blogs as $key => $value)
                            <?php $date = new DateTime($value->created_at) ?>
                            <div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_shadow_6 mb_30">
                                    <div class="image-box p_relative d_block p_absolute l_0 t_0">
                                        <figure class="image p_relative d_block"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}"><img src="{{ '/storage/'.$value->photo }}" alt=""></a></figure>
                                        <div class="post-date-two p_absolute l_30 t_30 w_60 centred pt_10 pb_10 b_shadow_6"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">{{ $date->format('d') }} <span class="d_block fs_14">{{ $date->format('M') }}</span></h4></div>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_30 pr_55 pb_40 pl_40">
                                        <div class="category p_relative d_block mb_6"><a href="{{ url('blog/category/'.$value->category->id) }}" class="d_iblock fs_16 font_family_poppins uppercase">{{ ((config('app.locale')=='es')?$value->category->name:$value->category->name_en) }}</a></div>
                                        <h4 class="d_block fs_24 lh_30 mb_5"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}">{{ ((config('app.locale')=='es')?$value->title:$value->title_en) }}</a></h4>
                                        <ul class="post-info clearfix p_relative d_block mb_13">
                                            <li class="p_relative d_iblock float_left mr_30 fs_16 font_family_poppins"><a href="{{ url('blog/category/'.$value->category->id) }}">{{ ((config('app.locale')=='es')?$value->category->name:$value->category->name_en) }}</a></li>
                                            {{-- <li class="p_relative d_iblock float_left fs_16 font_family_poppins">3 Comments</li> --}}
                                        </ul>
                                        <p class="d_block mb_25"><?php echo substr(((config('app.locale')=='es')?$value->text:$value->text_en), 0, 70); ?>...</p>
                                        <div class="btn-box">
                                            <a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}" class="theme-btn theme-btn-six">{{ trans('blog.learn_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    
                    <!-- comienza sidebar -->
                    
                                    <div class="col-lg-4 col-md-4 col-sm-4 sidebar-side">
                    <div class="blog-sidebar p_relative d_block ml_20 b_shadow_6 b_radius_10">
                        <div class="sidebar-widget category-widget p_relative d_block pt_35 pr_40 pb_25 pl_40 b_radius_10">
                            <div class="widget-title p_relative d_block mb_25">
                                <h3 class="d_block fs_24 lh_30">{{ trans('blog.categories') }}</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <?php
                                        $cant_total = 0;
                                        $blogModel = new \App\Models\Blog();
                                    ?>
                                    @foreach ($blogcategories as $key => $value)
                                        <?php
                                            $cant = $blogModel->where('category_id', $value->id)->where('status', 'active')->count();
                                            $cant_total += $cant;
                                        ?>
                                        <li class="p_relative d_block mb_11"><a href="{{ url('blog/category/'.$value->id) }}" class="p_relative d_iblock fs_16 font_family_poppins color_black">{{ ((config('app.locale')=='es')?$value->name:$value->name_en) }} ({{ $cant }})</a></li>
                                    @endforeach
                                    <li class="p_relative d_block"><a href="{{ url('blog') }}" class="p_relative d_iblock fs_16 font_family_poppins color_black">General ({{ $cant_total }})</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget p_relative d_block pt_35 pr_40 pb_10 pl_40 b_radius_10">
                            <div class="widget-title p_relative d_block mb_30">
                                <h3 class="d_block fs_24 lh_30">{{ trans('blog.recent_posts') }}</h3>
                            </div>
                            <div class="post-inner">
                                @foreach ($blogs_recents as $key => $value)
                                    <div class="post p_relative d_block pl_100 pb_20 mb_16">
                                        <figure class="post-thumb p_absolute l_0 t_4 w_80 b_radius_5"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}"><img src="{{ 'storage/'.$value->photo }}" alt=""></a></figure>
                                        <h5 class="d_block fs_18 lh_24 mb_7"><a href="{{ url('blog/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)) }}" class="d_iblock color_black">{{ ((config('app.locale')=='es')?$value->title:$value->title_en) }}</a></h5>
                                        <?php $date = new DateTime($value->created_at);?>
                                        <span class="post-date p_relative d_block fs_16 font_family_poppins">{{ $date->format('M d, Y') }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                    
                    
                    
                    <div class="pagination-wrapper p_relative d_block pt_40">
                        <ul class="pagination clearfix">
                            <div class="btn-box" data-cant="5" data-category="<?php echo $category_id ?>" id="showMoreBlogs">
                                <a href="javascript:void(0);" class="theme-btn theme-btn-six">{{ trans('blog.learn_more') }}</a>
                            </div>
                        </ul>
                    </div>
                

            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection

@section('script-down')
    <script>
        $(document).ready(function(e){
            if($('#showMoreBlogs').length){
                let cant = $('#showMoreBlogs').data('cant');
                let category_id = $('#showMoreBlogs').data('category');
                if(category_id=='all'){
                    category_id = '';
                }
                $('#showMoreBlogs').click(function(e){
                    $.get('/blog/get_blogs/'+cant+'/'+category_id, function(data){
                        if(data=='error'){
                            alert('Ha ocurrido un error al realizar la petición');
                        }else if(data == 'null'){
                            $('#content-blogs').append('<div id="alert-showMoreBlogs" class="alert alert-danger">No hay más blogs en la base de datos<div>');
                            setTimeout(() => {
                                $('#alert-showMoreBlogs').remove();
                            }, 6000);
                            $('#showMoreBlogs').remove();
                        }else{
                            $('#content-blogs').append(data);
                            cant += 5;
                        }
                    });
                });
            }
        });
    </script>
@endsection
