<?php
use App\Http\Controllers\Taskcontroller;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
    
    //Alert::success('Success Title', 'Success Message');



    return view('welcome');
});

Route::get('/tasks',function(){

    return view('tasks');
});

Route::post('/saveTask','Taskcontroller@Store');
