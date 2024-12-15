<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{ $title }} | {{ config('app.name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/img/logo1.ico') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/chosen.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/chartist.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/jquery.circliful.css') }}">
        {{-- <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/index.css') }}"> --}}
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/jquery.inputlimiter.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/jquery.tagsinput.min.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/multi-select.css') }}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/form_elements.css') }}"/>
        <link href="<?php echo url('assets/plugins/datatables/datatables/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/skins/'.$us_log->bgcolor) }}" id="skin_change" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="body">
        <div class="preloader" style=" position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 100000;
            backface-visibility: hidden;
            background: #ffffff;">
            <div class="preloader_img" style="width: 200px;
                height: 200px;
                position: absolute;
                left: 48%;
                top: 48%;
                background-position: center;
                z-index: 999999">
                <img src="{{ asset('assets/img/loader.gif') }}" style=" width: 50px;" alt="loading...">
            </div>
        </div>
        <div id="wrap">
            <div id="top">
                <!-- .navbar -->
                <nav class="navbar navbar-static-top">
                    <div class="container-fluid m-0">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <h4><img src="{{ asset('assets/img/logo1.jpg') }}" class="admin_img" alt="logo"> {{ config('app.name') }}</h4>
                        </a>
                        <div class="menu mr-sm-auto">
                            <span class="toggle-left" id="menu-toggle">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                        <div class="topnav dropdown-menu-right">
                            <div class="btn-group">
                                <div class="user-settings no-bg">
                                    <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                        <img src="<?php echo (!empty($us_log->photo))?('/storage/'.$us_log->photo):'/assets/img/img.jpg'; ?>" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                            alt="avatar"> <strong>{{ $us_log->name; }}</strong>
                                        <span class="fa fa-sort-down white_bg"></span>
                                    </button>
                                    <div class="dropdown-menu admire_admin">
                                        <a class="dropdown-item title" href="javascript:void(0);">
                                            Opciones {{ $us_log->name; }}</a>
                                        <a class="dropdown-item" href="{{ url('admin/profile') }}">
                                            <i class="fa fa-user"></i>
                                            Perfil
                                        </a>
                                        <a class="dropdown-item" href="{{ url('admin/logout') }}"><i class="fa fa-sign-out"></i>
                                            Cerrar Sesi&oacute;n</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </nav>
                <!-- /.navbar -->
                <!-- /.head -->
            </div>
            <!-- /#top -->
            <div class="wrapper">
                <div id="left">
                    <div class="menu_scroll">
                        <div class="left_media">
                            <div class="media user-media">
                                <div class="user-media-toggleHover">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="user-wrapper">
                                    <a class="user-link" href="javascript:void(0);">
                                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                            src="<?php echo (!empty($us_log->photo))?('/storage/'.$us_log->photo):'/assets/img/img.jpg'; ?>">
                                        <p class="user-info menu_hide">Bienvenido {{ $us_log->name }}</p>
                                    </a>
                                </div>
                            </div>
                            <hr/>
                        </div>
                        <ul id="menu">
                            <li class="<?php echo ($active_menu=='home')?'active':''; ?>">
                                <a href="{{ url('admin') }}">
                                    <i class="fa fa-home"></i>
                                    <span class="link-title menu_hide">&nbsp;Dashboard</span>
                                </a>
                            </li>
                            <li class="<?php echo ($active_menu=='applicants')?'active':''; ?>">
                                <a href="{{ url('admin/applicants') }}">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="link-title menu_hide">&nbsp; Candidatos</span>
                                </a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="javascript:void(0);">
                                    {{-- <i class="fa fa-gears"></i> --}}
                                    <span class="link-title menu_hide">&nbsp; Blogs</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li class="<?php echo ($active_menu=='blog')?'active':''; ?>">
                                        <a href="{{ url('admin/blog') }}">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="link-title menu_hide">&nbsp; Blog</span>
                                        </a>
                                    </li>
                                    <li class="<?php echo ($active_menu=='blogcategories')?'active':''; ?>">
                                        <a href="{{ url('admin/blogcategories') }}">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="link-title menu_hide">&nbsp; Categor&iacute;as</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="javascript:void(0);">
                                    {{-- <i class="fa fa-gears"></i> --}}
                                    <span class="link-title menu_hide">&nbsp; Oportunidades</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li class="<?php echo ($active_menu=='opportunity')?'active':''; ?>">
                                        <a href="{{ url('admin/opportunity') }}">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="link-title menu_hide">&nbsp; Oportunidades</span>
                                        </a>
                                    </li>
                                    <li class="<?php echo ($active_menu=='oppcategories')?'active':''; ?>">
                                        <a href="{{ url('admin/oppcategories') }}">
                                            <i class="fa fa-angle-right"></i>
                                            <span class="link-title menu_hide">&nbsp; Categor&iacute;as</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown_menu">
                                <a href="javascript:void(0);">
                                    <i class="fa fa-gears"></i>
                                    <span class="link-title menu_hide">&nbsp; Configuraciones</span>
                                    <span class="fa arrow menu_hide"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ url('admin/admin') }}">
                                            <i class="fa fa-angle-right"></i>
                                            &nbsp; Administradores
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('admin/logout') }}">
                                    <i class="fa fa-sign-out"></i>
                                    <span class="link-title menu_hide">&nbsp;Cerrar Sesi&oacute;n</span>
                                </a>
                            </li>
                        </ul>
                        <!-- /#menu -->
                    </div>
                </div>
                <!-- /#left -->
                <div id="content" class="bg-container">
                    <header class="head">
                        <div class="main-bar">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <h4 class="m-t-5">
                                        <i class="fa fa-{{ $icon }}"></i>
                                        {{ $title }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="outer">
                        @yield('content')
                    </div>
                    <!-- /#content -->
                    <div id="right">
                        <div class="right_content">
                            <div class="well-small dark m-t-15">
                                <div class="row m-0">
                                    <div class="col-lg-12 p-d-0">
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="blue_black_skin.css" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                                            <div class="skin_blue skin_size b_t_r"></div>
                                            <div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="green_black_skin.css" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                                            <div class="skin_green skin_size b_t_r"></div>
                                            <div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="purple_black_skin.css" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                                            <div class="skin_purple skin_size b_t_r"></div>
                                            <div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="orange_black_skin.css" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                                            <div class="skin_orange skin_size b_t_r"></div>
                                            <div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="red_black_skin.css" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                                            <div class="skin_red skin_size b_t_r"></div>
                                            <div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <div class="skinmulti_btn btn-lng-bg" data-bg="mint_black_skin.css" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                                            <div class="skin_mint skin_size b_t_r"></div>
                                            <div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
                                        </div>
                                        <!--</div>-->
                                        <div class="btn-lng-bg skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow"
                                           data-bg="blue_skin.css" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                                        <div class="btn-lng-bg skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow"
                                           data-bg="green_skin.css" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                                        <div class="btn-lng-bg skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow"
                                           data-bg="purple_skin.css" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                                        <div class="btn-lng-bg skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow"
                                           data-bg="orange_skin.css" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                                        <div class="btn-lng-bg skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow"
                                           data-bg="red_skin.css" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                                        <div class="btn-lng-bg skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow"
                                           data-bg="mint_skin.css" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                                    </div>
                                    <div class="col-lg-12 text-center m-t-15">
                                        <button class="btn-lng-bg btn btn-dark button-rounded"
                                               data-bg="black_skin.css" onclick="javascript:loadjscssfile('black_skin.css','css')">Dark
                                        </button>
                                        <button class="btn-lng-bg btn btn-secondary button-rounded default_skin"
                                               data-bg="default.css" onclick="javascript:loadjscssfile('default.css','css')">Default
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- # right side -->
                </div>
                <!-- /#wrap -->
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('assets/js/components.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/chosen.jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/countUp.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.flip.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.sparkline.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.circliful.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.flot.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.flot.resize.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('assets/js/index.js') }}"></script> --}}
        <script type="text/javascript" src="{{ asset('assets/js/chartist.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/chartist-tooltip.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.uniform.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.validVal.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.inputlimiter.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.tagsinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/inputmask.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.inputmask.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/inputmask.date.extensions.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/inputmask.extensions.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.multi-select.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/form.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/form_elements.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
        <script>
            $(document).ready(function(e){
                $('.btn-lng-bg').click(function(e){
                    let bg = $(this).data('bg');
                    $.get('/admin/change_skin/'+bg);
                });

                if($('.alert-lng').length){
                    setTimeout(() => {
                        $('.alert-lng').remove();
                    }, 6000);
                }

                if($('.course_presencial').length){
                    $('.course_presencial').each(function(e){
                        let id = $(this).data('id');
                        if($(this).val() != 0){
                            $('.direction_' + id).css('display', 'block');
                        }else{
                            $('.direction_' + id).css('display', 'none');
                        }
                    });
                    $('.course_presencial').on('change', function(e){
                        let id = $(this).data('id');
                        if($(this).val() != 0){
                            $('.direction_' + id).css('display', 'block');
                        }else{
                            $('.direction_' + id).css('display', 'none');
                        }
                    });
                }

                if($('.btn-show-cid').length){
                    $('.btn-show-cid').click(function(e){
                        let id = $(this).data('id');
                        $.get('/admin/suscription/getPhotos/'+id, function(data){
                            $('#photo_cid').html(data);
                        });
                    });
                }

                if($('.ck-placeholder').length){
                    $('h1.ck-placeholder').css('display', 'none');
                    $('p.ck-placeholder').css('padding', '1em 0');
                }

                if($('.table-lng').length){
                    $('.table-lng').DataTable({"columnDefs": [{ targets: 'no-sort', orderable: false }],"language": {"url": "/assets/plugins/datatables/Spanish.json"}});
                }
            });
        </script>
        <script type="text/javascript" src="<?php echo asset('assets/plugins/ckeditor/build/ckeditor.js'); ?>"></script>
        <script>
            if ($('.editor_1').length) {
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
            }
		</script>
        <script>
            if ($('.editor_2').length) {
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
            }
		</script>
        <script>
            if ($('.editor_3').length) {
                ClassicEditor
				.create( document.querySelector( '.editor_3' ), {
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
            }
		</script>
        <script>
            if ($('.editor_4').length) {
                ClassicEditor
				.create( document.querySelector( '.editor_4' ), {
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
            }
		</script>
        <script>
            if ($('.editor_5').length) {
                ClassicEditor
                .create( document.querySelector( '.editor_5' ), {
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
            }
        </script>
     <script>
            if ($('.editor_6').length) {
                ClassicEditor
                .create( document.querySelector( '.editor_6' ), {
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
            }
        </script>
        @yield('script-down')
    </body>
</html>
