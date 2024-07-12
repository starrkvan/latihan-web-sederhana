<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswadata extends Model
{
    use HasFactory;
    protected $table = "siswadata";
    protected $fillable = ["nama", "ttl", "sekolah", "keterangan"];
}
