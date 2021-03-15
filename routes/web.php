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
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'TestController@index',
]);
Route::get('terminate',[
   'middleware' => 'terminate:editor',
   'uses' => 'ABCController@index',
]);
Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);
Route::resource('my','MyController');
//Route::controller('test','ImplicitController');
class MyClass{
   public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');
Route::get('/foo/bar','UriController@index');
Route::get('/register',function() {
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('json',function(){
    return response()->json(['name'=>'John','state'=>'California']);
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');
Route::get('view-records','StudViewController@index');
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/validation','ValidationController@showform');
Route::post('/validation','ValidationController@validateform');

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('ajax',function(){
    return view('ajax_message');
});
Route::post('/getmsg','AjaxController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');