<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'category_id'];

    // Связь "многие к одному" с моделью Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Связь "многие ко многим" с моделью Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }
}
