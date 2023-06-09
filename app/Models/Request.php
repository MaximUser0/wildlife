<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_tour",
        "name",
        "date_born",
        "phone_number",
        "gmail",
        "card_number"
    ];
}
