<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function ukfs(){
        return $this->belongsToMany(Ukf::class, 'ukf_fasilkom', 'mahasiswa_id'
        ,'ukf_id')->withTimestamps();
    }
}
