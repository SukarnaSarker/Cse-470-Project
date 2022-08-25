<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobportal;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[jobportal::class,'login']);
Route::get('/adminlogin',[jobportal::class,'adminlogin']);
Route::get('/employerlogin',[jobportal::class,'employerlogin']);
Route::post('/login-user',[jobportal::class,'loginUser'])->name('login-user');
Route::post('/login-employer',[jobportal::class,'loginemployer'])->name('login-employer');
Route::post('/login-admin',[jobportal::class,'loginadmin'])->name('login-admin');


Route::get('/registration',[jobportal::class,'registration']);
Route::get('/employerregistration',[jobportal::class,'employerregistration']);
Route::post('/register-user',[jobportal::class,'registerUser'])->name('register-user');
Route::post('/register-employer',[jobportal::class,'registeremployer'])->name('register-user');

Route::get('/dashboard',[jobportal::class,'dashboard']);
Route::get('/dashboardforemployer',[jobportal::class,'dashboardforemployer']);

Route::get('/edit',[jobportal::class,'edit']);
Route::post('/edit-employeredit',[jobportal::class,'editemployeredit'])->name('edit-employeredit');

Route::get('/editemployee',[jobportal::class,'editemployee']);
Route::post('/editemployee-employeeinfo',[jobportal::class,'editemployeeemployeeinfo'])->name('editemployee-employeeinfo');

Route::get('/',function() {
    return view('welcome');
});
Route::view('upload','upload');
Route::post('upload',[jobportal::class,'index']);



Route::get('/details',[jobportal::class,'details']);

Route::get('detailsofemployer',[jobportal::class,'show']);


Route::get('/profile',[jobportal::class,'profile']);

Route::get('/post',[jobportal::class,'post']);
Route::post('post-posting',[jobportal::class,'postposting'])->name('post-posting');

Route::get('/logout',[jobportal::class,'logout']);

Route::get('/seekerprofile',[jobportal::class,'seekerprofile']);

Route::get('post-list',[jobportal::class,'seekeredit']);

Route::get('/post-list',[jobportal::class,'postList']);


Route::post('update-data',[jobportal::class,'updateData'])->name('update.data');
Route::get('/add-post',[jobportal::class,'addPost'])->name('post.add');
Route::post('/add-post',[jobportal::class,'savePost'])->name('save.post');
Route::get('/edit-post',[jobportal::class,'editPost'])->name('post.edit');
Route::post('/update-post',[jobportal::class,'updatePost'])->name('update.post');
Route::get('/studentprofile',[jobportal::class,'studentprofile']);

Route::get('empost-list',[jobportal::class,'emedit']);

Route::get('/empost-list',[jobportal::class,'empostList']);
Route::get('/emadd-post',[jobportal::class,'emaddPost'])->name('empost.add');
Route::post('/emadd-post',[jobportal::class,'emsavePost'])->name('emsave.post');
Route::get('/emedit-post',[jobportal::class,'emeditPost'])->name('empost.edit');
Route::post('/emupdate-post',[jobportal::class,'emupdatePost'])->name('emupdate.post');
Route::get('/emprofile',[jobportal::class,'emprofile']);


Route::get('/list',[jobportal::class,'showw']);
Route::get('/seeker-list',[jobportal::class,'showww']);

Route::get('/uploadportfolio',[jobportal::class,'uploadportfolio']);
Route::post('/uploadportfoliot',[jobportal::class,'saveportfolio'])->name('save.p');

Route::get('/sorted-seeker-list/{order?}',[jobportal::class,'sorted'])->name('sorted-seeker-list.sorted');
Route::get('/sorted-job-list/{order?}',[jobportal::class,'sortt'])->name('sorted-job-list.sortt');

Route::get('/courses',[jobportal::class,'courseee']);
Route::post('/add_to_cart',[jobportal::class,'addToCart']);
Route::get('/addedcourses',[jobportal::class,'addedcourses']);

Route::get('/checkout',[jobportal::class,'checkout']);

Route::get('/checkout/{user_id}',[jobportal::class,'delete_row']);

Route::get('index',[jobportal::class,'cv']);

Route::get('/addedcourses',[jobportal::class,'addedcourses']);
Route::get('/bookmark',[jobportal::class,'bookmark']);
Route::get('/rec',[jobportal::class,'rec']);

Route::get('/rating',[jobportal::class,'rating']);

Route::get('send',[jobportal::class,"sendnotification"]);
Route::get('sendd',[jobportal::class,"senddnotification"]);

Route::get('admindashboard',[jobportal::class,"ad"]);