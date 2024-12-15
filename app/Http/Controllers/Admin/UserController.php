<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Usuario';
    private $objNames = 'Usuarios';
    private $cName = 'user';
    private $controller = 'admin/user';
    private $url = 'admin/user';
    private $tpl = 'admin/layout';
    private $uploads = 'uploads/user';
    private $icon = 'users';

    public function index()
    {
        $o_all = User::all();
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
                'lastname' => 'required',
                'password' => 'required',
                'email' => 'required|unique:users',
                'phone' => 'required|unique:users',
                'country' => 'required',
                'client' => 'required',
            ], [
                'name.required' => 'El nombre es requerido',
                'lastname.required' => 'Los apellidos son requeridos',
                'password.required' => 'La contraseña es requerida',
                'email.required' => 'El correo es requerido',
                'email.unique' => 'El correo debe ser único',
                'phone.required' => 'El celular es requerido',
                'phone.unique' => 'El celular debe ser único',
                'country.required' => 'El país es requerido',
                'client.required' => 'El cliente es requerido',
            ]);
            if($validate->fails()){
                session()->flash(config('app.form_errors'), $validate->errors());
            }else{
                $inputs = $request->all();
                $inputs['password'] = Hash::make($inputs['password']);
                $o = User::create($inputs);
                return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido agregad'.$this->disClass.' correctamente');
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
        $o = User::findOrFail($id);
        if($request->method() === 'POST'){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'lastname' => 'required',
                'email' => 'required|unique:users,email,'.$id,
                'phone' => 'required|unique:users,phone,'.$id,
                'country' => 'required',
                'client' => 'required',
            ], [
                'name.required' => 'El nombre es requerido',
                'lastname.required' => 'Los apellidos son requeridos',
                'email.required' => 'El correo es requerido',
                'email.unique' => 'El correo debe ser único',
                'phone.required' => 'El celular es requerido',
                'phone.unique' => 'El celular debe ser único',
                'country.required' => 'El país es requerido',
                'client.required' => 'El cliente es requerido',
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
        User::destroy($id);
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido eliminad'.$this->disClass.' correctamente');
    }

    public function change($id)
    {
        $o = User::findOrFail($id);
        $o->status = ($o->status=='active')?'inactive':'active';
        $o->save();
        return redirect($this->controller)->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido actualizad'.$this->disClass.' correctamente');
    }
}
