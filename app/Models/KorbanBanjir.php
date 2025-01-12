<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class KorbanBanjir extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'korbanBanjir';
    protected $guarded = ['id'];

    /**
     * Relasi ke model Daerah.
     */
    public function daerah()
    {
        return $this->belongsTo(Daerah::class);
    }
}
