<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        "status",
        "amount",
        "course",
        "payment_id",
        "level",
        "country",
        "phone",
        "email",
        "fullname",
    ];
}
