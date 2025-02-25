<?php
use App\Http\Controllers\SheresController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IsticharaController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MomoberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArbahController;
use App\Http\Controllers\TalabsahabController;
use App\Http\Controllers\TranslationMonyController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

Route::get('/articles', function () {
    return view('site2.articles');
});
/* Route::get('/article', function ($id) {
    return view('site2.article');
});  */
Route::get('/article/{id}', [HomeController::class, 'article'])->name('article');






//-----------------------------------------------
Route::get('/contact', function () {
    return view('site2.contact');
});
Route::get('/', function () {
    return view('site2.index');
});
/* Route::get('/', [PagesController::class, 'index']); */
Route::get('/pos/{id}', [PagesController::class,'index2'])->name('pos');

Route::get('/pp', function () {
    return view('site.makatal');
});

Route::get('/aricles', function () {
    return view('site.makatal');
});
Route::get('/lv', function () {
    return view('livewire.counter');
});
 
 /* Route::get('/', function () {
    return view('welcome');
});  */

Route::get('/Language/{locale}', function ($locale) {
if(in_array($locale,['ar','en'])){

session()->put('locale',$locale);

}

return  redirect()->back();
})->name('lng');
	



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
require __DIR__.'/adminauth.php';


 Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'my_profile'])->name('profile.edit');
    Route::get('/profile/update', [ProfileController::class, 'update_my_profile'])->name('profile.update');
   Route::post('/edite/profiles', [ProfileController::class, 'edite_profiles']);
   Route::get('/password/update', [ProfileController::class, 'update_my_password']);
   Route::post('/edite/password', [ProfileController::class, 'edite_password']);



}); 

    Route::middleware('auth:web')->group(function () {
/*         Route::get('/my_momber', [MomoberController::class, 'create']);
        Route::get('/buy_shares', [SheresController::class, 'sheres']);
        Route::post('/buy', [SheresController::class, 'insert'])->name('buy');
Route::post('/buy', [SheresController::class, 'insert'])->name('buy');
Route::get('/t', [ArbahController::class, 'index']); */

/* Route::get('/my_earnings', [ArbahController::class, 'my_earnings']);
Route::get('/withdrawal', [ArbahController::class, 'talab_sahab']);
Route::post('/withdrawals', [TalabsahabController::class, 'saheb'])->name('withdrawals');
//--------------------------add user-------------------------------
Route::get('/add/momber', [MomoberController::class, 'talab_add_user']);

Route::get('/arrow', [SheresController::class, 'arrow'])->name('arrow');
Route::get('/tm', [TranslationMonyController::class, 'translation_mony']);
Route::post('/tms', [TranslationMonyController::class, 'tmss'])->name('tms');
Route::get('/details', [ArbahController::class, 'details_1'])->name('details');
Route::get('/details_', [ArbahController::class, 'details_2'])->name('details_');
//------------------ktoba---S------------------------
Route::get('/books', [BookController::class, 'show_books'])->name('books'); */
Route::get('/messages', [MessageController::class, 'messages']);
Route::get('/message', [MessageController::class, 'message']);
Route::post('/snd_msg', [MessageController::class, 'send_msg']);
Route::get('/show_message/{id}', [MessageController::class, 'show_message']);

Route::get('/messages_send/{id}', [MessageController::class, 'messag']);
//-----------------------------yoma------------------------------
Route::get('/consultation', [IsticharaController::class, 'index']);
Route::post('/consultation', [IsticharaController::class, 'istichara']);
Route::get('/consultations', [IsticharaController::class, 'my_con']);
Route::get('/details/{id}', [IsticharaController::class, 'details']);

});

Route::middleware('auth:admin')->group(function () {
    /* Route::get('/upload-file', [BookController::class, 'add_books']);
    Route::post('/upload-file', [BookController::class, 'fileUpload'])->name('fileUpload');
  //----------------------add_user---------------------------
  Route::get('/add/mombers', [MomoberController::class, 'admin_add_user']);
Route::post('/addmomberss', [MomoberController::class, 'admins_add_user'])->name('addmombers');
Route::get('/active/mombers', [MomoberController::class, 'admin_active_user']);

Route::get('/valide_mombers', [MomoberController::class, 'admins_valide_mombers']);
Route::get('/v_mombers/{id}', [MomoberController::class, 'v_mombers'])->name('active_mombers');
Route::get('/hide_mombers', [MomoberController::class, 'admins_hide_mombers']);
Route::get('/no_v_mombers/{id}', [MomoberController::class, 'hide_mombers']);
//----------------------talab sahab active----------------------------
Route::get('/valide_saheb', [ArbahController::class, 'admins_valide_saheb']);
Route::get('/talab_sahb/{id}', [ArbahController::class, 'talab_sahb']);
Route::get('/no_valide_sahb/{id}', [ArbahController::class, 'no_valide_sahb']);
//-------------------buy sheres------------------------------------
Route::get('/buy_sheres', [SheresController::class, 'admins_buy_sheres']);
Route::post('/buy_shrs', [SheresController::class, 'admins_buy_shrs']);
//-----------------------stattistic momber------------------------------
Route::get('/statistic_momber', [MomoberController::class, 'statistic_momber']);
Route::get('/pass_momber', [MomoberController::class, 'pass_momber']);
Route::post('/chang_pass_momber', [MomoberController::class, 'chang_pass_momber']);
//-----------------------transfir_valide_mony------------------------------
Route::get('/valide_trnfir_mony', [ArbahController::class, 'valide_trnfir_mony']);
Route::get('/talab_transfir/{id}', [ArbahController::class, 'talab_transfir']);
Route::get('/no_valide_tr/{id}', [ArbahController::class, 'no_valide_tr']); */
//-----------------------------yoma------------------------------
Route::get('/admin/consultations', [AdminController::class, 'index']);
Route::get('/admin/add_article', [AdminController::class, 'article']);
Route::post('/add_arc', [IsticharaController::class, 'add_arc'])->name('add_arc');

//-----------------------------admin profile------------------------------
Route::get('/admin/profile', [ProfileController::class, 'my_profile_ad'])->name('profile.edit_ad');
Route::get('/admin/profile/update', [ProfileController::class, 'update_my_profile_ad'])->name('profile.update_ad');
Route::post('/admin/edite/profiles', [ProfileController::class, 'edite_profiles_ad']);
Route::get('/admin/password/update', [ProfileController::class, 'update_my_password_ad']);
Route::post('/admin/edite/password', [ProfileController::class, 'edite_password_ad']);
//-----------------------------------------------------------

Route::get('/admin/show', [AdminController::class, 'showe']);
Route::get('/admin/consultations-parfait', [IsticharaController::class, 'parfait']);
Route::get('/admin/con-delete/{id}', [IsticharaController::class, 'delete']);
Route::get('/admin/con-update/{id}', [IsticharaController::class, 'update']);

Route::get('/show/{id}', [AdminController::class, 'admins_show'])->name('show');
Route::post('/send/{id}', [IsticharaController::class, 'send'])->name('active_mombers');
});
Route::post('/send_message', [MessageController::class, 'send_message']);

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');

