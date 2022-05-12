<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'subcategory',
        'title',
        'description',
        'evaluation',
        'test_type'
    ];
    protected $table = 'tasks';
    protected $primaryKey = 'id_task';

    public function getCreatedAtAttribute($value)
    {
        return date('j.n.y', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j.n.y', strtotime($value));
    }

    public function tests()
    {
        return $this->belongsToMany(Test::class, 'test_tasks', 'id_test', 'id_task');
    }

    public function short_tests()
    {
        return $this->belongsToMany(ShortTest::class, 'short_test_tasks', 'id_short_test', 'id_task');
    }
}
