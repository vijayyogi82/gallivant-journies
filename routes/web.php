<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TourlocationController;
use App\Http\Controllers\Admin\TourcategoryController;
use App\Http\Controllers\Admin\TourdetailsController;
use App\Http\Controllers\Admin\SocialmediaController;
use App\Http\Controllers\Admin\TourdetailGallaryController;

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

//user  
Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('tour_detail/{category_name}/{tour_name}/{id}', [HomeController::class, 'tour_detail'])->name('tour_detail');
Route::get('tour_listing', [HomeController::class, 'tour_listing'])->name('tour_listing');
Route::get('login', [HomeController::class, 'login'])->name('login');


//admin
Route::prefix('admin')->group(function () {

  Route::get('/', function () {
    return redirect()->route('admin.login');
  });

  Route::get('login', [LoginController::class, 'index'])->name('admin.login');
  Route::post('login', [LoginController::class, 'admin_login'])->name('adminlogin');
  Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/dashboard', function () {
      return view('admin.dashboard');
    })->name('admin.dashboard');

    // Auth admin login
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');

    // tour category
    Route::resource('tourcategory', TourcategoryController::class);
    Route::match(['post', 'get'], 'tourcategory/delete/{id}', [TourcategoryController::class, 'delete'])->name('tourcategory.delete');
    Route::get('tourcategory/update_status/{id}', [TourcategoryController::class, 'update_status'])->name('tourcategory.update_status');

    // tour location
    Route::resource('tourlocation', TourlocationController::class);
    Route::match(['post', 'get'], 'tourlocation/delete/{id}', [TourlocationController::class, 'delete'])->name('tourlocation.delete');
    Route::get('tourlocation/update_status/{id}', [TourlocationController::class, 'update_status'])->name('tourlocation.update_status');

    // tour details
    Route::resource('tourdetail', TourdetailsController::class);
    Route::match(['post', 'get'], 'tourdetail/delete/{id}', [TourdetailsController::class, 'delete'])->name('tourdetail.delete');
    Route::get('tourdetails/update_status_popular/{id}', [TourdetailsController::class, 'update_status_popular'])->name('tourdetails.update_status_popular');
    Route::get('tourdetails/update_status_top_adventures/{id}', [TourdetailsController::class, 'update_status_top_adventures'])->name('tourdetails.update_status_top_adventures');
    Route::get('tourdetails/update_status_featured/{id}', [TourdetailsController::class, 'update_status_featured'])->name('tourdetails.update_status_featured');


    // social media
    Route::resource('socialmedia', SocialmediaController::class);
    Route::match(['post', 'get'], 'socialmedia/delete/{id}', [SocialmediaController::class, 'delete'])->name('socialmedia.delete');
  });
});



Route::get('cmd', function (Request $request) {
  Illuminate\Support\Facades\Artisan::call($request->cmd);
  return $request->cmd . " created.";
});
