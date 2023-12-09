<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDeletionInstructionController extends Controller
{
    public function facebook(string $name = "App")
    {
        return view('data-deletion-facebook-instruction', ['name' => $name]);
    }
}
