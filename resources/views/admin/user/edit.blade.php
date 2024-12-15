@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" class="form-material m-t-40 row" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <?php if(session()->has(config('app.form_errors'))){ ?>
                                <div class="alert alert-success alert-lng col-12">
                                    <?php echo session()->get(config('app.form_errors')) ?>
                                </div>
                            <?php } ?>
                            <?php if(session()->has(config('app.form_success'))){ ?>
                                <div class="alert alert-success alert-lng col-12">
                                    <?php echo session()->get(config('app.form_success')) ?>
                                </div>
                            <?php } ?>
                            <div class="form-group col-md-6">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $o->name) }}" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastname">Apellidos</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname', $o->lastname) }}" placeholder="Apellidos">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $o->email) }}" placeholder="Correo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Contrase&ntilde;a</label>
                                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" placeholder="Contrase&ntilde;a">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Celular</label>
                                <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone', $o->phone) }}" placeholder="Celular">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="country">Pa&iacute;s</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{ old('country', $o->country) }}" placeholder="Pa&iacute;s">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="client">Cliente</label>
                                <input type="text" name="client" id="client" class="form-control" value="{{ old('client', $o->client) }}" placeholder="Cliente">
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn btn-warning"> <i class="fa fa-pencil"></i> Actualizar</button>
                                <a href="{{ url($controller) }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
