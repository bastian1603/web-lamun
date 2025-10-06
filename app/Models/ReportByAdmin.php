<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReportByAdmin extends Model
{
    protected $fillable = ['admin_id', 'report_id'];
    public $timestamps = false;

    public function report()
    {
        return $this->belongsTo(Report::class, 'report_id', 'id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
