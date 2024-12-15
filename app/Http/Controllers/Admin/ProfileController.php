<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Perfil';
    private $objNames = 'Perfiles';
    private $cName = 'profile';
    private $controller = 'admin/profile';
    private $url = 'admin/profile';
    private $tpl = 'admin/layout';
    private $uploads = 'uploads/profile';
    private $icon = 'user';

    public function index(Request $request)
    {
        $us_log = session()->get(config('app.session_admin'));
        if($request->method() === 'POST'){
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|unique:admins,email,'.$us_log->id,
            ], [
                'name.required' => 'El nombre es requerido',
                'email.required' => 'El correo es requerido',
                'email.unique' => 'El correo debe ser único',
            ]);
            if($validate->fails()){
                redirect()->back()->with(config('app.form_errors'), $validate->errors());
            }else{
                $params = $request->post();
                $us_log->name = $params['name'];
                $us_log->email = $params['email'];
                if(!empty($params['password'])){
                    $us_log->password = Hash::make($params['password']);
                }
                if($request->hasFile('photo') && $request->file('photo')->isValid()){
                    $us_log->photo = $request->file('photo')->store($this->uploads, 'public');
                }
                $o = Admin::findOrFail($us_log->id);
                session([config('app.session_admin') => $us_log]);
                $o = $us_log;
                $o->save();
                return redirect()->back()->with(config('app.form_success'), 'Genial!! '.$this->genClass.' '.$this->objName.' ha sido actualizad'.$this->disClass.' correctamente');
            }
        }
        $data['title'] = 'Actualizar '.$this->objName;
        $data['icon'] = $this->icon;
        $data['active_menu'] = $this->cName;
        $data['us_log'] = $us_log;
        return view($this->url.'/index', $data);
    }
}
