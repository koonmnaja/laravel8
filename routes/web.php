<?php

use Illuminate\Support\Facades\Route;

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

Route::get("/homepage", function() {
    return "<h1>This is home page</h1>" ;
});

Route::get("/homepage", function() {
    return "<h1>This is home page</h1>" ;
});

Route::get("/blog/{id}", function($id) {
    return "<h1>This is blog page : {$id}5555 </h1>" ;
});

Route::get( "/blog/{id}/edit" , function($id) {
    return "<h1>This is blog page : {$id} for edit</h1>" ;
});

Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
});

Route::get("/category/{a?}", function($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>" ;
});

Route::get("/myorder/create", function() {
    return "<h1>This is order form page : ". request("username") ."</h1>" ;
});

//routes/web.php
Route::get("/hello", function () {	
    return view("hello");
});

Route::get('/greeting', function () {

        $name = 'James';
    $last_name = 'Mars';
    
    return view('greeting', compact('name','last_name') );
});


Route::get("/table", function () {
    return view("table");
});
 
Route::get("/teacher" , function (){
	return view("teacher");
});

Route::get("/student" , function (){
	return view("student");
});

use App\Http\Controllers\MyProfileController;
Route::get("/myprofile/create",[ MyProfileController::class , "create" ]);

Route::get("/myprofile/{id}/edit", [ MyProfileController::class , "edit" ] );

Route::get("/myprofile/{id}", [ MyProfileController::class , "show" ]);

Route::get( "/newgallery" , [ MyProfileController::class , "gallery" ] );
Route::get( "/newgallery/ant" , [ MyProfileController::class , "ant" ] );

Route::get('/covid19', [ Covid19Controller::class, 'index' ]);


