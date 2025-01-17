<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'tb_admin';

    // Properti $fillable digunakan untuk menentukan kolom mana saja yang dapat diisi secara massal 
    // Ini berguna untuk melindungi aplikasi dari mass assignment vulnerability.
    protected $fillable = [
        'id',
        'nama',
        'nip',
        'alamat',
        'created_at',
        'updated_at'
    ];
}
