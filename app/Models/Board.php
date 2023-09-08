<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'status'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
