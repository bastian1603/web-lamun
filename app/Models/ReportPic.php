<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportPic extends Model
{
    protected $fillable = [
        'path', 'lamun_group_id', 'report_id'
    ];

    public $timestamps = false;

    public function lamun_group()
    {
        return $this->belongsTo(LamunGroup::class, 'lamun_group_id', 'id');
    }

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id', 'id');
    }
}
