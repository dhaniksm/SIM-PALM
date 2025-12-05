<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lahan;
use App\Models\Tanaman;

class Petani extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function petani()
    {
        return $this->belongsTo(Petani::class);
    }
    public function lahan()
    { 
        return $this->hasMany(Lahan::class); 
    }
    public function tanaman()
    { 
        return $this->hasManyThrough(Tanaman::class, Lahan::class); 
    }

}

?>