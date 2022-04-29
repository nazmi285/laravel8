<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    // return one level of child items
    public function parents()
    {
        return $this->hasMany(Family::class, 'parent_id');
    }

    // recursive relationship
    public function childParents()
    {
        return $this->hasMany(Family::class, 'parent_id')->with('parents');
    }

    public function partner()
    {
        return $this->hasOne(Family::class, 'partner_id');
    }
}
