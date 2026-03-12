<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    // Beritahu Laravel bahwa model ini menggunakan tabel 'm_level'
    protected $table = 'm_level'; 

    // Tentukan Primary Key-nya (karena Anda menggunakan level_id, bukan id)
    protected $primaryKey = 'level_id'; 

    // Jika tabel Anda tidak memiliki kolom created_at dan updated_at, set false
    public $timestamps = false;

    // Kolom yang boleh diisi secara massal
    protected $fillable = ['level_kode', 'level_nama'];
}