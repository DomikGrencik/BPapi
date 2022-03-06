<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_test',
        'id_task',
        'points'
    ];
    protected $table = 'test_tasks';
    protected $primaryKey = ['id_test', 'id_task'];
    public $incrementing = false;
    public $timestamps = false;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('id_test', '=', $this->getAttribute('id_test'))
            ->where('id_task', '=', $this->getAttribute('id_task'));
        return $query;
    }
}
