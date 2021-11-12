<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\samplemail;
use Exception;
use Illuminate\Support\Facades\Mail;

class SimpleMaileController extends Controller
{

    public function index(){
        return view('mail');
    }


    public function sendMail(Request $request){
        $details = [
             'title' => $request->title,
             'to' => $request->mail,
             'name' => 'yeasin Hossain',
             'body'=> $request->body,
        ];

        try{

            Mail::to($details['to'])->send(new samplemail($details));
            toastr()->success('Mail Has Been Sent !!!! ');
            return redirect()->back();

        }
        catch(Exception $error){
            $error->getMessage();
        }
    }





}
