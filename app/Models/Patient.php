<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surename',
        'initials',
        'birth_year',
        'gender'
    ];
    protected $table = 'patients';
    protected $primaryKey = 'id_patient';

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    public function short_tests()
    {
        return $this->hasMany(ShortTest::class);
    }
}
