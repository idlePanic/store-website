<?php

namespace App\Policies;

use App\User;
use App\comment;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @param User $user
     * @param comment $comment
     */
    public function edit_comments(User $user , Comment $comment)
    {
        return $user->owns($comment);
    }
}
