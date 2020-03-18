<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/layouts/one', function () {
    return view('layouts.one');
});

Auth::routes();

Route::get('/layouts/list', function () {
    return view('layouts.list');
});







//Route::get('/pro/index', 'HomeController@index')->name('home');
Route::Resource('/activity', 'ActivityController');

// member แก้ไขประวัติส่วนตัว
Route::get('/member', 'MemberController@index');
Route::get("/member/create", "MemberController@create");
Route::post("/member", "MemberController@store");
Route::get('/member/{id}', 'MemberController@show');
Route::get("/member/{id}/edit", "MemberController@edit");
Route::put("/member/{id}", "MemberController@update");
Route::post("/member/{id}", "MemberController@update");
Route::delete('/member/{id}', 'MemberController@destroy');
//publicrelations ข่าวประชาสัมพันธ์
Route::get('/publicrelations', 'PublicRelationsController@index');
Route::get("/publicrelations/create", "PublicRelationsController@create");
Route::post("/publicrelations", "PublicRelationsController@store");
Route::get('/publicrelations/{id}', 'PublicRelationsController@show');
Route::get("/publicrelations/{id}/edit", "PublicRelationsController@edit");
Route::put("/publicrelations/{id}", "PublicRelationsController@update");
Route::delete('/publicrelations/{id}', 'PublicRelationsController@destroy');
//activities ปฎิทินกิจกรรม
Route::get('/activities', 'ActivitiesController@index');
//Route::get("/activities/create", "ActivitiesController@create");
//Route::post("/activities", "ActivitiesController@store");
//Route::get('/activities/{id}', 'ActivitiesController@show');
//Route::get("/activities/{id}/edit", "ActivitiesController@edit");
//Route::put("/activities/{id}", "ActivitiesController@update");
//Route::delete('/activities/{id}', 'ActivitiesController@destroy');

//board กระดานสนทนา
Route::get('/board', 'BoardController@index');
Route::get("/board/create", "BoardController@create");
Route::post("/board", "BoardController@store");
Route::get('/board/{id}', 'BoardController@show');
Route::get("/board/{id}/edit", "BoardController@edit");
Route::put("/board/{id}", "BoardController@update");
Route::delete('/board/{id}', 'BoardController@destroy');
//addstudent เพิ่มนักศึกษา
Route::get('/addstudent', 'AddStudentController@index');
Route::get("/addstudent/create", "AddStudentController@create");
Route::post("/addstudent", "AddStudentController@store");///->middleware('auth', 'role:admin');
Route::get('/addstudent/{number}', 'AddStudentController@show');///->middleware('auth', 'role:admin');
Route::get("/addstudent/{id}/edit", "AddStudentController@edit");//->middleware('auth', 'role:admin');
Route::put("/addstudent/{id}", "AddStudentController@update");//->middleware('auth', 'role:admin');
Route::delete('/addstudent/{id}', 'AddStudentController@destroy');//->middleware('auth', 'role:admin');
//layouts
Route::get('/layouts/list', 'AddStudentController@list');
Route::get('/myPDF','AddStudentController@listPDF');
Route::get('/layouts/one', 'onecontroller@index');




