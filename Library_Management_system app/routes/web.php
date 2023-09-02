<?php

use App\Http\Controllers\{
    BooksController,
    AuthController,
    UserController
};

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('AdminViews.Borrowed_books');
});


//Route::match(['get','post'],'Register/',[AuthController::class,'sign_up'])->name('sign_up');
//Route::match(['post','get'],'Login/',[AuthController::class,'Login'])->name('login');

Route::get('New-user/',[AuthController::class,'new_user'])->name('sign_up');
Route::post('create-profile',[AuthController::class,'sign_up'])->name('create_profile');
Route::post('Login',[AuthController::class,'Login_action'])->name('login_action');
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
#BOOK ISSUING

Route::middleware('auth')->group(function(){

    #RESOURCES
    Route::resource('Book',BooksController::class);
    Route::resource('User',UserController::class);
    Route::get('find-book',[BooksController::class,'find_book'])->name('find_book');
    Route::post('search-library',[BooksController::class,'search_book'])->name('search_book');
    Route::post('category/save',[CategoryController::class,'save_category'])->name('addcategory');
    Route::get('Category/',[CategoryController::class,'add_category'])->name('viewcategory');
    Route::post('request-book/{id}',[BooksController::class,'request_book'])->name('request_book');

    //ADMIN ROUTES
    Route::prefix('Admin')->group(function(){

        Route::middleware('isadmin')->group(function()
    {
        Route::get('/home',[AdminController::class,'home'])->name('AdminHome');
        Route::get('/search-books',[BooksController::class,'find_book'])->name('admin_search_book');
        Route::get('/book-requests',[AdminController::class,'book_requests'])->name('RequestedBooks');
        Route::get('/borrowed-books',[AdminController::class,'borrowed_books'])->name('BorrowedBooks');
        Route::get('/search-users',[AdminController::class,'search'])->name('search_user');
        Route::post('/search-user',[AdminController::class,'search_user'])->name('query_users');
        Route::put('/approve-request/{request_id}',[AdminController::class,'approve_book_request'])->name('approve_book_request');
        Route::put('/return-book/{request_id}',[AdminController::class,'return_book'])->name('return_book');
        
    });
    
    }
    );

});






### POST /borrow/{id}