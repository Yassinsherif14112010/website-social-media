<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
        'type',
    ];

    public function getTypeBadgeAttribute()
    {
       
        $type = $this->attributes['type'];
        
        if ($type == 'admin') {
            return "<span class='badge bg-success'>{$type}</span>";
        }
        
        return "<span class='badge bg-warning'>{$type}</span>";
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }

}