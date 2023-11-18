<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesandariPendonor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
    public function pendonor()
    {
        return $this->belongsTo(Pendonor::class, 'id_pendonor');
    }
}
