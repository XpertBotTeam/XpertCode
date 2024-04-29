<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $table = 'tutorial';
    protected $fillable = [
        'title',
        'description',
        'content',
        'author',
    ];


    public function exercises()
    {
        return $this->hasMany(Exercises::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
