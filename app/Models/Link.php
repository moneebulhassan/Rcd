<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Branch;


class Link extends Model
{
    use HasFactory;
    protected $fillable= [
        'name'
    ];

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function register()
    {
        return $this->hasMany('App\Models\Register');
    }
}
