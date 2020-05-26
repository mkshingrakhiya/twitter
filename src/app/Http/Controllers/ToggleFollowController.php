<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\RedirectResponse;

class ToggleFollowController extends Controller
{
    /**
     * Toggle follow the user.
     *
     * @param  User  $user
     * @return RedirectResponse
     */
    public function __invoke(User $user): RedirectResponse
    {
        auth()->user()->follows()->toggle($user->id);

        return back();
    }
}
