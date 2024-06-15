<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Auth\Access\HandlesAuthorization;

class ForumPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Forum $forum)
    {
        return $user->id === $forum->user_id;
    }

    public function delete(User $user, Forum $forum)
    {
        return $user->id === $forum->user_id;
    }
}
