<?php

namespace App\Models;

use Eloquent;

class Device extends Eloquent {
    protected $table = 'Device';
    public $timestamps = false;

    public function reports()
    {
        return $this->hasMany(Report::class, 'Device_ID', 'ID');
    }
}