<?php

namespace App\Models;

use Eloquent;

class Report extends Eloquent {
    protected $table = 'Report';
    public $timestamps = false;

    public function device()
    {
        return $this->belongsTo(Device::class, 'Device_ID', 'ID');
    }
}