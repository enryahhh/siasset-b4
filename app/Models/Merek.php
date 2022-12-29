<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'merek';
    protected $primaryKey = 'id_merek';
    public $incrementing = false;
    protected $fillable = [
        'id_merek',
        'nama_merek',
    ];
}
