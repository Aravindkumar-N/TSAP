<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ViewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
// Route::resource('first',FirstController::class);

Route::get('/',[ViewController::class, 'index2']);
Route::get('/contact',[ViewController::class, 'contact']);
Route::get('/index2',[ViewController::class, 'index']);
Route::get('/index3',[ViewController::class, 'index3']);
Route::get('/about_us',[ViewController::class, 'about']);
Route::get('/volunteer',[ViewController::class, 'volunteer']);
Route::get('/become_volunteer',[ViewController::class, 'becomeVolunteer']);
Route::get('/become_member',[ViewController::class, 'becomeMember']);
Route::get('/commercial',[ViewController::class, 'commercial']);
Route::get('/tamilnadu',[ViewController::class, 'tamilnadu']);
Route::get('/faq',[ViewController::class, 'faq']);
Route::get('/certificates',[ViewController::class, 'certificates']);
Route::get('/ask_qn',[ViewController::class, 'askQn']);
Route::get('/happy_clients',[ViewController::class, 'happyClients']);
Route::get('/how_work',[ViewController::class, 'howItWorks']);
Route::get('/mission',[ViewController::class, 'mission']);
Route::get('/terms_condition',[ViewController::class, 'termsCondition']);
Route::get('/coming_soon',[ViewController::class, 'comingSoon']);
Route::get('/maintenance',[ViewController::class, 'maintenance']);
Route::get('/error',[ViewController::class, 'error']);
Route::get('/browse_fundraiser',[ViewController::class, 'browseFundraiser']);
Route::get('/become_fundraiser',[ViewController::class, 'becomeFundraiser']);
Route::get('/fundraiser_detail',[ViewController::class, 'fundraiserDetail']);
Route::get('/project',[ViewController::class, 'project']);
Route::get('/project_categories',[ViewController::class, 'projectCategories']);
Route::get('/project_sidebar',[ViewController::class, 'projectSidebar']);
Route::get('/project_story',[ViewController::class, 'projectStory']);
Route::get('/blog',[ViewController::class, 'blog']);
Route::get('/blog_grid',[ViewController::class, 'blogGrid']);
Route::get('/blog_list',[ViewController::class, 'blogList']);
Route::get('/blog_details',[ViewController::class, 'blogDetails']);
Route::get('/contact_us',[ViewController::class, 'contactUs']);
Route::get('/notice_board',[ViewController::class, 'noticeBoard']);
Route::get('/anual_report',[ViewController::class, 'anualReport']);
Route::get('/offers',[ViewController::class, 'offers']);
Route::get('/gallery',[ViewController::class, 'gallery']);