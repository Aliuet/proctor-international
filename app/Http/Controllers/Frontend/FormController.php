<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'subject' => 'required|string|max:255',
        ]);


        // Save the form data to the database
        Contact::create($validatedData);
        $request->session()->flash('success_form', 'Your message has been sent successfully!');
        return redirect()->back();

    }
}
