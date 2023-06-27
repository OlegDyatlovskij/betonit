<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;
use App\Http\Controllers\RecordController;


/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/admin', function () {
    $home = true;
    return view('layouts.admin', ['home' => $home]);
});

Route::get('/', [RecordController::class, 'fillMainIndex'])->name('main.index');

Route::get('/{table}/{action}', [TableController::class, 'showForm'])->name('table.action');

Route::get('/updateForm/{table}/{id}/{updateRecord}', [TableController::class, 'showUpdateForm'])->name('form.update');

Route::post('/{table}/record/create', [RecordController::class, 'create'])->name('record.create'); // for adminPanel

Route::post('/{table}/{main}/record/create', [RecordController::class, 'create'])->name('user.create'); // для заказа презентации

Route::put('/record/update/{id}/{table}', [RecordController::class, 'update'])->name('record.update');

Route::delete('/record/delete/{id}/{table}', [RecordController::class, 'delete'])->name('record.delete');


route::get('/test', function () {
    $timezone = date_default_timezone_get();
    return $timezone;
});
/*Route::get('/admin', function () {
    return view('layouts.admin');
});*/



Route::fallback(function () {
    return view('404');
});