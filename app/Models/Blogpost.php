<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;

    protected $table = 'blogposts';

    protected $fillable = [
        'id',
        'uid',
        'title',
        'description',
    ];

    public function blogpost()
    {
        return $this->belongsTO(User::class, 'uid', 'id');
    }
}
