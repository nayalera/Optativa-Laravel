<?php

namespace App\Http\Controllers;

use App\Mail\Ntfs;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Talenter';
    private $objNames = 'Talenter';
    private $cName = 'home';
    private $controller = 'home';
    private $url = 'front/home';
    private $tpl = 'front/layout';
    private $uploads = 'uploads/home';

    public function index() {
        $this->lang();
        $data['title'] = $this->objName;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        return view($this->url.'/index', $data);
    }

}
