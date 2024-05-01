<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'author',
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function tutorial()
    {
        return $this->belongsTo(tutorial::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
