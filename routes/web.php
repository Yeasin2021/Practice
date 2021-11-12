<?php

use App\Http\Controllers\Map\GoogleMapController;
use App\Http\Controllers\SimpleMaileController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

require 'practice.php';

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
    return view('welcome');
});


// Route::get('/mail-sending',function(){

//     $to_name = "yeasin miah";
//     $to_mail = "yeasin18801@gmail.com";
//     $data    = array('name' => 'Ayon','body' => 'testing mail');
//     try{
//         // $mail = new samplemail();
//         Mail::send('mail',$data,function($message) use ($to_mail){
//             $message->to($to_mail)->subject("Testing Perpose");
//         });
//         toastr()->success('Mail Has Been Sent !!!! ');

//         //return redirect('/');
//         return new samplemail();
//     }catch(Exception $error){
//         $error->getMessage();
//     }
    
// })->name("mail");

//Route::get('/blade',[GoogleMapController::class,'build']);

Route::get('/mail',[SimpleMaileController::class,'index']);
Route::post('/mail-sending',[SimpleMaileController::class,'sendMail'])->name('mail-sending');