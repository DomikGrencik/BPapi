<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortTestTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_short_test',
        'id_task',
        'points'
    ];
    protected $table = 'short_test_tasks';
    protected $primaryKey = ['id_short_test', 'id_task'];
    public $incrementing = false;
    public $timestamps = false;

    protected function setKeysForSaveQuery($query)
    {
        $query
            ->where('id_short_test', '=', $this->getAttribute('id_short_test'))
            ->where('id_task', '=', $this->getAttribute('id_task'));
        return $query;
    }
}
