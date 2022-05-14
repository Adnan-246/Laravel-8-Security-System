<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ClassController extends Controller
{
    //_construct
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $class =DB::table('classes')->get();
       return view('admin.class.index',compact('class'));
    }
}
