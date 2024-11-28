<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // Связь "многие ко многим" с моделью Task
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_tag');
    }
}