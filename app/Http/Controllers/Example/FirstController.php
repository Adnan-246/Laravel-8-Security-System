<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    //_Deposit money function
    
    public function deposit()
    {
        return view('practice.deposit');
    }
}
