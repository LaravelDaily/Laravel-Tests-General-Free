<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function check_update(string $name, string $email)
    {
        // TASK: find a user by $name and update it with $email
        $user =  User::updateOrCreate(
            ['name' => $name],
            [
                'email' => $email,
                'password' => 'password'
            ]);    

        return $user->name;
    }
}
