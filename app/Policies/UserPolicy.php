<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function add(User $user)
    {
        return true == $user->is_supervisor;
    }

    public function edit(User $currentUser, User $user)
    {
        return $currentUser->id == $user->id;
    }
}
