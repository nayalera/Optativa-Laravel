@extends('front.layout')

@section('content')
    <!-- Page Title -->
    <section class="page-title blog-details p_relative centred">
        <div class="bg-layer p_absolute l_0 parallax_none parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ '/storage/'.$o->photo }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <div class="post-title p_relative d_block mb_60">
                    <div class="category p_relative d_block mb_7"><a href="javascript:void(0);" class="d_iblock fs_16 font_family_poppins uppercase">{{ (config('app.locale')=='es')?$o->category->name:$o->category->name_en }}</a></div>
                    <h2 class="d_block fs_40 lh_50 fw_bold mb_7">{{ (config('app.locale')=='es')?$o->title:$o->title_en }}</h2>
                    <ul class="post-info clearfix p_relative d_block">
                        <?php $date = new DateTime($o->created_at); ?>
                        <li class="p_relative d_iblock mr_30 fs_16">{{ $date->format('M d, Y') }}</li>
                        {{-- <li class="p_relative d_iblock fs_16">2 Comments</li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details-2 blog-details p_relative pt_140 pb_150">
        <div class="auto-container">
            <div class="blog-details-content p_relative d_block mr_20">
                <div class="blog-post p_relative d_block mb_60">
                    <div class="content-one p_relative d_block mb_60">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
                                <div class="text">
                                    <?php echo (config('app.locale')=='es')?$o->text:$o->text_en; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2 big-column">
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
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection

@section('script-down')
    <script type="text/javascript" src="<?php echo asset('assets/plugins/ckeditor/build/ckeditor.js'); ?>"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.editor_1' ), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'fontColor',
                    'fontSize',
                    'fontBackgroundColor',
                    'fontFamily',
                    'alignment',
                    'link',
                    'removeFormat',
                    '|',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'findAndReplace'
                ]
            },
            language: 'es',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            // cloudServices: {
            //     tokenUrl: 'https://82144.cke-cs.com/token/dev/6c838dbdef6bcd5aa05e551deefe4be20de15137469571376d3e4257a6bd',
            //     uploadUrl: 'https://82144.cke-cs.com/easyimage/upload/'
            // },
                licenseKey: '',
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: v4lrj7s6qutb-42dx32drb1oe' );
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.editor_2' ), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'fontColor',
                    'fontSize',
                    'fontBackgroundColor',
                    'fontFamily',
                    'alignment',
                    'link',
                    'removeFormat',
                    '|',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'findAndReplace'
                ]
            },
            language: 'es',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            // cloudServices: {
            //     tokenUrl: 'https://82144.cke-cs.com/token/dev/6c838dbdef6bcd5aa05e551deefe4be20de15137469571376d3e4257a6bd',
            //     uploadUrl: 'https://82144.cke-cs.com/easyimage/upload/'
            // },
                licenseKey: '',
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( error => {
                console.error( 'Oops, something went wrong!' );
                console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
                console.warn( 'Build id: v4lrj7s6qutb-42dx32drb1oe' );
                console.error( error );
            } );
    </script>
@endsection
