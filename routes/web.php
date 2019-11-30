<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::prefix('/')->name('frontend.')->group(function (){

    Route::get('homepage', 'LoginNRegistercontroller@Homepage');
    Route::get('faq', 'LoginNRegistercontroller@FeqQ');
    Route::get('contact', 'LoginNRegistercontroller@Contact');
    Route::get('about', 'LoginNRegistercontroller@About');
    Route::get('staff', 'LoginNRegistercontroller@Staff');
    Route::get('blogs', 'LoginNRegistercontroller@Blog');
    Route::get('profileuser',"profilecontroller@profileuser");

    Route::post('logindata',"LoginNRegistercontroller@loginfun");
    Route::post('registerdata',"LoginNRegistercontroller@registerfun");
    Route::get('LoginView',"LoginNRegistercontroller@Login_ReView");
    Route::post('UpdatUser/{id}',"LoginNRegistercontroller@UpdatUser");


    Route::get('Logout/{id}', function ($id) {
        Session::flush($id);
        return redirect('/LoginView');
    });

    Route::get('services',"LoginNRegistercontroller@service")->name('services');
    Route::get('StuViewReg',"StudentRecontroller@studentRview");
    Route::post('StuReg',"StudentRecontroller@studentR");
    Route::post('Studelete/{id}',"StudentRecontroller@studentdelete");



    Route::post('ArticleReg',"ArticleRecontroller@ArticleReg");
    Route::post('Blodelete/{id}',"ArticleRecontroller@ArticleDelete");

    Route::get('NurseryViewReg',"NurseryRecontroller@NurseryRview");
    Route::post('NurseryReg',"NurseryRecontroller@NurseryR");
    Route::post('Nurdelete/{id}',"NurseryRecontroller@NurseryDetete");


    Route::get('SectionViewReg',"SectionRecontroller@SectionViewReg");
    Route::post('SectionReg',"SectionRecontroller@SectionR");
    Route::post('Secdelete/{id}',"SectionRecontroller@SectionDelete");

    Route::post('QuestionReq',"QuestionRcontroller@QuestionReq");
    Route::post('/QuAndelete/{idq}/{ida}',"QuestionRcontroller@QuestionAnsDele");
});
Auth::routes();
