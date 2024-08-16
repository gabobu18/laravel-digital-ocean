<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers () {
        $users = User::get();
        return $users;
    }
    
    public function seedUser (Request $request) {
        $name = $request->input('name');
        $user = User::create(['name' => $name, 'email'=> $name.'@gmail.com', 'password'=> '123456']);
        return $user;
    }
}
