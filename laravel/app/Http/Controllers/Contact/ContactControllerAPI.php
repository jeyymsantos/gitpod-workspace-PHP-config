<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel; //links the model

class ContactControllerAPI extends Controller
{
    // GET all data
    public function contact(){
        return response()->json(ContactModel::get(), 200);
    }

    // GET data by ID
    public function contactByID($id){
        return response()->json(ContactModel::find($id), 200);
    }

    // POST a data
    public function contactSave(Request $request){
        $contact = ContactModel::create($request->all());
        return response()->json($contact, 201);
    }

    // PUT a data
    public function contactUpdate(Request $request, ContactModel $contact){
        $contact->update($request->all());
        return response()->json($contact, 200);
    }

    // public function contactUpdate(Request $request, $id){
    //     $contact->Contact::find($id);
    //     $contact->update($request->all());
    //     return response()->json($contact, 200);
    // }

    // DELETE a data
    public function contactDelete(Request $request, ContactModel $contact){
        $contact->delete();
        return response()->json(null, 204);
    }
}
