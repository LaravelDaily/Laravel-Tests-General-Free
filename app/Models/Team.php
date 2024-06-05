<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users(): BelongsToMany
    {
        // TASK: fix this by adding some extra code
        return $this->belongsToMany(User::class);
    }
}
