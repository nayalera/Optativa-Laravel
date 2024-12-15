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
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Nombre'; ?>
	<?php $t_att = 'name_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Descripción'; ?>
	<?php $t_att = 'description'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Descripción'; ?>
	<?php $t_att = 'description_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
