<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/',[TodoListController::class, 'index'])->name('home');;

Route::get('/doneItemsRoute',[TodoListController::class, 'doneItems'])->name('doneItems');;



Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem'); // save new items

Route::post('/completeRoute/{id}', [TodoListController::class, 'complete'])->name('complete'); //set items complete



Route::post('/EditRoute/{id}', [TodoListController::class, 'Edit'])->name('Edit'); //for edit Items

Route::post('/updateItemRoute/{id}', [TodoListController::class, 'updateItem'])->name('updateItem'); //save the edited items

Route::post('/UnCompleteRoute/{id}', [TodoListController::class, 'UnComplete'])->name('UnComplete'); //set items UnComplete
