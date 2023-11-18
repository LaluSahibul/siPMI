<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganDonor extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pendonor');
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'stock_darah');
    }
}
