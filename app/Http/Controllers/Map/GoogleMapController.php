<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\GoogleMap;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class GoogleMapController extends Controller
{
    protected $table = 'google_maps';
    public function index(){
        $locations = DB::table($this->table)->first();
        return view('practice.googleMap.googleMap',compact('locations'));
    }

    // public function mail(){
    //     //return view('mail');
    //     $to_name = "yeasin miah";
    //     $to_mail = "yeasin18801@gmail.com";
    //     $data    = array('name' => 'Ayon','body' => 'testing mail');
    //     try{
    //         Mail::send('mail',$data,function($message) use ($to_name,$to_mail){
    //             $message->to($to_mail)->subject("Testing Perpose");
    //         });
    //         toastr()->success('Mail Has Been Sent !!!! ');

    //         return redirect('/');
    //     }catch(Exception $error){
    //         $error->getMessage();
    //     }
    // }

    public function mail(){
        return view('mail');
    }
}
