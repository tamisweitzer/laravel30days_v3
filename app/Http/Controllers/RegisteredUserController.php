<?php

namespace App\Http\Controllers;

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
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        $user = OurUser::create($attributes);

        Auth::login($user);

        return redirect('/ourjobs');
    }
}
