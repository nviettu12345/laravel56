<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;
class ContactController extends FrontendController
{
    public function getContact()
    {
        return view('contact');
    }

    public function saveContact(Request $request)
    {
       $data=$request->except('_token');
       $data['created_at']=$data['updated_at']=Carbon::now();
       Contact::insert($data);
       return redirect()->back();
    }
}
