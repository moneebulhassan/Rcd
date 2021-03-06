<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Link;

class Branch extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'address'
    ];

    public function link()
    {
        return $this->hasMany('App\Models\Link');
    }
}
