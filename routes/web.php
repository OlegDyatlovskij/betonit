<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\RecordController;
use App\Models\Users;

Route::get('/', [RecordController::class, 'fillMainIndex'])->name('main.index');

Route::get('/privacy-policy', [RecordController::class, 'fillPrivacyPolicy']);

Route::get('/admin', function () {
    $action = 'home';
    return view('layouts.admin', ['action' => $action]);
})->name('admin.panel');

Route::get('/{table}/{action}/{errorMessage?}', [TableController::class, 'showForm'])->name('table.action');

Route::get('/updateForm/{table}/{id}/{updateRecord}/{errorMessage?}', [TableController::class, 'showUpdateForm'])->name('form.update');
// for adminPanel
Route::post('/{table}/record/create', [RecordController::class, 'create'])->name('record.create'); 
// для заказа презентации
Route::post('/{table}/{main}/record/create', [RecordController::class, 'create'])->name('user.create'); 

Route::put('/record/update/{id}/{table}', [RecordController::class, 'update'])->name('record.update');

Route::delete('/record/delete/{id}/{table}', [RecordController::class, 'delete'])->name('record.delete');

route::get('/test', function (){
    Users::getAllId();
});

Route::fallback(function () {
    return view('404');
});