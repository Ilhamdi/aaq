<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porto_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','ket','portos_id'
    ];

    public function porto(){
        return $this->belongsTo('App\Models\Porto');
    }
}
