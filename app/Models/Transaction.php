<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = "transactions";
    protected $guarded = [];

    public function getStatusAttribute($status)
    {
        switch ($status) {
            case '0':
                $status = 'ناموفق';
                break;
            case '1':
                $status = 'موفق';
                break;
        }
        return $status;
    }

    public function scopeGetData($query, $month, $status)
    {
        $v = verta()->startMonth()->subMonth($month - 1);
        $date = verta()->getGregorian($v->year, $v->month, $v->day);
        return $query->where('created_at', '>', Carbon::create($date[0], $date[1], $date[2], 0, 0, 0))
            ->where('status', $status)
            ->get();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
