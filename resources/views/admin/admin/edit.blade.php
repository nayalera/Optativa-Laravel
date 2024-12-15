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
                                <input type="text" name="name" class="form-control" value="{{ old('name', $o->name) }}" placeholder="Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $o->email) }}" placeholder="Correo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Contrase&ntilde;a</label>
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="Contrase&ntilde;a">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="photo">Imagen</label>
                                <input type="file" name="photo" accept="image/jpeg,image/png" class="form-control">
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
