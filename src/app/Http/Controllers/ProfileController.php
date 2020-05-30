<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile as ProfileRequest;
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

    /**
     * Show the form to edit the profile.
     *
     * @param  User  $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view()->make('profiles.edit', compact('user'));
    }

    /**
     * Update the profile.
     *
     * @param  ProfileRequest  $request
     * @param  User  $user
     * @return void
     */
    public function update(ProfileRequest $request, User $user)
    {
        $attributes = $request->validated();
        if ($request->hasFile('avatar')) {
            $attributes['avatar'] = $request->file('avatar')->store('images/avatars', 'public');
        }

        $user->update($attributes);

        return redirect()->route('profiles.show', $user);
    }
}
