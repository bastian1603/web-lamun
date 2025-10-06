<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LamunGroup extends Model
{
    protected $fillable = [
        'name', 'location', 'condition', 'wide'
    ];

    public function has_pic()
    {
        return $this->hasMany(GroupPic::class, 'lamun_group_id', 'id');
    }
}
