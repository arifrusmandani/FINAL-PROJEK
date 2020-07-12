<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$id_user = Auth::user()->id;
    	$user = User::find($id_user);
    	return view('user.index',compact('user'));
    }
}
