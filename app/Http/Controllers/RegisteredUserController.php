<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\OurUser;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller {
    public function create(): View {
        return view('auth.register');
    }

    public function store() {
        // COMMENT OUT BECAUSE REGISTRATION IS NOT OPEN TO PUBLIC.
        // $attributes = request()->validate([
        //     'name' => ['required'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', Password::min(2), 'confirmed'],
        // ]);

        // $user = User::create($attributes);

        // Auth::login($user);

        return redirect('/');
    }
}
