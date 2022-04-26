<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Hash;

class FirstController extends Controller
{
    //_Deposit money function

    public function deposit()
    {
        return view('practice.deposit');
    }

    //_Encryption Function Example

    public function details($id)
    {
        //query kore data tule ana jabe 
       // $user = DB::table('users')->where('id',$id)->first();

        $id = Crypt::encrypt($id);
       // $id = Crypt::decrypt($id);

      echo $id;
    }

    //Hashing Example
    public function store(Request $request)
    {
        $password =Hash::make($request->password);
        
        echo $password;
        
    }
}
