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
//Homepage

Route::get('/', [
    'uses' => 'todoController@index',
    
]);

Route::get('/todo/add', [
    'uses' => 'todoController@add',
    'as' => 'add-task' 
]);

Route::post('/todo/save', [
    'uses'  =>  'todoController@saveTask',
    'as'    =>  'save-task'
]);

Route::get('/todo/manage', [
    'uses'  =>  'todoController@manageTask',
    'as'    =>  'manage-task'
]);

Route::get('/todo/undone/{id}', [
    'uses'  =>  'todoController@undoneTask',
    'as'    =>  'undone-task'
]);

Route::get('/task/done/{id}', [
    'uses'  =>  'todoController@doneTask',
    'as'    =>  'done-task'
]);

Route::get('/task/edit/{id}', [
    'uses'  =>  'todoController@editTask',
    'as'    =>  'edit-task'
]);

Route::post('/task/update/', [
    'uses'  =>  'todoController@updateTask',
    'as'    =>  'update-task'
]);

Route::get('/task/delete/{id}', [
    'uses'  =>  'todoController@deleteTask',
    'as'    =>  'delete-task'
]);

Route::get('task/history' ,[
        'uses' =>'todoController@historyTask',
        'as'   => 'history'
]);


Route::get('/task/HistoryClear', [
	'uses' =>'todoController@ClearHistory',
	'as'   => 'clear-history'
]);

//user login/registration
Route::get('/signup', function () {
    return view('auth.register1');
});

Auth::routes(['verify' => True]);

Route::get('/profile', function () {

})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');







