<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function devices():HasMany
    {
        return $this->hasMany(Device::class);
    }



//    public function getDeviceName($id)
//    {
//        return Device::find($id)->device_name;
//    }
}
