<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Inicio de Sesión';
    private $objNames = '';
    private $cName = 'login';
    private $controller = 'admin/login';
    private $url = 'admin/auth';
    private $tpl = 'admin/layout';
    private $uploads = 'uploads/auth';

    public function index(Request $request)
    {
        if($request->method() === 'POST'){
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            $o = Admin::where('email', $request->post('email'))->first();
            if(!empty($o)){
                if(Hash::check($request->post('password'), $o->password)){
                    session([config('app.session_admin') => $o]);
                    return redirect('admin');
                }
            }
            session()->flash(config('app.form_errors'), 'Error en Credenciales');
        }
        return view($this->url.'/login');
    }

    public function logout(){
        if(session()->has(config('app.session_admin'))){
            session()->flush();
        }
        return redirect($this->controller);
    }
}
