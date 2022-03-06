<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'DX'
    ];
    protected $table = 'tests';
    protected $primaryKey = 'id_test';

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
        return $this->belongsToMany(Task::class, 'test_tasks', 'id_test', 'id_task');
    }
}
