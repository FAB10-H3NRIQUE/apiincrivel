<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalityModel extends Model
{
    use HasFactory;

    protected $table = "locality";

    protected $fillable = [
        "street",
        "neighborhood",
        "number",
        "cep",
        "city",
        "state",
        "country",
    ];
}