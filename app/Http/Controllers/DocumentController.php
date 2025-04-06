<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function create()
    {
        return view('document.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'document' => 'required|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx|max:2048',
        ]);

        // Store the file
        $filePath = $request->file('document')->store('documents', 'public');

        // Save to database
        Document::create([
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('documents.store')->with('success', 'Document uploaded successfully!');
    }
}

