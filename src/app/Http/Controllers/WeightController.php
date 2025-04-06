<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightController extends Controller

{
    public function index()
    {
        $weight_logs = WeightLog::all();
        return view('weight_logs',['weight_logs' => $weight_logs]);
    }


    public function admin()
    {
     $weight_logs = Contact::with('category')->paginate(8);
    }
}
