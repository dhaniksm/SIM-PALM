<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Petani;
use App\Models\Tanaman;

class Lahan extends Model
{
    protected $fillable = ['kode_lahan', 'petani_id', 'lokasi', 'luas'];

    public function petani()
    {
        return $this->belongsTo(Petani::class, 'petani_id');
    }

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }

    public function operasional()
    {
        return $this->hasMany(Operasional::class, 'lahan_id');
    }

}
?>