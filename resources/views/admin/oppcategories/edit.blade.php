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
                            @include($controller.'.form',['modo' => 'editar'])
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
