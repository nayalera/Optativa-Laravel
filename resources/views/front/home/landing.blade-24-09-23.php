<!doctype html>
<html lang="en">

<head>
  <title>Talenter - Especialistas en búsqueda
de talento en LATAM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;600;700;800&display=swap" rel="stylesheet">
</head>

<style>
body{
    font-family: 'Montserrat', sans-serif;
}
.bg-talenter{
    background: url('/front/images/bg.png');
    background-size: cover;
    width: 100%;
    height: 100vh;
}


a{
    color: white;
    text-decoration: none;
}
a:hover{
    color: #188E8D;
}
h1{
    font-size: 72px;
    line-height:68px;
    font-weight: bolder;
}

h3{
    font-weight: bolder;
}

.circulo{
    background: url('/front/images/bg-circulo.png');
    background-size: cover;
    background-position: top;
    padding: 50px;
    text-align: center;
    /*position: fixed;*/
    bottom: 0;
}

@media only screen and (max-width: 768px) {
h1{
    font-size: 48px;
    line-height:44px;
    font-weight: bolder;
}

}

</style>

<body class="bg-talenter">
    <div class="container">
    <div class="row">
        <div class="col-6 col-sm-9 mt-sm-5 pt-sm-4 pt-5"><a href="https://www.talenterit.com/">IR A SITIO WEB</a></div>
        <div class="col-6 col-sm-3"><img src="{{ asset('front/images/logo.png') }}" alt="Talenter IT" class="img-fluid"></div>
    </div>


        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="text-white">Especialistas en búsqueda<br>de talento en LATAM</h1>
                <h3 class="text-white mt-5">Sofware <br>
                Infraestructura <br>
                IT <br>
                Telecomunicaciones</h3>
            </div>
            
           <div class="col-12 mt-2">
                <div class="circulo w-100">
                    <button type="button" class="btn btn-light rounded-pill btn-lg" data-bs-toggle="modal" data-bs-target="#contactModal">
                        <strong>CONTACTANOS</strong>
                    </button>
                </div>
            </div>

    </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  {{-- Modals --}}
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="contactModalLabel">Contactanos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('contact') }}" method="post" onsubmit="return false;">
                        <div class="col-sm-12 my-1 form-group">
                            <input type="text" name="name" id="name" placeholder="Nombre" class="form-control" required="">
                        </div>
                        <div class="col-sm-12 my-1 form-group">
                            <input type="email" name="email" id="email" placeholder="Correo" class="form-control" required="">
                        </div>
                        <div class="col-sm-12 my-1 form-group">
                            <input type="text" name="phone" id="phone" required="" class="form-control" placeholder="Celular">
                        </div>
                        <div class="col-sm-12 my-1 form-group">
                            <input type="text" name="subject" id="subject" required="" class="form-control" placeholder="Asunto">
                        </div>
                        <div class="col-sm-12 my-1 form-group">
                            <textarea name="message" class="form-control" id="message" placeholder="Mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar Mensaje</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('form').submit(function(e){
                e.preventDefault();
                $.post('/api/contact-ajax', {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    subject: $('#subject').val(),
                    message: $('#message').val(),
                }, function(data) {
                    if(data=='ok') {
                        alert('Se ha enviado un correo correctamente');
                    } else {
                        alert('Ha ocurrido un error al enviar el correo');
                    }
                });
            });
        });
    </script>
</body>

</html>
