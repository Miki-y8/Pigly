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


    public function admin()
    {
     $weight_logs = Contact::with('category')->paginate(8);
    }

    public function create(LoginRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }


}
