<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function kursus()
    {
        return $this->hasMany('App\Kursus');
    }
}
