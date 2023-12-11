<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FoodController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/testaja', function () {
    return view('testaja');
});

Route::get('/food/{id}', [FoodController::class,'show'])->name('food-single');

Route::get('/foodPub/{id}', [FoodController::class,'shownew'])->name('food-singlePub');


Route::get('/member/login', [ MemberController::class, 'login' ] );

Route::get('/member/register', [ MemberController::class, 'register' ] );

Route::get('/member/profile', [ MemberController::class, 'view_profile' ] );

Route::get('/member/update-profile', [ MemberController::class, 'update_profile' ] );

Route::get('/member/yourfood', [ FoodController::class, 'yourfood' ] );

Route::get('/member/feedPrivate', [ FoodController::class, 'feedPrivate' ] );

Route::get('/feed', [ FoodController::class, 'feed' ] );


Route::get('/member/create', [ FoodController::class, 'create' ] );

// Route::get('/member/image', [ FoodController::class, 'store' ] );
Route::get('image', [FoodController::class, 'imageForm']);

Route::post('image', [ FoodController::class, 'store' ] );

Route::get('edit/{id}', [FoodController::class, 'edit']);
Route::put('update/{id}', [FoodController::class, 'update']);
Route::get('delete/{id}', [FoodController::class, 'destroy']);

Route::view('dashboard', 'dashboard')
	->name('dashboard')
	->middleware(['auth', 'verified']);

/* Route to display notice that user should verify email first before can proceed*/
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

/* Route to handle requests generated when the user clicks the email verification link in the email*/
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

/* Route when user request to resend a verification link if the user accidentally loses the first verification link*/
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');