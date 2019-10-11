<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function subservices() {
        return $this->hasMany(SubService::class);
    }

}
