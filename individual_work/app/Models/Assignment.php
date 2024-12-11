<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'description',
        'difficulty',
        'teacher_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function getReadableDifficultyAttribute()
    {
        switch ($this->difficulty) {
            case 'easy':
                return 'Легко';
            case 'medium':
                return 'Средняя';
            case 'hard':
                return 'Сложно';
            default:
                return 'Неизвестно';
        }
    }
}
