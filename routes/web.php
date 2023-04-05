<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/update', [EmployeeController::class, 'update'])->name('employees.update');














//
//
//// ->
//Route::get('/users', [User::class, 'index'])->middleware(UserList::class);
////Route::get('/user-list', [UserController::class, 'index']);wdawedad


//Route::get('/user',function (){
//    return view('user');
//});
//
//Route::get('/user',[User::class,'user']);
//
////Route::get('/users',[Userr::class,'user']);
//// Migration lara calısılacak
//
//Route::get('/deneme',[Deneme::class,'test'],function (){
//    return view("deneme");
//});
////Route::get('/deneme',function (){
////    return view('deneme');
////});
//
//
//
//Route::post('/other-page', function () {
////    dd(request());
//    $username = request()->userId;
//    $password = request()->userPass;
//
//    return view('other-page', [
//        'username' => $username,
//        'password' => $password,
//    ]);
//})->name('other-page');
//
//
//
//Route::get('/form',[Form::class,'gorunum']);
//
//Route::middleware('arakontrol')->post('/sonuc',[Form::class,'sonuc'])->name('sonuc');
