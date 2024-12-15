<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Administrador';
    private $objNames = 'Administradores';
    private $cName = 'admin';
    private $controller = 'admin/admin';
    private $url = 'admin/admin';
    private $uploads = 'uploads/admin';
    private $icon = 'users';

    public function index()
    {
        $o_all = Admin::all();
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
                'password' => 'required',
                'email' => 'required|unique:admins',
            ], [
                'name.required' => 'El nombre es requerido',
                'password.required' => 'La contraseña es requerida',
                'email.required' => 'El correo es requerido',
                'email.unique' => 'El correo debe ser único',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                $inputs['password'] = Hash::make($inputs['password']);
                $o = Admin::create($inputs);
                if($request->hasFile('photo') && $request->file('photo')->isValid()){
                    $o->photo = $request->file('photo')->store($this->uploads, 'public');
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
        $o = Admin::findOrFail($id);
        if($request->method() === 'POST'){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:admins,email,'.$id,
            ], [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'email.unique' => 'El correo debe ser único',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                if(!empty($inputs['password'])){
                    $inputs['password'] = Hash::make($inputs['password']);
                }else{
                    $inputs['password'] = $o->password;
                }
                $o->update($inputs);
                if($request->hasFile('photo') && $request->file('photo')->isValid()){
                    $o->photo = $request->file('photo')->store($this->uploads, 'public');
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
        Admin::destroy($id);
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido eliminad'.$this->disClass.' correctamente');
    }

    public function change($id)
    {
        $o = Admin::findOrFail($id);
        $o->status = ($o->status=='active')?'inactive':'active';
        $o->save();
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido actualizad'.$this->disClass.' correctamente');
    }
}
