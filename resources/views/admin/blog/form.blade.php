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
	<?php $t_tag = 'Contenido'; ?>
	<?php $t_att = 'text'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (ES)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_1" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Contenido'; ?>
	<?php $t_att = 'text_en'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }} (EN)</label>
    <textarea rows="2" name="{{ $t_att }}" class="form-control editor_2" placeholder="{{ $t_tag }}">{{ isset($o->$t_att)?old($t_att, $o->$t_att):old($t_att) }}</textarea>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Categoría'; ?>
	<?php $t_att = 'category_id'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <select name="{{$t_att}}" class="form-control" required>
		<option value="" disabled selected>--Seleccione--</option>
		<?php $fn_all = DB::table('blog_categories')->orderBy('id', 'asc')->get(); ?>
		<?php foreach($fn_all as $fnrow){ ?>
		<option value="<?php echo $fnrow->id; ?>" <?php echo (isset($o->$t_att) AND $o->$t_att == $fnrow->id)?'selected':''; ?>><?php echo $fnrow->name; ?></option>
		<?php } ?>
	</select>
</div>
<div class="form-group col-md-6">
	<?php $t_tag = 'Imagen'; ?>
	<?php $t_att = 'photo'; ?>
    <label for="{{ $t_att }}">{{ $t_tag }}</label>
    <input type="file" name="{{ $t_att }}" accept="image/jpeg,image/png" class="form-control">
</div>
