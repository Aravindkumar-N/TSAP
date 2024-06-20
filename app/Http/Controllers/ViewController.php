<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contact(){
        return view('contact_us');
    }
    public function index2(){
        return view('index_2');
    }
    public function index3(){
        return view('index_3');
    }
    public function about(){
        return view('about_us');
    }
    public function volunteer(){
        return view('volunteer');
    }
    public function becomeVolunteer(){
        return view('become_a_volunteer');
    }
    public function becomeMember(){
        return view('become_member');
    }
    public function commercial(){
        return view('commercial');
    }
    public function tamilnadu(){
        return view('tamilnadu');
    }
    public function faq(){
        return view('faq');
    }
    public function certificates(){
        return view('certificates');
    }
    public function askQn(){
        return view('ask_a_question');
    }
    public function happyClients(){
        return view('happy_clients');
    }
    public function howItWorks(){
        return view('how_it_works');
    }
    public function mission(){
        return view('mission');
    }
    public function termsCondition(){
        return view('terms_and_condition');
    }
    public function comingSoon(){
        return view('coming_soon');
    }
    public function maintenance(){
        return view('under_maintenance');
    }
    public function error(){
        return view('error_404');
    }
    public function browseFundraiser(){
        return view('browse_fundraiser');
    }
    public function becomeFundraiser(){
        return view('become_a_fundraiser');
    }
    public function fundraiserDetail(){
        return view('fundraiser_detail');
    }
    public function project(){
        return view('project');
    }
    public function projectCategories(){
        return view('project_categories');
    }
    public function projectSidebar(){
        return view('project_sidebar');
    }
    public function projectStory(){
        return view('project_story');
    }
    public function blog(){
        return view('blog');
    }
    public function blogGrid(){
        return view('blog_grid');
    }
    public function blogList(){
        return view('blog_list');
    }
    public function blogDetails(){
        return view('blog_details');
    }
    public function contactUs(){
        return view('contact_us');
    }
    public function noticeBoard(){
        return view('notice_board');
    }
    public function annualReport(){
        return view('anual_report');
    }
    public function offers(){
        return view('offers');
    }
    public function gallery(){
        return view('gallery');
    }



}
