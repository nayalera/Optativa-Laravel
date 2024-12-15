<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogCategoriesController extends Controller
{
    private $genClass = 'La';
    private $disClass = 'a';
    private $objName = 'Categoría';
    private $objNames = 'Categorías';
    private $cName = 'blogcategories';
    private $controller = 'admin/blogcategories';
    private $url = 'admin/blogcategories';
    private $uploads = 'uploads';
    private $icon = 'users';
    private $o_model = BlogCategories::class;

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
            ], [
                'name.required' => 'El nombre es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                if($request->hasFile('photo') && $request->file('photo')->isValid()){
                    $inputs['photo'] = $request->file('photo')->store($this->uploads, 'public');
                }
                $o = $this->o_model::create($inputs);
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
                if($request->hasFile('photo') && $request->file('photo')->isValid()){
                    $inputs['photo'] = $request->file('photo')->store($this->uploads, 'public');
                }
                $o->update($inputs);
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
        Blog::where('category_id', $id)->delete();
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
