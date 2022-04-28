<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Crypt;
use Hash;
use Auth;

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

    //Change Password
    public function changePassword()
    {
        return view('practice.password_change');
    }

    //update password
    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|max:12|string|confirmed',
            'password_confirmation' =>'required',
        ]);

        $user = Auth::user();

        if(Hash::check($request->old_password, $user->password)){

            $user->password=Hash::make($request->password); //hasing password from input field
            $user->save();

            return redirect()->back()->with('success', 'Password Changed Successfully');

        }else{
            return redirect()->back()->with('error', 'Current Password Not Matched');
        }
    }
}
