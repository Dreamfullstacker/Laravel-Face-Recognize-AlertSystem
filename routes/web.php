<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/liveview', [App\Http\Controllers\HomeController::class, 'liveView'])->name('liveview');
Route::get('/total-matches', [App\Http\Controllers\HomeController::class, 'totalMatches'])->name('total-matches');

//delete on future
Route::get('/stores', [App\Http\Controllers\StoreController::class, 'index'])->name('stores');

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');
Route::get('/identify', [App\Http\Controllers\IdentifyController::class, 'index'])->name('identify');
Route::get('/verify', [App\Http\Controllers\VerifyController::class, 'index'])->name('verify');
Route::get('/alert', [App\Http\Controllers\AlertController::class, 'index'])->name('alert');
Route::get('/location', [App\Http\Controllers\LocationController::class, 'index'])->name('location');
Route::get('/import', [App\Http\Controllers\ImportController::class, 'index'])->name('import');
Route::get('/location-detail', [App\Http\Controllers\LocationController::class, 'detail'])->name('location-detail');

Route::get('/manage', [App\Http\Controllers\StoreController::class, 'manage'])->name('manage');
Route::get('/store-detail', [App\Http\Controllers\StoreController::class, 'detail'])->name('store-detail');
Route::get('/entrance', [App\Http\Controllers\StoreController::class, 'entrance'])->name('entrance');
Route::get('/poi', [App\Http\Controllers\AnalysisController::class, 'index'])->name('poi');
Route::get('/poi-manage', [App\Http\Controllers\AnalysisController::class, 'manage'])->name('poi-manage');
Route::get('/poi-new', [App\Http\Controllers\AnalysisController::class, 'detail'])->name('poi-new');
Route::get('/poi-all', [App\Http\Controllers\AnalysisController::class, 'entrance'])->name('poi-all');
Route::get('/poi-user', [App\Http\Controllers\AnalysisController::class, 'otheruser'])->name('poi-user');
Route::get('/poi-other', [App\Http\Controllers\AnalysisController::class, 'other'])->name('poi-other');


Route::get('google-autocomplete', [GoogleController::class, 'index']);


// Route::get('/', function () {
//     return redirect('index');
// });
/*
$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});

// Documentations pages
Route::prefix('documentation')->group(function () {
    Route::get('getting-started/references', [ReferencesController::class, 'index']);
    Route::get('getting-started/changelog', [PagesController::class, 'index']);
});

Route::middleware('auth')->group(function () {
    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
    });
});

Route::resource('users', UsersController::class);

Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
*/