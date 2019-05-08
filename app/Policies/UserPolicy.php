<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isAdministrator()) {
            return true;
        }
    }

    public function list(User $auth)
    {
        return true;
    }

    public function create(User $auth)
    {
        return false;
    }

    public function update(User $auth, User $user)
    {
        return $user->id == $auth->id;
    }

    public function delete(User $auth, User $user)
    {
        return false;
    }
}
