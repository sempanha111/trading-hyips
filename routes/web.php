<?php

use App\Http\Controllers\Backend\ProgramController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Types\Relations\Role;

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'Index')->name('index');

    Route::get('/news', 'news')->name('news');
    Route::get('/directory', 'partners')->name('partners');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/support', 'support')->name('support');

    Route::get('/add_vote/{id}', 'add_vote')->name('add_vote');
    Route::post('/add_vote/{id}/send', 'add_vote_send')->name('add_vote_send');

    Route::get('/detail/{id}', 'detail')->name('detail');
    Route::post('/detail/{id}/send', 'detail_send')->name('detail_send');

    Route::get('/traffic/{id}', 'traffic')->name('traffic');
    Route::get('/whois/{id}', 'whois')->name('whois');

    Route::get('/scam/{id}', 'scam')->name('scam');

    Route::get('/code/{id}', 'code')->name('code');


    Route::get('/pfilter/{crypto}/type/', 'pfilter')->name('pfilter');


    Route::get('/{category}', 'category')->name('category');



});






//Backend
Route::get('admin/dashboard', function(){
    return view('Backend.index');
});

Route::controller(ProgramController::class)->group(function(){
    Route::get('/admin/program', 'admin_program_get')->name('admin_program_get');
    Route::post('/admin/program/add', 'admin_program_get_add')->name('admin_program_get_add');
});
