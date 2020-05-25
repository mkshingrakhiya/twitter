<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Show profile.
     *
     * @param  User  $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('profiles.show', compact('user'));
    }
}
