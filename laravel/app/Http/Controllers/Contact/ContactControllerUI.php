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

    //Function to Return the ContactForm
    public function contactform(){
        return view('contactForm');
    }

    // Function to Edit the ContactForm
    public function contactEdit($id){
        $contact = DB::select('SELECT * FROM contact WHERE id=?', [$id]);
        return view('contactEdit', ['contact'=> $contact]);
    }

    // Getting All the Data
    public function index(){
        $contact = DB::select('SELECT * FROM contact');
        return view('contactView', ['contact' => $contact]);
    }
    

    // Saving Data
    public function contactSave(Request $request){

        $firstname =    $request->input('firstname');
        $lastname =     $request->input('lastname');
        $email =        $request->input('email');
        $age =          $request->input('age');
        $salary =       $request->input('salary');
        $address =      $request->input('address');

        DB::insert('INSERT INTO contact(firstName, lastName, email, age, salary, address) VALUES (?,?,?,?,?,?)', [$firstname, $lastname, $email, $age, $salary, $address]);
        // return redirect('https://8000-jeyymsantos-gitpodworksp-08y9fr0dfyt.ws-us38.gitpod.io/addContact')->with('success', 'Data Saved');
        // return redirect('contactForm')->with('success', 'Data Saved');
        return redirect()->back()->with('success', 'Data Saved');
    }

    // Update
    public function contactUpdate(Request $request, $id){
        $firstname =    $request->input('firstname');
        $lastname =     $request->input('lastname');
        $email =        $request->input('email');
        $age =          $request->input('age');
        $salary =       $request->input('salary');
        $address =      $request->input('address');

        DB::update('UPDATE contact SET firstName=?, lastName=?, email=?, age=?, salary=?, address=? WHERE id=?', [$firstname, $lastname, $email, $age, $salary, $address, $id]);
        // return redirect('https://8000-jeyymsantos-gitpodworksp-08y9fr0dfyt.ws-us38.gitpod.io/addContact')->with('success', 'Data Saved');
        // return redirect('contactForm')->with('success', 'Data Saved');
        return redirect()->back()->with('success', 'Data Updated');
    }
}
