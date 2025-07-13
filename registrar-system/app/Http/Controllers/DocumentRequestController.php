<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentRequest;

class DocumentRequestController extends Controller
{

      public function form()
    {
        return view('document-request');
    }
   
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|regex:/^\d{4}-\d{5}$/',
            'name' => 'required',
            'course' => 'required',
            'year_level' => 'required',
            'document_request' => 'required',
        ]);

        DocumentRequest::create($validated);

        return redirect()->back()->with('success', 'Request submitted!');
    }
}
