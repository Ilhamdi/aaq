<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    use HasFactory;
    protected $fillable = [
        'client','event','image','services'
    ];

    public function portoList(){
        return $this->hasMany('App\Models\Porto_list');
    }

}
