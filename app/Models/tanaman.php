<?php 

use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;
use App\Models\Petani;

class Tanaman extends Model
{
    protected $fillable = ['lahan_id', 'jenis', 'jumlah_pohon'];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }
}


?>