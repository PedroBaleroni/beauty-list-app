<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'service_id',
        'client_id',
        'status',
        'service_schedule'
    ];

    public function client()
    {
        return $this->hasOne(User::class);
    }
}
