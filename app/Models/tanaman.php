<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;
use App\Models\Petani;

class Tanaman extends Model
{
    protected $table = 'tanamans';
    
    protected $fillable = ['lahan_id', 'jenis', 'jumlah'];

    public function tanaman()
    {
        return $this->hasMany(Tanaman::class);
    }
}


?>