<?php 

use Illuminate\Database\Eloquent\Model;
use App\Models\Petani;
use App\Models\Tanaman;

class Lahan extends Model
{
    protected $fillable = ['kode_lahan', 'petani_id', 'lokasi', 'luas'];

    public function petani()
    {
        return $this->belongsTo(Petani::class);
    }

    public function tanaman()
    {
        return $this->hasMany(Tanaman::class);
    }
}
?>