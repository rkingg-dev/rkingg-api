<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_title', 'task_description', 'website_id', 'task_created', 'task_last_edit', 'status', 'task_author'
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'task_author');
    }
}
