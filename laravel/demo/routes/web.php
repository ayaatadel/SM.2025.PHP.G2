<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
$users=[
   [
        'id'=>1,
        'name'=>'php',
         'department'=>'open source'
    ,],
   [
        'id'=>2,
        'name'=>'html',
         'department'=>'SD'
    ,],
   [
        'id'=>1,
        'name'=>'laravel',
         'department'=>'open source'
    ,],
];

Route::get('/users',function()
{
//   echo "all users";
$users=[
   [
        'id'=>1,
        'name'=>'php',
         'department'=>'open source'
    ,],
   [
        'id'=>2,
        'name'=>'html',
         'department'=>'SD'
    ,],
   [
        'id'=>1,
        'name'=>'laravel',
         'department'=>'open source'
    ,],
];

// return $users;
return view('users',['users'=>$users]);
});


Route::get('/users/{id}',function($id){
    $users=[
   [
        'id'=>1,
        'name'=>'php',
         'department'=>'open source'
    ,],
   [
        'id'=>2,
        'name'=>'html',
         'department'=>'SD'
    ,],
   [
        'id'=>3,
        'name'=>'laravel',
         'department'=>'open source'
    ,],
];

foreach ($users as $user) {
    if($user['id']==$id)
    {
        return view('show',['user'=>$user]);
        // return $user;
    }else{
         return abort(404); 
    }
 
}
})->where('id','[0-9]+');
