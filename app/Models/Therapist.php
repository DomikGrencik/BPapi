<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surename',
        'login',
        'password'
    ];
    protected $table = 'therapists';
    protected $primaryKey = 'id_therapist';

    public function getCreatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('j M Y, G:i', strtotime($value));
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
