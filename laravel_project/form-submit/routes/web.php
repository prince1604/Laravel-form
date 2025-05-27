<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserFormController;
use App\Https\Controlers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
// use App\Http\Middleware\AgeCheck;
// use App\Http\Middleware\CountryCheck;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\StudentController;





Route::view('user-form','user-form');

Route::post('adduser',[UserFormController::class,'addUser']);

// Route::view('home','home')->middleware(middleware: 'check1');


// // group middleware
// Route::view('about','about');
// Route::view('contect','about');
// Route::view('list','about');
// Route::view('home','home');

// Route::middleware('check1')->group(function(){
//     Route::view('about','about');
//     Route::view('list','about');
//     Route::view('home','home');
//     Route::view('contect','about');
// });

// Route::view('home','home')->middleware([AgeCheck::class,CountryCheck::class]);
// Route::view('about','about')->middleware([CountryCheck::class]);

// Route::get('users',[UserConroller::class,'users']);

// Route::get('/students',[StudentController::class,'getStudents']);

// Route::get('user', [UserController::class, 'queries']);

// Route::get('user',[UserController::class,'any']);
// Route::post('user',[UserController::class,'any']);
// Route::put('user',[UserController::class,'any']);
// Route::delete('user',[UserController::class,'any']);

// Route::any('user',[UserController::class,'any']);

// Route::match(['post','get'],'/user',[UserController::class,'group1']);
// Route::match(['put','delete'],'/user',[UserController::class,'group2']);

Route::view('form','user');
Route::post('user',[UserController::class,'login']);
Route::post('admin',[UserController::class,'login']);


Route::view('login','login');

Route::post('login', [UserController::class, 'login']);

Route::view('profile','profile');

Route::get('logout',[UserController::class,'logout']);



Route::post('add',[UserController::class,'adduser']);
Route::view('user','user');


Route::view('upload', 'upload'); // show the form
Route::post('upload', [UploadController::class, 'upload']); // handle upload



Route::middleware('SetLang')->group(function(){

        Route::get('/', function () {
            return view('welcome');
        });

        Route::view('about','about');

        Route::get('about/{lang}',function($lang){
        App::setLocale($lang);
            return view('about');

        });

        Route::get('setlang/{lang}', function($lang) {
            Session::put('lang', $lang);
            return redirect('/');
        });

});



Route::view('add','addStudent');

Route::post('add',[StudentController::class,'add']);
Route::get('list',action: [StudentController::class,'list']);


Route::post('delete/{id}',[StudentController::class,'delete'])->name('student.delete');

Route::get('edit/{id}',[StudentController::class,'edit']);

Route::put('edit-Student/{id}',[StudentController::class,'editStudent']);

Route::get('search',[StudentController::class,'search']);

Route::post('/delete-multi',[StudentController::class,'deleteMultiple']);
