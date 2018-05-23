<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            if(\Auth::attempt(['email' => $data['email'],'password' => $data['password'],'admin' => '1'])){
                return redirect::action('AdminController@dashboard');
            }else{
                echo "failed"; die;
            }
        }
         return view('admin');
    }
    public function dashboard(){
        return view('dashboard');
    }
}

