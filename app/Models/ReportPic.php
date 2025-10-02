<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportPic extends Model
{
    protected $fillable = [
        "path", "lamun_group_id"
    ];

    public $timestamps = false;

    public function lamun_group()
    {
        return $this->belongsTo(LamunGroup::class);
    }
}
