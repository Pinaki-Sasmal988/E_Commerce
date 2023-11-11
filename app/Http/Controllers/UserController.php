<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   /* function index(Request $req){
        //return $req->input();
        $data=new users;
        $data->name=$req->input('name');
        $data->email=$req->input('email');
        $data->password=Hash::make('password');
        $data->save();
        return "data insert";
    }*/
    function login(Request $req){
      $data =user::where(['email'=>$req->email,'password'=>$req->password])->first(); 
      //return $data->password; 
     // if($data && Hash::check($req->password,'==',$data->password)){
        if($data && $req->password == $data->password){  
        $req->session()->put('user',$data);
             return redirect('/');
        
      }
      else
      {
        return "password does't match";      
      }
    }
    function product(){
      return view('product');
    }

}
