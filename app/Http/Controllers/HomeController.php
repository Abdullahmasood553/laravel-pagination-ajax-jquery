<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index(Request $request) {
        // $users = User::all();
        // return view('home', compact('users', $users));
        $users = User::getUsers();
        return view('home')->with(['users' => $users]);

    }
}
