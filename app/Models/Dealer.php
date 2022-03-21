<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    protected $fillable = [
        'code',
        'name',
        'phone',
        'email',
        'address',
        'manager_name',
        'status_id',
    ];
}
