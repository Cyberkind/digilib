<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi_pribadi extends Model
{
    use HasFactory;
    protected $table = "koleksi_pribadi";
    protected $primaryKey = "koleksiid";
    public $incrementing=false;

    protected $guarded=[];
}
