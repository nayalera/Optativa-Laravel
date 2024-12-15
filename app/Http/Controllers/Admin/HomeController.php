<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Dashboard';
    private $objNames = '';
    private $cName = 'home';
    private $controller = 'admin/home';
    private $url = 'admin/home';
    private $tpl = 'admin/layout';
    private $uploads = 'uploads/home';
    private $icon = 'home';

    public function index() {
        $data['us_log'] = session()->get(config('app.session_admin'));
        $data['title'] = $this->objName;
        $data['active_menu'] = $this->cName;
        $data['icon'] = $this->icon;
        return view($this->url.'/index', $data);
    }
}
