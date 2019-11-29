<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = ['umur_tanaman', 'foto_sawah', 'sawah', 'penyakit', 'solusi', 'status'];
    protected $table = 'laporans';

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class);
    }

    public function hasAnyGejalas($gejalas)
    {
        return null !== $this->gejalas()->whereIn('name', $gejalas)->first();
    }

    public function hasAnyGejala($gejala)
    {
        return null !== $this->gejalas()->where('name', $gejala)->first();
    }
}
