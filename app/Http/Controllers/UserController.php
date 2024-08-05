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
        $user = User::where('name', $name)->first();

        if ($user) {
            // User found, update the email
            $user->email = $email;
            $user->save();
            echo 'User updated successfully';
        } else {
            // User not found, create a new user with a random password
            $password = Str::random(8); // Generate a random 8-character password
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password)
            ]);
        }
        return $user->name;
    }
}
