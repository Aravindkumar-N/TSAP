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
//Route::get('/',[ViewController::class, 'comingSoon'])->name('coming_soon');
Route::get('/',[ViewController::class, 'index2'])->name('home');
Route::get('/home',[ViewController::class, 'index2'])->name('home');
Route::get('/contact',[ViewController::class, 'contact'])->name('contact');
Route::get('/index2',[ViewController::class, 'index'])->name('index2');
Route::get('/index3',[ViewController::class, 'index3'])->name('index3');
Route::get('/about_us',[ViewController::class, 'about'])->name('about_us');
Route::get('/volunteer',[ViewController::class, 'volunteer'])->name('volunteer');
Route::get('/become_volunteer',[ViewController::class, 'becomeVolunteer'])->name('become_volunteer');
Route::get('/become_member',[ViewController::class, 'becomeMember'])->name('become_member');
Route::get('/commercial',[ViewController::class, 'commercial'])->name('commercial');
Route::get('/tamilnadu',[ViewController::class, 'tamilnadu'])->name('tamilnadu');
Route::get('/faq',[ViewController::class, 'faq'])->name('faq');
Route::get('/certificates',[ViewController::class, 'certificates'])->name('certificates');
Route::get('/ask_qn',[ViewController::class, 'askQn'])->name('ask_qn');
Route::get('/happy_clients',[ViewController::class, 'happyClients'])->name('happy_clients');
Route::get('/how_work',[ViewController::class, 'howItWorks'])->name('how_work');
Route::get('/mission',[ViewController::class, 'mission'])->name('mission');
Route::get('/terms_condition',[ViewController::class, 'termsCondition'])->name('terms_condition');
Route::get('/coming_soon',[ViewController::class, 'comingSoon'])->name('coming_soon');
Route::get('/maintenance',[ViewController::class, 'maintenance'])->name('maintenance');
Route::get('/error',[ViewController::class, 'error'])->name('error');
Route::get('/browse_fundraiser',[ViewController::class, 'browseFundraiser'])->name('browse_fundraiser');
Route::get('/become_fundraiser',[ViewController::class, 'becomeFundraiser'])->name('become_fundraiser');
Route::get('/fundraiser_detail',[ViewController::class, 'fundraiserDetail'])->name('fundraiser_detail');
Route::get('/project',[ViewController::class, 'project'])->name('project');
Route::get('/project_categories',[ViewController::class, 'projectCategories'])->name('project_categories');
Route::get('/project_sidebar',[ViewController::class, 'projectSidebar'])->name('project_sidebar');
Route::get('/project_story',[ViewController::class, 'projectStory'])->name('project_story');
Route::get('/blog',[ViewController::class, 'blog'])->name('blog');
Route::get('/blog_grid',[ViewController::class, 'blogGrid'])->name('blog_grid');
Route::get('/blog_list',[ViewController::class, 'blogList'])->name('blog_list');
Route::get('/blog_details',[ViewController::class, 'blogDetails'])->name('blog_details');
Route::get('/contact_us',[ViewController::class, 'contactUs'])->name('contact_us');
Route::get('/notice_board',[ViewController::class, 'noticeBoard'])->name('notice_board');
Route::get('/annual_report',[ViewController::class, 'annualReport'])->name('annual_report');
Route::get('/offers',[ViewController::class, 'offers'])->name('offers');
Route::get('/gallery',[ViewController::class, 'gallery'])->name('gallery');