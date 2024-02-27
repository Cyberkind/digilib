<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = "kategoribuku";
    protected $primaryKey = "kategoriid";
    public $incrementing=false;

    protected $guarded=[];
}
