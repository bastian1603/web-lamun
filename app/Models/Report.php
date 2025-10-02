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
        return $this->belongsTo(LamunGroup::class);
    }

    public function admin_report()
    {
        return $this->belongsTo(ReportByAdmin::class);
    }

    public function guest_report()
    {
        return $this->belongsTo(ReportByGuest::class);
    }
}
