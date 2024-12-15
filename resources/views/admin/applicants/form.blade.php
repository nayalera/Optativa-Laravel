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
	<?php $t_tag = 'Nombre'; ?>
	<?php $t_att = 'name'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Correo'; ?>
	<?php $t_att = 'email'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Teléfono'; ?>
	<?php $t_att = 'phone'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Linkedin'; ?>
	<?php $t_att = 'linkedin'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
