
<!DOCTYPE html>
<html>
<head>
    <title> Inicio Sesi&oacute;n | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo1.ico') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrapValidator.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/login1.css') }}"/>
</head>
<body>
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
        <img src="{{ asset('assets/img/loader.gif') }}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 login_top_bottom">
            <div class="row">
                <div class="col-lg-5  col-md-8  col-sm-12 mx-auto">
                    <div class="login_logo login_border_radius1 bg-primary">
                        <h3 class="text-center"><br>    
                            <img src="{{ asset('assets/img/logow2.png') }}" alt="Talenter IT Logo"><br/><span class="text-white">
                                Iniciar Sesi&oacute;n</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form id="login_validator" method="POST" class="login_validator">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="col-form-label"> Email</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control form-control-md" id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label">Contrase&ntilde;a</label>
                                <div class="input-group input-group-prepend">
                                    <span class="input-group-text border-right-0 rounded-left addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password" name="password" placeholder="Contrase&ntilde;a">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" value="Iniciar Sesi&oacute;n" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/login1.js') }}"></script>
</body>

</html>
