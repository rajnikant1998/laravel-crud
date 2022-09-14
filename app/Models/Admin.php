<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = "admins";
    protected $primarykey = "id";

    protected $fillable = [
        "name","email","country","state","city","created_at"
    ];

    protected $hidden = [
        "password","updated_at"
    ];
}