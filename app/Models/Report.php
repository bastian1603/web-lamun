<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\LamunGroup;

class Report extends Model
{
    protected $fillable = [
        'location', 'verification', 'by_admin', 'lamun_group_id'
    ];

    public function lamun_group()
    {
        return $this->belongsTo(LamunGroup::class, 'lamun_group_id', 'id');
    }

    public function admin_report()
    {
        return $this->belongsTo(ReportByAdmin::class, 'report_id', 'id');
    }

    public function guest_report()
    {
        return $this->belongsTo(ReportByGuest::class, 'report_id', 'id');
    }

    public function pics()
    {
        return $this->hasMany(ReportPic::class, 'report_id', 'id');
    }
}
