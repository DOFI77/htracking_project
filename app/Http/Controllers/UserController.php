<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = auth()->user();
        if(!$user){
            return view('errors.404');
        }

        $users=User::paginate(5);

        return view('dashboard.user-dash',compact('users'));
    }
}
