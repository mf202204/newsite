<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function enquiry(ContactRequest $request)
    {
        $data = "\n" . $request->title . "\n" . $request->main . "\n" . $request->email . "\n" . $request->phone . "\n";
        \Storage::append('file.log', $data);
        return redirect('/contact');
    }
}
