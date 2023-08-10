<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    use HasFactory;

    public function anggota()
    {
        return $this->hasOne(anggota::class);
    }

    public function staf()
    {
        return $this->hasOne(staf::class);
    }

    public function buku()
    {
        return $this->hasOne(buku::class);
    }
}
