<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_place",
        "title",
        "short_description",
        "description",
        "people_count",
        "priсe",
        "main_img",
        "description_img",
        "complexity",
        "features",
        "date",
    ];
}
