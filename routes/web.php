<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });

// Route::get('about', function(){
//     return view('aboutme');
// });

Route::view('about', 'aboutme');

// Route::get('adminprofile', function(){
//     return view('admin.profile');
// });

Route::view('adminprofile', 'admin.profile');

// Route::get('contact', function(){
//     return view('contactme')->with('name', 'Deep');
// });

// Route::get('contact', function(){
//     return view('contactme', ['name'=>'deep', 'age'=>'56']);
// });

Route::view('contact', 'contactme',['name'=>'Deep', 'age'=>32]);


Route::get('about', function() {
    return view('aboutme');
   });

Route::get('user/{u_id}', function($id) {
    return view('myuser', ['id'=>$id]);
   });

Route::get('student/{name?}', function($name = 'No Name'){
   return view('mystudent', ['name' => $name]);
   });

Route::get('post/{post_id}/commend/{comment_id}', function($post_id , $comment_id){
   return view('mypost', ['id'=>$post_id, 'comment'=>$comment_id]);
   });

Route::get('product/{p_name}', function($name){
    return view('myproduct', ['name'=>$name]);
})->where('p_name', '[A-Za-z]+');

// Route::get('manager/{id}/{name}', function($id, $name){
//     return view('mymanager', ['id'=>$id, 'name'=>$name]);
// })->where(['id'=>'[0-9]+', 'name'=>'[A-za-z]+']);

Route::get('manager/{id}/{name}', function($id, $name){
    return view('mymanager', ['id'=>$id, 'name'=>$name]);
})->whereNumber('id')->whereAlpha('name');

Route::view('login','admin.mylogin');
Route::view('register','admin.myregister');

// Route::redirect('login', 'register');

// Route::redirect('login', 'register', 301);

// Route::PermanentRedirect('login', 'register', 301);

Route::fallback(function(){ 
   return view('defualt');
    });

















































































































