<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $user = NULL; // updated or created user
        $user = User::where('name', $name)->first();
        if ($user) {
            $user->update(['email' => $email]);
        } else {
            $user = User::create([
                "name" => $name,
                "email" => $email,
                "password" => Hash::make("123123")
            ]);
        }
        return $user->name;
    }
}
