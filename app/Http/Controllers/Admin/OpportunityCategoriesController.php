<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use App\Models\OpportunityCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpportunityCategoriesController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Oportunidad Categoría';
    private $objNames = 'Oportunidad Categorías';
    private $cName = 'oppcategories';
    private $controller = 'admin/oppcategories';
    private $url = 'admin/oppcategories';
    private $uploads = 'uploads';
    private $icon = 'users';
    private $o_model = OpportunityCategories::class;

    public function index()
    {
        $o_all = $this->o_model::all();
        $us_log = session()->get(config('app.session_admin'));
        $data['o_all'] = $o_all;
        $data['title'] = 'Listado de '.$this->objNames;
        $data['us_log'] = $us_log;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        $data['icon'] = $this->icon;
        return view($this->url.'/index', $data);
    }

    public function add(Request $request)
    {
        if($request->method() === 'POST'){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'name_en' => 'required',
            ], [
                'name.required' => 'El nombre es requerido',
                'name_en.required' => 'El nombre en inglés es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                $inputs['slug'] = (empty($inputs['slug']))?$this->slug($inputs['name']):$inputs['slug'];
                $inputs['slug_en'] = (empty($inputs['slug_en']))?$this->slug($inputs['name_en']):$inputs['slug_en'];
                $o = $this->o_model::create($inputs);
                if($request->hasFile('urlThumb') && $request->file('urlThumb')->isValid()){
                    $o->urlThumb = $request->file('urlThumb')->store($this->uploads, 'public');
                    $o->save();
                }
                return redirect($this->controller)->with(config('app.form_success'), 'Enahorabuena!! '.$this->genClass.' '.$this->objName.' ha sido agregad'.$this->disClass.' correctamente');
            }
        }
        $us_log = session()->get(config('app.session_admin'));
        $data['title'] = 'Agregar '.$this->objName;
        $data['us_log'] = $us_log;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        $data['icon'] = $this->icon;
        return view($this->url.'/add', $data);
    }

    public function edit(Request $request, $id)
    {
        $o = $this->o_model::findOrFail($id);
        if($request->method() === 'POST'){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
            ], [
                'name.required' => 'El nombre es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                $inputs['slug'] = (empty($inputs['slug']))?$this->slug($inputs['name']):$inputs['slug'];
                $inputs['slug_en'] = (empty($inputs['slug_en']))?$this->slug($inputs['name_en']):$inputs['slug_en'];
                $o->update($inputs);
                if($request->hasFile('urlThumb') && $request->file('urlThumb')->isValid()){
                    $o->urlThumb = $request->file('urlThumb')->store($this->uploads, 'public');
                    $o->save();
                }
                return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido actualizad'.$this->disClass.' correctamente');
            }
        }
        $us_log = session()->get(config('app.session_admin'));
        $data['o'] = $o;
        $data['title'] = 'Actualizar '.$this->objName;
        $data['us_log'] = $us_log;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        $data['icon'] = $this->icon;
        return view($this->url.'/edit', $data);
    }

    public function delete($id)
    {
        $this->o_model::destroy($id);
        Opportunity::where('opportunityCategory_id', $id)->delete();
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido eliminad'.$this->disClass.' correctamente');
    }

    public function change($id)
    {
        $o = $this->o_model::findOrFail($id);
        $o->status = ($o->status=='active')?'inactive':'active';
        $o->save();
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido actualizad'.$this->disClass.' correctamente');
    }
}
