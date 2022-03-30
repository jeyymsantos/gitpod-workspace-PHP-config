<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactControllerUI extends Controller
{
    //Function to Return the ContactView
    public function viewform(){
        return view('contactView');
    }

    // Getting All the Data
    public function index(){
        $contact = DB::select('SELECT * FROM contact');
        return view('contactView', ['contact' => $contact]);
    }
}
