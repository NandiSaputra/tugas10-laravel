<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LaporanController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TransaksiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\menu\MenuController;
use App\Http\Controllers\menu\SubmenuController;
use App\Http\Controllers\menu\SubsubmenuController;
use App\Http\Controllers\menu\SubsubsubmenuController;
use App\Http\Controllers\NexmoSMSController;
use App\Http\Controllers\role\RoleController;
use App\Http\Controllers\sales\DashboardSalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DataadminController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\GroupsController;

// use ADMINISTRATOR

use App\Http\Controllers\user\PasswordController;
use App\Http\Controllers\user\UserVerifyController;

// pegawai
use Illuminate\Support\Facades\Route;

// end use kepala rungan

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
//route Groups
/*
Route::get('/groups', [GroupsController::class, 'index']);
Route::get('/groups/create', [GroupsController::class, 'create']);
Route::post('/groups', [GroupsController::class, 'store']);
Route::get('/groups/{id}/edit', [GroupsController::class, 'edit']);
Route::put('/groups/{id}', [GroupsController::class, 'update']);
*/

Route::resources([
    'friends' => FriendsController::class,
    'groups' => GroupsController::class,
]);
Route::get('/groups/addmember/{group}', [GroupsController::class, 'addmember']);

Route::put('/groups/addmember/{group}', [GroupsController::class, 'updateaddmember']);

Route::put('/groups/deleteaddmember/{group}', [GroupsController::class, 'deleteaddmember']);




// Rooute Friends
/*
Route::get('/friends', [FriendsController::class, 'index']);
Route::get('/friends/create', [FriendsController::class, 'create']);
Route::post('/friends', [FriendsController::class, 'store']);
Route::get('/friends/{id}', [FriendsController::class, 'show']);
Route::get('/friends/{id}/edit', [FriendsController::class, 'edit']);
Route::put('/friends/{id}', [FriendsController::class, 'update']);
*/



Route::get('/', [DataadminController::class, 'index']);

Route::get('/notauthorized', [UserController::class, 'notauthorized']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgotpassword', [AuthController::class, 'forgotpassword'])->name('forgotpassword');
Route::post('/register', [AuthController::class, 'registerAdd'])->name('register');
Route::middleware(['login'])->group(function () {
    Route::resource('/login', AuthController::class);
    Route::resource('/auth', AuthController::class);
});

Route::get('sendSMS', [NexmoSMSController::class, 'index']);

Route::resource('/password', PasswordController::class);
Route::get('/verify/{token}/{email}', [AuthController::class, 'verified']);

//Route Groups Admin

Route::middleware(['Admin'])->group(function () {

    Route::resource('/menu', MenuController::class);
    Route::resource('/sub_menu', SubmenuController::class);
    Route::resource('/sub_sub_menu', SubsubmenuController::class);
    Route::resource('/sub_sub_sub_menu', SubsubsubmenuController::class);
    Route::resource('/user', UserController::class);
    Route::resource('/role', RoleController::class);
    Route::post('/access', [RoleController::class, 'access'])->name('access');

    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/laporan', LaporanController::class);
    Route::get('/laporan/{dari}/{ke}', [LaporanController::class, 'laporan']);
    Route::get('/print/{dari}/{ke}', [LaporanController::class, 'print']);
    Route::resource('/transaksi', TransaksiController::class);
    Route::get('/transaksi/create/{tgl}', [TransaksiController::class, 'create']);

    Route::get('/salesdetail/{id}/{dari}/{ke}', [SettingsController::class, 'salesdetail']);
    Route::post('/salesdetail', [SettingsController::class, 'filtersales']);
    Route::resource('/settings', SettingsController::class);
    Route::get('/editinvoice/{id}', [TransaksiController::class, 'editinvoice']);
    Route::get('/noinvoice/{id}', [TransaksiController::class, 'noinvoice']);
    Route::get('/printinvoice/{id}', [TransaksiController::class, 'printinvoice']);
    Route::get('/chart', [TransaksiController::class, 'chart']);

    Route::resource('/user_verify', UserVerifyController::class);
    Route::get('/user_verify_role/{role_id}/{users_id}', [UserVerifyController::class, 'user_change_role']);

    //export
    Route::resource('/exportabsenharianguru', ExportController::class);
    Route::get('/exportabsenharianguru', [ExportController::class, 'exportabsenharianguru']);
    Route::get('/exportabsenharianguruhistory/{dari}/{ke}', [ExportController::class, 'exportabsenharianguruhistory']);
    Route::get('/exportabsenhariansiswa', [ExportController::class, 'exportexportabsenhariansiswa']);
    Route::get('/exportabsenhariansiswahistory/{dari}/{ke}', [ExportController::class, 'exportabsenhariansiswahistory']);
});

// End kepala Ruangan

//Route Groups User

Route::middleware(['User'])->group(function () {
    Route::resource('/home', DashboardSalesController::class);
    Route::get('/komisi/{dari}/{ke}', [DashboardSalesController::class, 'komisi']);
    Route::get('/jadwal', [DashboardSalesController::class, 'jadwal']);
    Route::resource('/user', UserController::class);
    Route::resource('/transaksi', TransaksiController::class);
    Route::get('/transaksi/create/{tgl}', [TransaksiController::class, 'create']);
});
