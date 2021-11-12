<?php

namespace App\Http\Controllers\Seeder;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Contact;

class PracticeSeederController extends Controller
{
    public function dataShow(){
        $users = User::with('user_contacts')->get();
       
        //$contacts = Contact::all();
        return view('practice.dataTableSeeder',['users' => $users]);
    }
}
