<?php

namespace App\Http\Controllers;

use App\Mail\Ntfs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Contact';
    private $objNames = 'Contacts';
    private $cName = 'contact';
    private $controller = 'contact';
    private $url = 'front/contact';
    private $tpl = 'front/layout';
    private $uploads = 'uploads/contact';

    public function index(Request $request) {
        $this->lang();
        if($request->getMethod() === 'POST'){
            $to = config('app.email_contact');
            $subject = $request->post('subject');
            $message = $request->post('message');
            $message .= '
            <br><br>
            <strong>Nombre: </strong>'.$request->post('name').'<br>
            <strong>Correo: </strong>'.$request->post('email').'<br>
            <strong>Teléfono: </strong>'.$request->post('phone').'<br>
            ';
            Mail::to($to)->later(now()->addMinutes(1), new Ntfs($subject, $message));
            return redirect("/#contacto")->with('form_success', trans('contact.contact_success'));
        }
        $data['title'] = $this->objName;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        return view($this->url.'/index', $data);
    }
}
