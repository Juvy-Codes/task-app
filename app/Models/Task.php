<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // You must add 'user_id' here so Laravel allows you to save it
    protected $fillable = ['title', 'is_done', 'user_id'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}