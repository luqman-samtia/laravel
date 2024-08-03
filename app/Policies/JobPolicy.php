<?php

namespace App\Policies;

use App\Models\JobListingModel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function update(User $user, JobListingModel $job): bool
    {
        return $job->employer->user->is($user);
    }


}
