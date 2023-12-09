<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\DataDeletionInstructionController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index']);
Route::get('/{name}/privacy-policy', [PrivacyPolicyController::class, 'index']);

Route::get('/data-deletion-instruction', [DataDeletionInstructionController::class, 'facebook']);
Route::get('/{name}/data-deletion-instruction', [DataDeletionInstructionController::class, 'facebook']);
