<?php
use App\Http\Controllers\PublicController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/dashboard', [PublicController::class, 'showDashboard'])->name('dashboard');
Route::get('/about', [PublicController::class, 'showAboutPage'])->name('about');
Route::get('/post/{id}', [PublicController::class, 'showSinglePost'])->name('singlePost');
Route::get('/contact', [PublicController::class, 'showContact'])->name('contact');
Route::get('/contact/post', [PublicController::class, 'storeContactPost'])->name('contactPost');


Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('AfterLogin');
})->name('user');
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/


