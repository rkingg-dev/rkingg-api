<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_url', 'website_name', 'status', 'website_owner_id'
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class, 'website_owner_id');
    }


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
