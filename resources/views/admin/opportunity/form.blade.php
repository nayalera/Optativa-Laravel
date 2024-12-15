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
	<?php $t_tag = 'Título'; ?>
	<?php $t_att = 'title'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Título'; ?>
	<?php $t_att = 'title_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Ubicación'; ?>
	<?php $t_att = 'location'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Ubicación'; ?>
	<?php $t_att = 'location_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Slug'; ?>
	<?php $t_att = 'slug'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES) (Opcional)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Slug'; ?>
	<?php $t_att = 'slug_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN) (Opcional)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Empresa'; ?>
	<?php $t_att = 'company'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Empresa'; ?>
	<?php $t_att = 'company_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}">
</div>

<div class="form-group col-md-6">
	<?php $t_tag = 'Descripción'; ?>
	<?php $t_att = 'description'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_1" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Descripción'; ?>
	<?php $t_att = 'description_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_2" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Requerimientos'; ?>
	<?php $t_att = 'requirements'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_3" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Requerimientos'; ?>
	<?php $t_att = 'requirements_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_4" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Ofrecido'; ?>
	<?php $t_att = 'offered'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_5" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Ofrecido'; ?>
	<?php $t_att = 'offered_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_6" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-12" style="border-bottom: 1px solid grey">
    <h3 align="center">Campos Globales</h3>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Correo CRM'; ?>
	<?php $t_att = 'email_crm'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="text" name="{{ $t_att }}" class="form-control" value="{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}" placeholder="{{ $t_tag }}" required>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Categoría'; ?>
	<?php $t_att = 'opportunityCategory_id'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <select name="{{$t_att}}" class="form-control" required>
		<option value="" disabled selected>--Seleccione--</option>
		<?php $fn_all = DB::table('opportunitycategories')->orderBy('id', 'asc')->get(); ?>
		<?php foreach($fn_all as $fnrow){ ?>
		<option value="<?php echo $fnrow->id; ?>" <?php echo (isset($o->$t_att) AND $o->$t_att == $fnrow->id)?'selected':''; ?>><?php echo $fnrow->name; ?></option>
		<?php } ?>
	</select>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Logo'; ?>
	<?php $t_att = 'logo'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="file" name="{{ $t_att }}" accept="image/jpeg,image/png" class="form-control">
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Confidencial'; ?>
	<?php $t_att = 'confidential'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <select type="text" name="{{ $t_att }}" class="form-control">
        <option value="1" {{ isset($o->$t_att)?(($o->$t_att==1)?'selected':''):'' }}>Sí</option>
        <option value="0" {{ isset($o->$t_att)?(($o->$t_att==0)?'selected':''):'selected' }}>No</option>
    </select>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Estado público'; ?>
	<?php $t_att = 'publicStatus'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <select type="text" name="{{ $t_att }}" class="form-control">
        <?php
            $publicStatusModel = new \App\Models\PublicStatus();
            $publicStatus = $publicStatusModel->all();
        ?>
        @foreach ($publicStatus as $key => $value)
            <option value="{{ $value->id }}" {{ isset($o->$t_att)?(($o->$t_att==$value->id)?'selected':''):'' }}>{{ $value->name }}</option>
        @endforeach
    </select>
</div>
