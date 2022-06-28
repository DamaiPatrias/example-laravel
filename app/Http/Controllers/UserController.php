<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userpost(User $user)
    {
        return view('post', [
            'title' => 'User Post',
            'post' => $user->post,
        ]);
    }
}
