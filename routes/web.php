<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ClassController;
use App\Models\Classes;
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

Route::get('/the_landing_page', function () {
    return view('homepage.user_home');
})->name('landing-page')/*->middleware("auth")*/;

Route::get('/about_us', function () {
    return view('homepage.about_us');
})->name('about')/*->middleware("auth")*/;

Route::get('/reg_form', [RegisterController::class, "setRegister"])->name('register');
Route::post('/reg-store', [RegisterController::class, "registerStore"])->name('reg.store');

Route::get('/log_form', [LoginController::class, "setLogin"])->name('login');
Route::post('/log_check', [LoginController::class, "loginCheck"])->name('log.check');

Route::get('/admin_log', [AdminController::class, "adminLogin"])->name('admin.log');


Route::get('/admin_page', function () {
    return view('homepage.admin.admin_dash');
})->name('admin.home');

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::get('/logout', [LogoutController::class, "perform"])->name('logout.perform');
});

/**
 * Profile
 */
Route::get('/user_profile', [InfoController::class, "createView"])->name('user.profile')->middleware('auth');

Route::get('/user_profile/update/{info}', [InfoController::class, 'update'])->name('update.profile');
Route::post('/user_profile/edit/{info}', [InfoController::class, 'edit'])->name('edit.profile');
Route::post('/user_profile/update_profile/{info}', [InfoController::class, 'editSet'])->name('update.change');

Route::get('/user_profile/change_name/{info}', [InfoController::class, 'updateName'])->name('change.name');
Route::post('/user_profile/edit_name/{info}', [InfoController::class, 'changeName'])->name('edit.change');

Route::get('/user_dash', function () {
    return view('homepage.users.user_dashboard');
})->name('user.dashboard')->middleware('auth');

/**
 * user classes
 */

Route::get('/classes/schedule/{training}', function ($training) {
    return view('homepage.Users.Take_class.schedule', compact('training'));
})->name('schedule');

Route::get('/classes', function () {
    return view('homepage.users.take_class.main_front');
})->name('the_classes');

Route::get('/class/zumba', function () {
    return view('homepage.users.take_class.all_classes.zumba');
})->name('class.zumba');

Route::get('/class/yoga', function () {
    return view('homepage.users.take_class.all_classes.yoga');
})->name('class.yoga');

Route::get('/class/bodybuilding', function () {
    return view('homepage.Users.Take_class.all_classes.body');
})->name('class.bodybuilding');

Route::get('/class/basicfitness', function () {
    return view('homepage.Users.Take_class.all_classes.basic_fitness');
})->name('class.basicfitness');

Route::get('/class/gymtraining', function () {
    return view('homepage.Users.Take_class.all_classes.gym_trainning');
})->name('class.gymtraining');

Route::get('/class/basicmuscle', function () {
    return view('homepage.Users.Take_class.all_classes.basic_muscle');
})->name('class.basicmuscle');


Route::post('/class/post', [ClassController::class, 'setClasses'])->name('class.set');
/** --------------------- */

/** --------------------
 *  User Dashboard
 * --------------------
 */

Route::get('/user_dash/gym_detail/{id}', function ($user_id) {
    $classes = Classes::where('user_id', $user_id)->get();
    return view('homepage\Users\user_dash\user_gym_detail', compact('classes'));
})->name('userdash.gym_detail')->middleware('auth');

Route::get('/user_dash/calender', function () {
    return view('homepage.Users.user_dash.calender');
})->name('userdash.gym_calender')->middleware('auth');

/**
 * Pricing *
 */

Route::get('/prices', function () {
    return view('homepage.users.take_class.price');
})->name('pricing');

Route::get('/setting_prices/{date}/{price}', function ($date = 1, $price = 0) {
    return view('homepage.Users.Take_class.confirm_price', compact('date', 'price'));
})->name('get.price')->middleware('auth');

Route::post('/prices/set', [PriceController::class, 'setPrice'])->name('set.price');
Route::post('/prices/update', [PriceController::class, 'updatePrice'])->name('update.price');