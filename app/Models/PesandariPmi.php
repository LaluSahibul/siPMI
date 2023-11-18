<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesandariPmi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
    public function stokdarahpmi()
    {
        return $this->belongsTo(StokdarahPmi::class, 'id_pmi');
    }
}
