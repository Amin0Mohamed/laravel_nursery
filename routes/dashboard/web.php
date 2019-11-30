<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('/index',"DashboardController@index")->name('index');
    Route::resource('users', 'UserController');

    Route::post('/loginadmin','Admincontroller@login')->name('loginadmin');
    Route::post('/registeradmin','Admincontroller@register')->name('registeradmin');
    Route::get('/registeradminview','Admincontroller@registerview');
    Route::get('/loginadminview','Admincontroller@loginview');

    Route::resource('supervisors','supervisorsController');
    Route::resource('Nursery', 'NurserysController');
    Route::resource('Students', 'StudentsController');
    Route::resource('Questions', 'QuestionsController');
    Route::resource('Sections','SectionsController');
    Route::resource('Articals','ArticalsController');
    Route::resource('Answers','AnswersController');
    Route::get('ReplyQ/{qid}/{ownerID}','ReplayRecontroller@Replayview');
    Route::post('Replydata','ReplayRecontroller@Replaydata');
    Route::resource('advertising','advertisController');

    Route::get('/logoutpage','Admincontroller@logoutpage');
});
