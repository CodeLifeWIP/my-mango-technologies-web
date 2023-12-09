<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(string $name = "Mango Technologies", string $email = "my.mango.technologies@gmail.com")
    {
        return view('privacy-policy', ['name' => $name, 'email' => $email]);
    }
}
