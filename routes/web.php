<?php

use App\Http\Controllers\cockTail;
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
route::get('json1', [cockTail::class, 'json1'])->name('index');
route::get('json2', [cockTail::class,'json2'])->name('json2');
