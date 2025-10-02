<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportByGuest extends Model
{
    
    protected $fillable = [
        'name', 'phone_no', 'report_id'
    ];
    public $timestamps = false;

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

}
