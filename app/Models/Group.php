<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Group extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function employees():HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function setNameAttribute( $value)
    {
        $this->attributes['name'] = ucfirst($value);
    }
}