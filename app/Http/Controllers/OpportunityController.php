<?php

namespace App\Http\Controllers;

use App\Mail\Ntfs;
use App\Models\Applicants;
use App\Models\Opportunity;
use App\Models\OpportunityCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class OpportunityController extends Controller
{
    private $genClass = 'La';
    private $disClass = 'a';
    private $objName = 'Oportunidad';
    private $objNames = 'Oportunidades';
    private $cName = 'opportunity';
    private $controller = 'opportunity';
    private $url = 'front/opportunity';
    private $tpl = 'front/layout';
    private $uploads = 'uploads/opportunity';

    public function index(Request $request, $category_slug = '') {
        $this->lang();
        $category_id = '';
        if(!empty($category_slug)){
            $category = OpportunityCategories::where('slug', $category_slug)
            ->orWhere('slug_en', $category_slug)->first("id");
            $category_id = $category->id;
        }
        if($request->getMethod() === 'POST'){
            $categories = OpportunityCategories::all();
            $sql = 'SELECT id FROM opportunity WHERE status = "active" ';
            if($request->post('title')){
                $sql .= 'AND (title LIKE "%'.$request->post('title').'%" OR title_en LIKE "%'.$request->post('title').'%"
                OR company LIKE "%'.$request->post('title').'%" OR company_en LIKE "%'.$request->post('title').'%"
                OR description LIKE "%'.$request->post('title').'%" OR description_en LIKE "%'.$request->post('title').'%"
                OR requirements LIKE "%'.$request->post('title').'%" OR requirements_en LIKE "%'.$request->post('title').'%"
                OR offered LIKE "%'.$request->post('title').'%" OR offered_en LIKE "%'.$request->post('title').'%")';
            }
            if($request->post('opportunityCategory_id')){
                $sql .= 'AND opportunityCategory_id="'.$request->post('opportunityCategory_id').'"';
            }
            $ids = [];
            $ids_query = DB::select($sql);
            foreach($ids_query as $key => $value){
                $ids[] = $value->id;
            }
            $opportunities = Opportunity::where('status', 'active')->whereIn('id', $ids)->orderBy('id', 'DESC')->get();
            $data['title'] = trans('opportunity.opportunities');
            $data['objName'] = $this->objName;
            $data['objNames'] = $this->objNames;
            $data['controller'] = $this->controller;
            $data['active_menu'] = $this->cName;
            $data['categories'] = $categories;
            $data['opportunities'] = $opportunities;
            $data['isButton'] = false;
            $data['cantResult'] = count($ids);
            $data['key_word'] = $request->post('title');
            $data['category_id'] = $request->post('opportunityCategory_id');
            return view($this->url.'/index', $data);
        }
        $categories = OpportunityCategories::all();
        if(empty($category_id)){
            $opportunities = Opportunity::where('status', 'active')->take(15)->orderBy('id', 'DESC')->get();
        }else{
            $opportunities = Opportunity::where('status', 'active')->take(15)->orderBy('id', 'DESC')->where('opportunityCategory_id', $category_id)->get();
        }
        $data['title'] = trans('opportunity.opportunities');
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        $data['categories'] = $categories;
        $data['opportunities'] = $opportunities;
        $data['category_id'] = $category_id;
        $data['isButton'] = true;
        return view($this->url.'/index', $data);
    }

    public function show(Request $request, $slug) {
        $this->lang();
        $o = Opportunity::where('status', 'active')
        ->where(function ($query) use ($slug) {
            $query->where('slug', $slug)
                  ->orWhere('slug_en', $slug);
        })
        ->firstOrFail();
        if($request->getMethod() === 'POST'){
            $filesAttach = [];
            $inputs = $request->post();
            if($request->hasFile('cv') && $request->file('cv')->isValid()){
                $path = $request->file('cv')->storeAs('uploads/applicants', 'cv-'.uniqid().'.'.$request->file('cv')->getClientOriginalExtension(), 'public');
                $inputs['cv'] = '/storage/'.$path;
                $filesAttach[0] = '/storage/'.$path;
            }
            $to = config('app.email_contact');
            $subject = 'Un Nuevo Postulante en '.$o->title;
            $message = '
            Se ha postulado una nueva persona para la oferta '.$o->title.'
            <br><br>
            <strong>Linkedin: </strong> '.$request->post('linkedin').'<br>
            <strong>Nombre: </strong>'.$request->post('name').'<br>
            <strong>Correo: </strong>'.$request->post('email').'<br>
            <strong>Teléfono: </strong>'.$request->post('phone').'<br>
            <strong>Salario: </strong>'.$request->post('salary').' '.$request->post('currency').'<br>
            ';
            Mail::to($to)->later(now()->addMinutes(1), new Ntfs($subject, $message, $filesAttach));
            //-------------------------------------------------------------------------
            $to = $request->post('email');
            $subject = 'Se ha postulado en '.$o->title;
            $message = 'Hemos recibido tu postulación para el puesto de .'.$o->title.' - En caso de avanzar nos estaremos comunicando contigo.
            <br><br>Muchas gracias, Saludos
            ';
            Mail::to($to)->later(now()->addMinutes(1), new Ntfs($subject, $message, $filesAttach));
            //-------------------------------------------------------------------------------------------
            if(!empty($o->email_crm)){
                $to = $o->email_crm;
                $subject = 'Un Nuevo Postulante en '.$o->title;
                $message = '';
                $message .= '
                Full Name: '.$request->post('name').' \n
                Email: '.$request->post('email').' \n
                Phone Number: '.$request->post('phone').' \n
                Expected Salary: '.$request->post('salary'). ' ' . $request->post('currency') . ' \n
                ';
                Mail::to($to)->later(now()->addMinutes(1), new Ntfs($subject, $message, $filesAttach));
            }
            $inputs['opportunity_id'] = $o->id;
            Applicants::create($inputs);
            return redirect()->back()->with('form_success', trans('contact.contact_success'));
        }
        $data['o'] = $o;
        $data['title'] = 'Listado de ' . $this->objNames;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        return view($this->url.'/show', $data);
    }

    public function get_opportunity($skip = 15, $category_id = '') {
        $html = '';
        if(!empty($category_id)){
            $opportunities = Opportunity::where('opportunityCategory_id', $category_id)
            ->skip($skip)
            ->take(15)
            ->where('status', 'active')
            ->orderBy('id', 'DESC')
            ->get();
        }else{
            $opportunities = Opportunity::where('status', 'active')
            ->skip($skip)
            ->take(15)
            ->orderBy('id', 'DESC')
            ->get();
        }
        foreach($opportunities as $key => $value){
            $date = new \DateTime($value->created_at);
            $html .= '<div class="col-lg-4 col-md-6 col-sm-12 news-block">
            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box p_relative d_block b_shadow_6 b_radius_5">
                    <div class="pattern-layer" style="background-image: url('.asset('front/img/shape-60.png').');"></div>
                    <div class="image-box">
                        <figure class="image"><a href="'.((config('app.locale')=='es')?$value->slug:$value->slug_en).'"><img src="'.'/storage/'.$value->urlThumb.'" alt=""></a></figure>
                    </div>
                    <div class="lower-content p_relative d_block pt_40 pr_30 pb_50 pl_40">
                        <ul class="post-info clearfix p_relative d_block mb_11">
                            <li class="p_relative d_iblock float_left mr_30 fs_16 font_family_poppins"><a href="'.url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)).'">'.$date->format('M d, Y').'</a></li>
                            <li class="p_relative d_iblock float_left fs_16 font_family_poppins">'.$value->public_statuses->name.'</li>
                        </ul>
                        <h4 class="d_block fs_24 fw_sbold font_family_jost lh_30 mb_15"><a href="'.url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)).'">'.html_entity_decode(strip_tags(((config('app.locale')=='es')?$value->title:$value->title_en))).'</a></h4>
                        <p class="d_block font_family_poppins mb_20">'.substr(html_entity_decode(strip_tags(((config('app.locale')=='es')?$value->description:$value->description_en))), 0, 70).'</p>
                        <div class="btn-box">
                            <a href="'.url('busquedas-activas/'.((config('app.locale')=='es')?$value->slug:$value->slug_en)).'" class="theme-btn theme-btn-two"><span data-text="'.trans('blog.learn_more').'">'.trans('blog.learn_more').'</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
        if(empty($html)){
            $html = 'null';
        }
        return $html;
    }
}
