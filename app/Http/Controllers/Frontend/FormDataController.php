<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormData;

class FormDataController extends Controller
{
    public function index()
    {
        $formData = FormData::all();
        return view('frontend.index', compact('formData'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable',
        ]);
        $imagePath = $request->file('image')->store('public/images');
        $validatedData['image'] = $imagePath;
        FormData::create($validatedData);

        return redirect()->back()->with('success', 'Form data submitted successfully!');

    }
}
