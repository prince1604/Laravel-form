<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFormController extends Controller
{
    //

    function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 | max:10',
            'email'=>'required | email',
            'city'=>'required | uppercase',
            'skill'=>'required',
        ],[
            'username.required'=>'username can not be empty',
            'username.min'=>'username min charachares should be 3 not be empty',
            'username.max'=>'username max characteres limit is 15 be',
            'email.email'=>'this email is not valid ',
            'city.uppercase'=>'city should be in uppercase only',


        ]);
        // echo $request->city;
        // echo "<br/>";
        // echo $request->gender;
        // echo "<br/>";
        // echo $request->age;
        // echo "<br/>";
        // print_r($request->skill);
    }

    function users(){
        $users = DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
}

