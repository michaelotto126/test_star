<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User as UserModel;
use View, Redirect, Session;

class UserController extends Controller
{ 
    public function login() {
        
        return View::make('login.login');
    }
    
    public function doLogin() {
    	$email = \Input::get('email');
    	$password = \Input::get('password');
    	$user = UserModel::where('email', $email)
    	                 ->where('password', md5($password))
    	                 ->get(); 
    	
    	if (count($user) > 0) {
    	    \Session::set('user_id', $user[0]->id);
    	    
    	    return Redirect::route('domain');
    	} else {
    	    $alert['msg']='Email & Password is incorrect';
    	    $alert['type']='danger';
    	    
    	    return Redirect::route('user.login')->with('alert', $alert);
    	}
    }
    
} 
