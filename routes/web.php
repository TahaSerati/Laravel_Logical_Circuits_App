<?php

use App\Http\Controllers\makebinarycontroller;
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

Route::get('/tail', function () {
    return view('tail');
});

// home
    Route::get('/', function () {
        return view('base');
    });
    Route::get('/home', function () {
        return view('base');
    });

// makeExccess-3
    Route::get('/makeExccess-3', function(){
        return view('makeExccess-3');
    });
    Route::POST('/makeExccess-3', [makebinarycontroller::class , 'makeexpress_3']);

// make BCD
    Route::get('/makeBCD', function(){
        return view('makeBCD');
    });
    Route::POST('/makeBCD', [makebinarycontroller::class , 'makeBCD']);

// make Gray 
    Route::get('/makeGray', function(){
        return view('makeGray');
    });
    Route::POST('/makeGray', [makebinarycontroller::class , 'makeGray']);

// makeDes
    Route::get('/makeDes', function(){
        return view('makeDes');
    });
    Route::POST('/makeDes', [makebinarycontroller::class , 'makeDes']);

// base
    Route::get('/changeBase', function(){
        return view('base');
    });
    Route::POST('/changeBase', [makebinarycontroller::class , 'changeBase']);

// karnaugh
    Route::get('/karnaugh', function(){
        return view('karnaugh');
    });
    Route::POST('/karnaugh', [makebinarycontroller::class , 'karnaugh']);

// karnaugh-two
    Route::get('karnaugh-two', function(){
        return view('karnaugh-two');
    });
    Route::POST('karnaugh-two', [makebinarycontroller::class , 'karnaugh_two']);

// karnaugh-three
    Route::get('karnaugh-three', function(){
        return view('karnaugh-three');
    });
    Route::POST('karnaugh-three', [makebinarycontroller::class , 'karnaugh_three']);

// karnaugh-three
    Route::get('karnaugh-four', function(){
        return view('karnaugh-four');
    });
    Route::POST('karnaugh-four', [makebinarycontroller::class , 'karnaugh_four']);


// karnaugh-three
    Route::get('decoder', function(){
        return view('decoder');
    });
    Route::POST('decoder', [makebinarycontroller::class , 'decoder']);

// karnaugh-three
    Route::get('addition', function(){
        return view('addsub');
    });
    Route::POST('addition', [makebinarycontroller::class , 'addition']);

// Auth
Auth::routes();



// Student-essays 
    Route::get('Student-essays', function(){
        return view('Student-essays');
    });
    Route::POST('Student-essays', [makebinarycontroller::class , 'Student_essays']);


// book 
    Route::get('book/index ', function(){
        return view('book.index');
    });
    Route::POST('book/index', [makebinarycontroller::class , 'book.index']);








// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
