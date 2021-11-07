<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "nid",
        "user_id",
        "amount",
        "client_type_id",
        "status",
        "service_type_id",
        "from",
    ];
}


