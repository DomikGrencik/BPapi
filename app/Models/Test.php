<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_patient'
    ];
    protected $table = 'tests';
    protected $primaryKey = 'id_test';

    public function getCreatedAtAttribute($value)
    {
        return date('j.n.y', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j.n.y', strtotime($value));
    }

    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'test_tasks', 'id_test', 'id_task');
    }
}
