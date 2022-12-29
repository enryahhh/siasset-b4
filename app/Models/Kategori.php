<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class Kategori extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    public $incrementing = false;
    protected $fillable = [
        'id_kategori',
        'nama_kategori',
    ];  

    public function r_inventory(){
        return $this->hasMany(Inventory::class,'id_kategori');
    }
}
