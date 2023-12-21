<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




// Auth::routes();

// Route::get('/NewNgo', [App\Http\Controllers\HomeController::class, 'index'])->name('NewNgo');



//Fronted Show
Route::get('/LifeFoundation', "App\Http\Controllers\Campen@Frontshow");
Route::get('/CampenDetali', "App\Http\Controllers\CampenDetalis@Detalis");
Route::get('/Gallery', "App\Http\Controllers\Gallery@PhotoShow");
Route::get('/Contact', "App\Http\Controllers\FrontController@contactus");
Route::get('/About', "App\Http\Controllers\FrontController@Abouts");
Route::get('/Blog', "App\Http\Controllers\FrontController@Blogs");
Route::get('/BlogDetali', "App\Http\Controllers\FrontController@BlogDetali");
Route::get('CampenDetali/{id}', 'App\Http\Controllers\CampenDetalis@showDetails')->name('CampenDetali');
Route::post('/process-payment', 'App\Http\Controllers\DonationController@processPayment');
Route::get('/Campens', "App\Http\Controllers\FrontController@Campens");
Route::get('/Campens', "App\Http\Controllers\FrontController@Frontshows");

// New Ngo 


Route::group(['middleware' => 'admin'], function () {


    Route::get('/NewNgo', "App\Http\Controllers\NgoController@indexed");


    //Photo and About us 

    Route::get('/PhotoAdd', "App\Http\Controllers\PhotoController@AddPhoto");
    Route::post('/PhotoAdd', "App\Http\Controllers\PhotoController@PhotoValidet");

    //Photo List
    Route::get('/PhotoList', "App\Http\Controllers\PhotoController@Lists");

    //Photos Edit

    Route::get('/PhotoEdit/{id}', "App\Http\Controllers\PhotoController@photosEdit");
    Route::put('/PhotoEdit/{id}', "App\Http\Controllers\PhotoController@photosEdit1");

    // Photos delete
    Route::get('/deleted/{id}', "App\Http\Controllers\PhotoController@deletes");


    //Campen Add 

    Route::get('/CampenAdd', "App\Http\Controllers\CampenController@CampenForm");
    Route::post('/CampenAdd', "App\Http\Controllers\CampenController@CampenVelidet");

    //CampenList
    Route::get('/CampenList', "App\Http\Controllers\CampenController@CampenShow");

    //Campens Edit
    Route::get('/CampenEdit/{id}', "App\Http\Controllers\CampenController@Edit");
    Route::put('/CampenEdit/{id}', "App\Http\Controllers\CampenController@Edit1");

    Route::get('/deletedd/{id}', "App\Http\Controllers\CampenController@deleted");
    // routes/web.php

   


    // routes/web.php

    
});







Route::get('/login', "App\Http\Controllers\LoginController@Loginpage")->name('NewNgo/Auth/login');
Route::post('/login', "App\Http\Controllers\LoginController@loginss");
Route::any('/sign_out', "App\Http\Controllers\LoginController@singout")->name('sign_out');
Route::get('/Registers', "App\Http\Controllers\RegisterController@Registers")->name('NewNgo/Auth/Register');
Route::post('/Registers', "App\Http\Controllers\RegisterController@registerss");


Route::get('/Forgote', "App\Http\Controllers\ForgoteController@forgotepage");
Route::post('/Forgote', "App\Http\Controllers\ForgoteController@chackemail");
Route::get('/Confirms', "App\Http\Controllers\ForgoteController@confirmpass");
Route::post('/Confirms', "App\Http\Controllers\ForgoteController@updatepass");
