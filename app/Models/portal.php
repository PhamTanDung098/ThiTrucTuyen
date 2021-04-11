<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portal extends Model
{
    use HasFactory;
    protected $table = "portals";
    protected $fillable = ["name","email","mobile_no","password","status"];
    protected $primaryKey = "id";
}
