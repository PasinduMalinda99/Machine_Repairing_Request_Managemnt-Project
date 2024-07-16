<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RepairRequestController;
use App\Http\Controllers\ProductController;
use App\Models\Gallary;
use App\Models\Product;

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
    return view('index');
});


Route::controller(AuthController::class)->group(function(){

    Route::get('sign_up', 'sign_up')->name('sign_up');
    Route::post('sign_up', 'sign_upSave')->name('sign_up.save');

    Route::get('sign_in', 'sign_in')->name('sign_in');
    Route::post('sign_in', 'sign_inAction')->name('sign_in.action');

    Route::get('logout','logout')->middleware('auth')->name('logout');

    Route::get('forgot_password', 'forgot_password')->name('forgot_password');
    Route::post('forgot_password_act', 'forgot_password_act')->name('forgot_password_act');

    Route::get('validate_forgot_password/{token}', 'validate_forgot_password')->name('validate_forgot_password');
    Route::post('validate_forgot_password_act', 'validate_forgot_password_act')->name('validate_forgot_password_act');
});


//Normal Users Routes List

Route::middleware(['auth', 'user-access:user'])->group(function () {


    // Start View User Dashboard -------->

    Route::get('/user_home', [HomeController::class, 'index'])->name('user_home');

    Route::get('/user/user_index', [UserController::class, 'user_index'])->name('user/user_index');



    // Start View User Profile -------->

    Route::get('/user/user_profile', [UserController::class, 'user_profile'])->name('user/user_profile');



    // Start Users Request View & Send -------->

    Route::get('/user/user_request', [RepairRequestController::class, 'user_request'])->name('user/user_request');

    Route::post('/user/user_request_store', [RepairRequestController::class, 'user_request_store'])->name('user/user_request_store');

    Route::get('/user/user_view_request', [UserController::class, 'user_view_request'])->name('user/user_view_request');

    Route::get('/user/user_view_sent_request/{id}', [RepairRequestController::class, 'user_view_sent_request'])->name('user/user_view_sent_request');

    Route::delete('/user/user_view_request_delete/{id}', [RepairRequestController::class, 'user_view_request_delete'])->name('user/user_view_request_delete');



    // Start Users Products View -------->

    Route::get('/user/user_products', [ProductController::class, 'user_products'])->name('user/user_products');

    Route::get('/user/user_view_products/{id}', [ProductController::class, 'user_view_products'])->name('user/user_view_products');



    // Start View About Company -------->

    Route::get('/user/user_about', [UserController::class, 'user_about'])->name('user/user_about');

});

//Admin Routes List

Route::middleware(['auth', 'user-access:admin'])->group(function () {


    // Start View Admin Dashboard -------->

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/admin_index', [AdminController::class, 'admin_index'])->name('admin/admin_index');



    // Start Admin View Request & delete -------->

    Route::get('/admin/admin_view_request', [RepairRequestController::class, 'admin_view_request'])->name('admin/admin_view_request');

    Route::get('/admin/admin_view_full_request/{id}', [RepairRequestController::class, 'admin_view_full_request'])->name('admin/admin_view_full_request');

    Route::delete('/admin/admin_view_request_delete/{id}', [RepairRequestController::class, 'admin_view_request_delete'])->name('admin/admin_view_request_delete');



    // Update request status

    Route::get('/admin/approve_request/{id}', [RepairRequestController::class, 'approve_request']);

    Route::get('/admin/reject_request/{id}', [RepairRequestController::class, 'reject_request']);

    Route::get('/admin/on_process_request/{id}', [RepairRequestController::class, 'on_process_request']);

    Route::get('/admin/complete_request/{id}', [RepairRequestController::class, 'complete_request']);



    // Start Product upload, view, delete & edit  -------->

    Route::get('/admin/admin_update_products', [ProductController::class, 'admin_update_products'])->name('admin/admin_update_products');

    Route::get('/admin/admin_add_products', [ProductController::class, 'admin_add_products'])->name('admin/admin_add_products');

    Route::post('/admin/admin_add_products_store', [ProductController::class, 'admin_add_products_store'])->name('admin/admin_add_products_store');

    Route::get('/admin/admin_view_product/{id}', [ProductController::class, 'admin_view_product'])->name('admin/admin_view_product');

    Route::get('/admin/admin_edit_products/{id}', [ProductController::class, 'admin_edit_products'])->name('admin/admin_edit_products');

    Route::put('/admin/admin_edit_products/{id}', [ProductController::class, 'update'])->name('admin/admin_edit_products/update');

    Route::delete('/admin/admin_update_products_delete/{id}', [ProductController::class, 'admin_update_products_delete'])->name('admin/admin_update_products_delete');



    // Start Gallery upload & delete -------->

    Route::get('/admin/admin_update_gallery', [AdminController::class, 'admin_update_gallery'])->name('admin/admin_update_gallery');

    Route::post('/admin/admin_upload_gallery', [AdminController::class, 'admin_upload_gallery'])->name('/admin/admin_upload_gallery');

    Route::get('/admin/delete_admin_upload_gallery/{id}', [AdminController::class, 'delete_admin_upload_gallery'])->name('admin/delete_admin_upload_gallery');



    // Start Manage Users View & delete -------->

    Route::get('/admin/admin_manage_user', [UsersController::class, 'admin_manage_user'])->name('admin/admin_manage_user');

    Route::get('/admin/admin_manage_user_view/{id}', [UsersController::class, 'admin_manage_user_view'])->name('admin/admin_manage_user_view');

    Route::delete('/admin/admin_manage_user_delete/{id}', [UsersController::class, 'admin_manage_user_delete'])->name('admin/admin_manage_user_delete');


});


// Start Normal Web Routes -------->

Route::get('/index', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/products', function () {
    $product = Product::all();
    return view('products', compact('product'));
});

Route::get('/view_products/{id}', function ($id) {
    $product = Product::find($id);
    return view('view_products', compact('product'));
})->name('view_products');

Route::get('/gallery', function () {
    $gallary = Gallary::all();
    return view('gallery', compact('gallary'));
});

Route::get('/contact', function () {
    return view('contact');
});



/*
Route::get('/sign_in', function () {
    return view('auth/sign_in');
});*/

