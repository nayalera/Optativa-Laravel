@extends('admin.layout')

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-black">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo url($controller.'/add') ?>" class="btn btn-primary mt-3"> <i class="fa fa-plus"></i> Agregar</a>
                        <?php if(session()->has(config('app.form_success'))){ ?>
                        <div class="alert alert-success alert-lng col-12 my-2">
                            <?php echo session()->get(config('app.form_success')) ?>
                        </div>
                        <?php } ?>
                        <div class="table-responsive m-t-35">
                            <?php if(count($o_all) > 0){ ?>
                            <table class="table table-lng">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Título</th>
                                        <th>Título EN</th>
                                        <th>Categoría</th>
                                        <th>Estado público</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($o_all as $key => $value){ ?>
                                        <tr>
                                            <td><?php echo $key+1 ?></td>
                                            <td><?php echo $value->title ?></td>
                                            <td><?php echo $value->title_en ?></td>
											<?php $o_item = DB::table('opportunitycategories')->where(['id' => $value->opportunityCategory_id])->get()->first(); ?>
                                            <td><?= !empty($o_item->id)?$o_item->name:'No asignado' ?></td>
                                            <td><?php echo $value->public_statuses->name ?></td>
                                            <td><?php echo $value->status ?></td>
                                            <td>
                                                <a href="<?php echo url($controller.'/edit/'.$value->id); ?>" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"> <i class="fa fa-pencil"></i> </a>
                                                <a href="<?php echo url($controller.'/remove/'.$value->id); ?>" onclick="return confirm('Desea eliminar este <?php echo $objName; ?>?')" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"> <i class="fa fa-trash-o"></i> </a>
                                                <a href="<?php echo url($controller.'/change/'.$value->id); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo ($value->status=='active')?'Inactivar':'Activar'; ?>" class="btn btn-secondary"> <i class="fa fa-<?php echo ($value->status=='active')?'lock':'unlock'; ?>"></i> </a>
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
