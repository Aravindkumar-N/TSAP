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

Route::get('/tamilsangam/home',[ViewController::class, 'index2'])->name('home');
Route::get('/tamilsangam/contact',[ViewController::class, 'contact'])->name('contact');
Route::get('/tamilsangam/index2',[ViewController::class, 'index'])->name('index2');
Route::get('/tamilsangam/index3',[ViewController::class, 'index3'])->name('index3');
Route::get('/tamilsangam/about_us',[ViewController::class, 'about'])->name('about_us');
Route::get('/tamilsangam/volunteer',[ViewController::class, 'volunteer'])->name('volunteer');
Route::get('/tamilsangam/become_volunteer',[ViewController::class, 'becomeVolunteer'])->name('become_volunteer');
Route::get('/tamilsangam/become_member',[ViewController::class, 'becomeMember'])->name('become_member');
Route::get('/tamilsangam/commercial',[ViewController::class, 'commercial'])->name('commercial');
Route::get('/tamilsangam/tamilnadu',[ViewController::class, 'tamilnadu'])->name('tamilnadu');
Route::get('/tamilsangam/faq',[ViewController::class, 'faq'])->name('faq');
Route::get('/tamilsangam/certificates',[ViewController::class, 'certificates'])->name('certificates');
Route::get('/tamilsangam/ask_qn',[ViewController::class, 'askQn'])->name('ask_qn');
Route::get('/tamilsangam/happy_clients',[ViewController::class, 'happyClients'])->name('happy_clients');
Route::get('/tamilsangam/how_work',[ViewController::class, 'howItWorks'])->name('how_work');
Route::get('/tamilsangam/mission',[ViewController::class, 'mission'])->name('mission');
Route::get('/tamilsangam/terms_condition',[ViewController::class, 'termsCondition'])->name('terms_condition');
Route::get('/tamilsangam/coming_soon',[ViewController::class, 'comingSoon'])->name('coming_soon');
Route::get('/tamilsangam/maintenance',[ViewController::class, 'maintenance'])->name('maintenance');
Route::get('/tamilsangam/error',[ViewController::class, 'error'])->name('error');
Route::get('/tamilsangam/browse_fundraiser',[ViewController::class, 'browseFundraiser'])->name('browse_fundraiser');
Route::get('/tamilsangam/become_fundraiser',[ViewController::class, 'becomeFundraiser'])->name('become_fundraiser');
Route::get('/tamilsangam/fundraiser_detail',[ViewController::class, 'fundraiserDetail'])->name('fundraiser_detail');
Route::get('/tamilsangam/project',[ViewController::class, 'project'])->name('project');
Route::get('/tamilsangam/project_categories',[ViewController::class, 'projectCategories'])->name('project_categories');
Route::get('/tamilsangam/project_sidebar',[ViewController::class, 'projectSidebar'])->name('project_sidebar');
Route::get('/tamilsangam/project_story',[ViewController::class, 'projectStory'])->name('project_story');
Route::get('/tamilsangam/blog',[ViewController::class, 'blog'])->name('blog');
Route::get('/tamilsangam/blog_grid',[ViewController::class, 'blogGrid'])->name('blog_grid');
Route::get('/tamilsangam/blog_list',[ViewController::class, 'blogList'])->name('blog_list');
Route::get('/tamilsangam/blog_details',[ViewController::class, 'blogDetails'])->name('blog_details');
Route::get('/tamilsangam/contact_us',[ViewController::class, 'contactUs'])->name('contact_us');
Route::get('/tamilsangam/notice_board',[ViewController::class, 'noticeBoard'])->name('notice_board');
Route::get('/tamilsangam/anual_report',[ViewController::class, 'anualReport'])->name('anual_report');
Route::get('/tamilsangam/offers',[ViewController::class, 'offers'])->name('offers');
Route::get('/tamilsangam/gallery',[ViewController::class, 'gallery'])->name('gallery');