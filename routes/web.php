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
    return view('welcome');
});
Route::get('hello',function (){
    return 'hello';
});
Route::post('hello1',function(){
   return 'hello1';
});
Route::match(['get','post'],'hello3',function (){
   return 'hello3';
});
Route::get('use/{id}',function ($id){
    return $id;
});
Route::get('usel/{name?}',function ($name='bot'){
    return $name;
});
Route::get('user/{name?}',function ($name){
    return $name;
})->where('name','[A-Za-z]+');
Route::get('user3/{id}/{name?}',function($id,$name){
   return $id."=>".$name;
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('mmm/info',['uses'=>'MemberController@info']);
Route::get('tex1',['uses'=>'rbacController@text1']);
Route::get('tex2',['uses'=>'rbacController@query1']);
Route::get('tex3',['uses'=>'rbacController@query2']);
Route::get('hello',['uses'=>'rbacController@hello']);
Route::get('orm2',['uses'=>'rbacController@orm2']);
Route::get('orm3',['uses'=>'rbacController@orm3']);
Route::get('orm4',['uses'=>'rbacController@orm4']);
Route::get('orm5',['uses'=>'rbacController@orm5']);
Route::get('urlTest',['as'=>'url','uses'=>'rbacController@urlTest']);