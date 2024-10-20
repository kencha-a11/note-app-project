<?php

namespace App\Policies;

use App\Models\User;
use App\Models\note;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): void //bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, note $note): void
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): void
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Note $note)
{
    return $user->id === $note->user_id;
}


    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, note $note): bool
{
    return $user->id === $note->user_id; // Only allow the user to delete their own notes
}

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, note $note): void
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, note $note): void
    {
        //
    }
}
