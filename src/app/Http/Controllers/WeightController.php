<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Http\Requests\LoginRequest;

class WeightController extends Controller

{
    public function index()
    {
        return view('register');

    }


    public function confirm(Request $request)
     {
    $contact = $request->only(['name', 'email', 'password',]);
   return view('register2', compact('contact'));
}
     }


