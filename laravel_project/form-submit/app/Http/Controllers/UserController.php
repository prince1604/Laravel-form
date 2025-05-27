<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    // function queries(){

    //     // $response = User::all();
    //     //  $response = User::get();   // uper na jevuj
    //     // $response = User::where('name','abc')->get();              // je name ma abc hoi te name display kraave
    //     // $response = User::find(1);          // je name ma user hoi teni peli entry  display kraave
    //     // $response = [$response];




    //     $response = User::insert([
    //         'name' => 'abc',
    //         'email' => 'kay@test.com',
    //         'password'=>'0101',
    //     ]);

    //     if($response){
    //         return view('user', ['users' => User::all()]);
    //     }else{
    //         return "Data Not Inserted";
    //     }
    // }

    // function get (Request $req){
    //     return "Get route method";
    // }
    // function post (Request $req){
    //     return "post route method";
    // }
    // function put (Request $req){
    //     return "put route method";
    // }
    // function delete (Request $req){
    //     return "delete route method";
    // }
    // function any (){
    //     return  "this is any method";
    // }
    // function group1(){
    //     return "this is group1";
    // }
    // function group2(){
    //     return "this is group2";
    // }

    // function login(Request $request) {
    //    echo "Request method is " . $request->method();
    //    echo "<br>";
    //    echo "Request method is " . $request->path();
    //    echo "<br>";
    //    echo "Request method is " . $request->url();
    //    echo "<br>";
    //    echo "name  is " . $request->input('name');
    //     // echo "name is " . $request->name;                       # aa rite pan name ne form mathi get kravi skaay .
    //    echo "<br>";
    //    print_r($request->input());
    //    echo "<br>";
    //    print_r($request->collect());
    //    echo "<br>";

    //    if($request->isMethod('post')){
    //         echo "execute for code for post request";
    //    }else{
    //         echo "execute code for other request";
    //    }
    //    echo "<br>";
    //    if($request->is('user')){
    //         echo "execute for code for user path";
    //    }else{
    //         echo "execute code for other path";
    //    }

    //    echo"name is " . $request->ip();
    //    echo "<br>";
    // }




    function login(Request $request){
        $request->session()->put('alldata',$request->input('user'));
        $request->session()->put('alldata',$request->input());
        return redirect('profile');
    }
    function logout(){
        session()->pull('user');
        return redirect('login');
    }

    function adduser(Request $request){
        // your db code
        $request->session()->flash('message','User has been added successfully');
        $request->session()->flash('name','person');

        return redirect('user');
    }
}
