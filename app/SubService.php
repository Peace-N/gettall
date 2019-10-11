<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $table = 'sub_services';

    public function service() {
        return $this->belongsTo(Service::class);
    }

}
