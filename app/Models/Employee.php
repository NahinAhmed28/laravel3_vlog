<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function devices():HasMany
    {
        return $this->hasMany(Device::class);
    }

    public function posts():HasOne
    {
        return $this->hasOne(Post::class);
    }

    public function group():BelongsTo
    {
        return $this->belongsTo(Group::class);
    }


    public function getDeviceName($id)
    {
        return Device::find($id)->device_name;
    }

    public function getPostName($id)
    {
        return Post::find($id)->name;
    }
    public function getGroupName($id)
    {
        return Group::find($id)->name;
    }
}
