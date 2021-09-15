<?php

use Illuminate\Support\Facades\Route;
use App\Charts\UserChart;
use App\Models\Desine;
use App\Models\Contact;
use App\Http\Controllers\DesineController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admincontroller;
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

Route::get('/', function () {
    return view('index');
});
Route::get('123', function () {
    return view('auth.login');
});
Route::get('home',[admincontroller::class,'dash'])->name('dashboard2');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

//Route::get('usergraph', [UserChartController::class,'index']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [admincontroller::class, 'index3'])->name('home');
Route::get('/',[DesineController::class,'index1'])->name('home');
//Route::get('addlogin',[DesineController::class,'log'])->name('loge');

Route::get('id',[DesineController::class,'id'])->name('id');
Route::get('program',[DesineController::class,'program'])->name('program');
Route::get('tasweq',[DesineController::class,'tasweq'])->name('tasweq');
Route::get('talab',[DesineController::class,'talab'])->name('talab');


Route::get('sendemail',[DesineController::class,'sendemaile'])->name('send.email');
Route::get('showcontact',[DesineController::class,'showcontact'])->name('show.contact');
Route::post('store\contact',[DesineController::class,'contactstore'])->name('admin.contact');




Route::get('logout',[DesineController::class,'logout'])->name('user.exit');
Route::post('store\talab',[DesineController::class,'talabstore'])->name('admin.talab');


Route::get('sendemaile',[MailController::class,'maile']);
Route::post('send-messgae',[MailController::class,'sendemaile'])->name('send.message');




//Admin Route

Route::group(['prefix'=>'admin','namespace'=>'Controllers'],function()
{

 //dash
//Route::get('dashboard1',[admincontroller::class,'dash'])->name('dashboard1');

//contact us
Route::get('showcontact',[admincontroller::class,'showcontact'])->name('show.contact');

//users
Route::get('showuser',[admincontroller::class,'showuser'])->name('seeusers');

Route::get('users-edit\{id}',[admincontroller::class,'usersedit'])->name('usersedit');
Route::Post('users-update\{id}',[admincontroller::class,'usersupdate'])->name('usersupdate');
Route::get('user-delete\{id}',[admincontroller::class,'userdestroy'])->name('userdestroy');

//desine
Route::get('add\product',[DesineController::class,'adpro'])->name('add.product');
Route::post('store\product',[DesineController::class,'store'])->name('admin.product');
Route::get('showdesine',[admincontroller::class,'showdesine'])->name('show.desine');
Route::get('editdesine\{id}',[admincontroller::class,'editdesine'])->name('edit.desine');
Route::post('updatedesine\{id}',[admincontroller::class,'updatedesine'])->name('update.desine');
Route::get('deletedesine\{id}',[admincontroller::class,'desinedestroy'])->name('delete.desine');

//talab
Route::get('showtalab',[admincontroller::class,'showtalab'])->name('show.talab');
Route::get('edittalab\{id}',[admincontroller::class,'edittalab'])->name('edit.talab');
Route::post('updatetalab\{id}',[admincontroller::class,'updatetalab'])->name('update.talab');
Route::get('deletetalab\{id}',[admincontroller::class,'talabdestroy'])->name('delete.talab');

//baqa
Route::get('addbaqa',[admincontroller::class,'showbaqa1'])->name('add.baqa');
Route::get('showbaqa',[admincontroller::class,'showbaqa'])->name('show.baqa');
Route::post('storebaqa',[admincontroller::class,'storebaqa'])->name('admin.baqa');
Route::get('editbaqa\{id}',[admincontroller::class,'baqaedit'])->name('edit.baqa');
Route::post('updatebaqa\{id}',[admincontroller::class,'baqaupdate'])->name('update.baqa');
Route::get('deletebaqa\{id}',[admincontroller::class,'baqadestroy'])->name('delete.baqa');

//programs
Route::get('addprograms',[admincontroller::class,'showprog1'])->name('add.prog');
Route::get('showprograms',[admincontroller::class,'showprog'])->name('show.prog');
Route::post('storeprograms',[admincontroller::class,'storeprog'])->name('admin.prog');
Route::get('editprograms\{id}',[admincontroller::class,'progedit'])->name('edit.prog');
Route::post('updateprograms\{id}',[admincontroller::class,'progupdate'])->name('update.prog');
Route::get('deleteprograms\{id}',[admincontroller::class,'progdestroy'])->name('delete.prog');

//tasweq
Route::get('addtasweq',[admincontroller::class,'showtas1'])->name('add.tas');
Route::get('showtasweq',[admincontroller::class,'showtas'])->name('show.tas');
Route::post('storetasweq',[admincontroller::class,'storetas'])->name('admin.tas');
Route::get('edittasweq\{id}',[admincontroller::class,'tasedit'])->name('edit.tas');
Route::post('updatetasweq\{id}',[admincontroller::class,'tasupdate'])->name('update.tas');
Route::get('deletetasweq\{id}',[admincontroller::class,'tasdestroy'])->name('delete.tas');

//upload video

Route::get('addvedio',[admincontroller::class,'showv1'])->name('add.v');
Route::get('showvedio',[admincontroller::class,'showv'])->name('show.v');
Route::post('storevedio',[admincontroller::class,'storev'])->name('admin.v');
Route::get('editvedio\{id}',[admincontroller::class,'vedit'])->name('edit.v');
Route::post('updatevedio\{id}',[admincontroller::class,'vupdate'])->name('update.v');
Route::get('deletevedio\{id}',[admincontroller::class,'vdestroy'])->name('delete.v');

//part
Route::get('showpart',[admincontroller::class,'showpart'])->name('show.part');
Route::post('storeparte',[admincontroller::class,'storepart'])->name('admin.part');
});