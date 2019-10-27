<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $guarded = [
        'id'
    ];

    public function kelas()
    {
        $this->belongsTo('App\Kelas');
    }

    public function matpel()
    {
        $this->belongsTo('App\Matpel');
    }
}
