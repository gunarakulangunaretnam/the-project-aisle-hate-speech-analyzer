<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatabaseController;

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

Route::get('/',[PageController::class, 'ViewLoginPageController']);

Route::POST('/handle-login', [UserController::class, 'HandleLogin']);

Route::GET('/handle-logout', [UserController::class, 'HandleLogout']);

Route::GET('/view-dashboard', [PageController::class, 'ViewDashboardPageController']);

Route::GET('/view-change-password-page', [PageController::class, 'ViewChangePasswordController']);

Route::POST('/change-password', [UserController::class, 'ChangePassword']);

Route::GET('/view-keyword-management', [PageController::class, 'ViewKeywordManagementController']);

Route::GET('/view-context-management', [PageController::class, 'ViewContextManagementController']);

Route::POST('/insert-context-data', [DatabaseController::class, 'InsertContextData']);

Route::GET('/delete-context-data/{auto_id}', [DatabaseController::class, 'DeleteContextDataController']);

Route::POST('/insert-keyword-data', [DatabaseController::class, 'InsertKeywordDataController']);

Route::GET('/delete-keyword-data/{auto_id}', [DatabaseController::class, 'DeleteKeywordDataController']);

Route::GET('/view-social-media-management', [PageController::class, 'ViewSocialMediaManagementController']);

Route::POST('/insert-social-media-data', [DatabaseController::class, 'InsertSocialMediaDataController']);

Route::GET('/delete-social-media-data/{auto_id}', [DatabaseController::class, 'DeleteSocialMediaDataController']);

Route::GET('/view-social-media-data-edit-page/{auto_id}', [PageController::class, 'ViewSocialMediaDataEditPageController']);
