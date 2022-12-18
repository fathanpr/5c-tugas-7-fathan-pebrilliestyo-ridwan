<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukf extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function mahasiswas(){
        return $this->belongsToMany(Mahasiswa::class, 'ukf_fasilkom', 'ukf_id'
        ,'mahasiswa_id')->withTimestamps();
    }
}
