<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKMCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function KKMs(){
        return $this->hasMany(KKM::class);
    }
}
