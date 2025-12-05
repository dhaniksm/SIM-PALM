<?php 

use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;
use App\Models\Tanaman;

class Petani extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function lahans()
    {
        return $this->hasMany(Lahan::class);
    }
}

?>