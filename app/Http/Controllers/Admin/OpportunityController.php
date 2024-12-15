<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OpportunityController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Oportunidad';
    private $objNames = 'Oportunidades';
    private $cName = 'opportunity';
    private $controller = 'admin/opportunity';
    private $url = 'admin/opportunity';
    private $uploads = 'uploads';
    private $icon = 'users';
    private $o_model = Opportunity::class;

    public function index()
    {
        $o_all = $this->o_model::orderBy('id', 'DESC')->get();
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
                'title' => 'required',
                'email_crm' => 'required',
            ], [
                'title.required' => 'El título es requerido',
                'email_crm.required' => 'El correo CRM es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $date_slug = date('YmdHis');
                $inputs = $request->all();
                $inputs['publicStatus_id'] = $request->post('publicStatus');
                $inputs['slug'] = (empty($inputs['slug']))?$this->slug($inputs['title'].'-'.$date_slug):$inputs['slug'].'-'.$date_slug;
                $inputs['slug_en'] = (empty($inputs['slug_en']))?$this->slug($inputs['title_en'].'-'.$date_slug):$inputs['slug_en'].'-'.$date_slug;
                if($request->hasFile('logo') && $request->file('logo')->isValid()){
                    $inputs['logo'] = $request->file('logo')->store($this->uploads, 'public');
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
                'title' => 'required',
                'email_crm' => 'required',
            ], [
                'title.required' => 'El título es requerido',
                'email_crm.required' => 'El correo CRM es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                $array = explode('-', $o->slug);
                $date_slug = $array[count($array)-1];
                $date_slug_now = date('YmdHis');
                if(!preg_match('/^\d{14}$/', $date_slug)) {
                    $date_slug = date('YmdHis');
                }
                if(!empty($inputs['slug'])) {
                    $array = explode('-', $inputs['slug']);
                    $date_slug = $array[count($array)-1];
                    if(!preg_match('/^\d{14}$/', $date_slug)) {
                        $inputs['slug'] .= '-'.$date_slug_now;
                    }
                }
                if(!empty($inputs['slug_en'])) {
                    $array = explode('-', $inputs['slug_en']);
                    $date_slug = $array[count($array)-1];
                    if(!preg_match('/^\d{14}$/', $date_slug)) {
                        $inputs['slug_en'] .= '-'.$date_slug_now;
                    }
                }
                $inputs['publicStatus_id'] = $request->post('publicStatus');
                $inputs['slug'] = (empty($inputs['slug']))?$this->slug($inputs['title'].'-'.$date_slug):$inputs['slug'];
                $inputs['slug_en'] = (empty($inputs['slug_en']))?$this->slug($inputs['title_en'].'-'.$date_slug):$inputs['slug_en'];
                if($request->hasFile('logo') && $request->file('logo')->isValid()){
                    $inputs['logo'] = $request->file('logo')->store($this->uploads, 'public');
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
