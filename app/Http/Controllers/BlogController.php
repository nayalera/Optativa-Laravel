<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategories;
use DateTime;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $genClass = 'El';
    private $disClass = 'o';
    private $objName = 'Blog';
    private $objNames = 'Blogs';
    private $cName = 'blog';
    private $controller = 'blog';
    private $url = 'front/blog';
    private $tpl = 'front/layout';
    private $uploads = 'uploads/home';

    public function index($category_id = '') {
        $this->lang();
        $blogcategories = BlogCategories::where('status', 'active')->get();
        $blogs_recents = Blog::where('status', 'active')->orderBy('id', 'DESC')->take(3)->get();
        if(!empty($category_id)){
            $blogs = Blog::where('category_id', $category_id)->take(5)->where('status', 'active')->orderBy('id', 'DESC')->get();
        }else{
            $blogs = Blog::where('status', 'active')->take(5)->orderBy('id', 'DESC')->get();
        }
        if(empty($category_id)){
            $category_id = 'all';
        }
        $data['title'] = $this->objNames;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        $data['blogcategories'] = $blogcategories;
        $data['blogs_recents'] = $blogs_recents;
        $data['category_id'] = $category_id;
        $data['blogs'] = $blogs;
        return view($this->url.'/index', $data);
    }

    public function show($slug = '') {
        $this->lang();
        $o = Blog::where(function ($query) use ($slug) {
            $query->where('slug', $slug)
                  ->orWhere('slug_en', $slug);
        })
        ->where('status', 'active')->firstOrFail();
        $data['o'] = $o;
        $data['title'] = $this->objNames;
        $data['objName'] = $this->objName;
        $data['objNames'] = $this->objNames;
        $data['controller'] = $this->controller;
        $data['active_menu'] = $this->cName;
        return view($this->url.'/show', $data);
    }

    public function get_blogs($skip = 5, $category_id = ''){
        $html = '';
        if(!empty($category_id)){
            $blogs = Blog::where('category_id', $category_id)
            ->skip($skip)
            ->take(5)
            ->where('status', 'active')
            ->orderBy('id', 'DESC')
            ->get();
        }else{
            $blogs = Blog::where('status', 'active')
            ->skip($skip)
            ->take(5)
            ->orderBy('id', 'DESC')
            ->get();
        }
        foreach($blogs as $key => $value){
            $date = new DateTime($value->created_at);
            $html .= '<div class="news-block-one wow fadeInUp animated animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box p_relative d_block b_shadow_6 mb_30">
                    <div class="image-box p_relative d_block p_absolute l_0 t_0">
                        <figure class="image p_relative d_block"><a href="blog/'.$value->slug.'"><img src="storage/'.$value->photo.'" alt=""></a></figure>
                        <div class="post-date-two p_absolute l_30 t_30 w_60 centred pt_10 pb_10 b_shadow_6"><h4 class="fs_20 font_family_oxygen fw_bold lh_20">'.$date->format('d').' <span class="d_block fs_14">'.$date->format('M').'</span></h4></div>
                    </div>
                    <div class="lower-content p_relative d_block pt_30 pr_55 pb_40 pl_40">
                        <div class="category p_relative d_block mb_6"><a href="blog/category'.$value->category->id.'" class="d_iblock fs_16 font_family_poppins uppercase">'.$value->category->name.'</a></div>
                        <h4 class="d_block fs_24 lh_30 mb_5"><a href="blog/'.$value->slug.'">'.$value->title.'</a></h4>
                        <ul class="post-info clearfix p_relative d_block mb_13">
                            <li class="p_relative d_iblock float_left mr_30 fs_16 font_family_poppins"><a href="blog/category'.$value->category->id.'">'.$value->category->name.'</a></li>
                        </ul>
                        <p class="d_block mb_25">'.substr($value->text, 0, 70).'...</p>
                        <div class="btn-box">
                            <a href="blog/'.$value->slug.'" class="theme-btn theme-btn-six">Learn More</a>
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
