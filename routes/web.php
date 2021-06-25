<?php
use Illuminate\Support\Facades\Auth;
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
    return view('homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin','middleware'=>[
    'web','verified','auth','admin']], function() {
            Route::get('dashboard', 'DashboardController@index')->name('dashboard');
            Route::resource('make', MakeController::class);
            Route::resource('year', YearController::class);
            
    });


    Route::group(['as'=>'staff.','prefix'=>'staff', 'namespace'=>'App\Http\Controllers\Staff','middleware'=>[
        'web','verified','auth','staff']], function() {
                Route::get('dashboard', 'DashboardController@index')->name('dashboard');
                
                
        });

    Route::group(['as'=>'customer.','prefix'=>'customer', 'namespace'=>'App\Http\Controllers\Customer','middleware'=>[
            'web','verified','auth','customer']], function() {
                    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
                    
            });
// Route::get('/import', [App\Http\Controllers\EmployeeController::class, 'index'])->name('import');
Route::get('/import-form', [App\Http\Controllers\EmployeController::class, 'importForm'])->name('import');
Route::post('/import', [App\Http\Controllers\EmployeController::class, 'import'])->name('employe.import');
Route::get('/book', [App\Http\Controllers\BookingController::class, 'index'])->name('book');
Route::get('/book1', [App\Http\Controllers\BookingController::class, 'book1'])->name('booking.book1');
Route::post('/postlocation', [App\Http\Controllers\BookingController::class, 'postlocation'])->name('booking.postlocation');
Route::get('/getState', [App\Http\Controllers\BookingController::class, 'getState'])->name('getState');
Route::get('/car-models', [App\Http\Controllers\BookingController::class, 'carModels'])->name('booking.carModels');
Route::get('/getYear', [App\Http\Controllers\BookingController::class, 'getYear'])->name('getYear');
Route::get('/getModel', [App\Http\Controllers\BookingController::class, 'getModel'])->name('getModel');
Route::get('/getEngine', [App\Http\Controllers\BookingController::class, 'getEngine'])->name('getEngine');
Route::post('/postcarmodels', [App\Http\Controllers\BookingController::class, 'postcarmodels'])->name('booking.postcarmodels');
Route::get('/car-services', [App\Http\Controllers\BookingController::class, 'services'])->name('booking.services');