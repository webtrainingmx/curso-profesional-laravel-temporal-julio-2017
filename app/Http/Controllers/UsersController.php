<?php

namespace App\Http\Controllers;

use App\Museum;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = User::all(); // SELECT * FROM users WHERE 1
        $museums = Museum::all();

        return view("users.index", compact('museums', 'users'));
    }

    // Route Model Binding
    public function show(User $user) {
        return $user;
    }
}
