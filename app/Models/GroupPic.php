<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPic extends Model
{
    protected $fillable = [
        'path', 'lamun_group_id'
    ];

    public function lamunGroup()
    {
        return $this->belongsTo(LamunGroup::class, 'lamun_group_id', 'id');
    }
}
