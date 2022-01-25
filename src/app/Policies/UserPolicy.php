<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if current user can edit the given user.
     *
     * @param User $authUser
     * @param User $user
     *
     * @return void
     */
    public function update(User $authUser, User $user)
    {
        return $authUser->is($user);
    }
}
