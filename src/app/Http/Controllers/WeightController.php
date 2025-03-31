<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeightController extends Controller

{
public function index()
    {
        return view('register');
    }

public function store(Request $request)
{
$contact = $request->only(['name', 'email', 'password']);
return view('register2', compact('contact'));
}

public function confirm(Request $request)
{
$contact = $request->only(['weight', 'weight-goal']);
return view('weight_logs', compact('contact'));
}




}
