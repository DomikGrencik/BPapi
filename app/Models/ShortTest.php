<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patient'
    ];
    protected $table = 'short_tests';
    protected $primaryKey = 'id_short_test';

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'short_test_tasks', 'id_short_test', 'id_task');
    }
}
