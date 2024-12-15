@extends('admin.layout')

@section('content')

    <div class="col-12 py-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Buscar Por Oportunidades</h4>
            </div>
            <div class="card-body">
                <form method="POST" class="form-material m-t-40 row" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group col-md-6">
                        <?php $t_tag = 'Oportunidad'; ?>
                        <?php $t_att = 'opportunity_id'; ?>
                        <label for="{{ $t_att }}">{{ $t_tag }}</label>
                        <select name="{{$t_att}}" class="form-control chzn-select" required>
                            <option value="" disabled selected>--Seleccione--</option>
                            <?php $fn_all = DB::table('opportunity')->orderBy('id', 'DESC')->get(); ?>
                            <?php foreach($fn_all as $fnrow){ ?>
                            <option value="<?php echo $fnrow->id; ?>" <?php echo (isset($o->$t_att) AND $o->$t_att == $fnrow->id)?'selected':''; ?>><?php echo $fnrow->title; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-search"></i> Buscar</button>
                        <input type="reset" class="btn btn-secondary" value="Cancelar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header bg-black">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo url($controller.'/add') ?>" class="btn btn-primary mt-3"> <i class="fa fa-plus"></i> Agregar</a>
                        <a href="javascript:void(0);" id="btnExport" class="btn btn-secondary mt-3"> <i class="fa fa-plus"></i> Exportar Tabla</a>
                        <?php if(session()->has(config('app.form_success'))){ ?>
                        <div class="alert alert-success alert-lng col-12 my-2">
                            <?php echo session()->get(config('app.form_success')) ?>
                        </div>
                        <?php } ?>
                        <div class="table-responsive m-t-35">
                            <?php if(count($o_all) > 0){ ?>
                            <table id="table-export" class="table table-lng">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Linkedin</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($o_all as $key => $value){ ?>
                                        <tr>
                                            <td><?php echo $key+1 ?></td>
                                            <td><?php echo $value->name ?></td>
                                            <td><?php echo $value->email ?></td>
                                            <td><?php echo $value->phone ?></td>
                                            <td><?php echo $value->linkedin ?></td>
                                            <td><?php echo $value->status ?></td>
                                            <td>
                                                <a href="<?php echo url($controller.'/edit/'.$value->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"> <i class="fa fa-pencil"></i> </a>
                                                <a href="<?php echo url($controller.'/remove/'.$value->id); ?>" onclick="return confirm('Desea eliminar este <?php echo $objName; ?>?')" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"> <i class="fa fa-trash-o"></i> </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php }else{ ?>
                                <div class="alert alert-warning alert-lng">Lo sentimos, no hay registros en la plataforma</div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-down')
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> --}}
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script>
        $('#btnExport').click(function(e){
            $("#table-export").table2excel({
                exclude: ".excludeThisClass",
                name: "Aplicantes",
                filename: "aplicantes.xls", // do include extension
                preserveColors: false // set to true if you want background colors and font colors preserved
            });
        });
    </script>
@endsection
