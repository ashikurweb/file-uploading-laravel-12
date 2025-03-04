<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function store ( Request $request )
    {

        $request->validate([ 'file' => 'required|mimes:pdf,xlx,csv|max:2048' ]);

        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(public_path('uploads/file'), $fileName);

        return back()->with('success', 'File uploaded successfully.')
                     ->with('file', $fileName);
    }
}
