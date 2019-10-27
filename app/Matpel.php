<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $guarded = ['id'];

    public function kursus()
    {
        return $this->hasMany('App\Kursus');
    }
}
