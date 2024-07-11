<?php

namespace App\Models;

use App\Http\Controllers\jenis_faskesController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    protected $table = 'faskes';

    protected $fillable = ['nama', 'nama_pengelola', 'alamat', 'website', 'email', 'kabkota_id', 'rating', 'latitude', 'longitude', 'jenis_faskes_id', 'kategori_id'];

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    public function jenisFaskes()
    {
        return $this->belongsTo(Jenis_Faskes::class, 'jenis_faskes_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
