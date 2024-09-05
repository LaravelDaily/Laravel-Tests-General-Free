<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;

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
        //   if not found, create a user with $name, $email and random password
        // $user = NULL; // updated or created user

        $user = User::updateOrCreate([
            "name" => $name,
        ], [
            "name" => $name,
            "email" => $email,
            "password" => Str::password(),
        ]);

        return $user->name;
    }
}
