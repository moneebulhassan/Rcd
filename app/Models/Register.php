<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $fillable =[
        'first_name',
        'last_name',
        'sex',
        'dob',
        'phone',
        'address',
        'email',
        'date_of_join',
        'blood_group',

        'guardian_name',
        'guardian_address',
        'guardian_number',

        'education',
        'aos' ,// area of speacialization
        'id_num',
        'link_id'
    ];

    public function link()
    {
        return $this->belongsTo('App\Models\Link');
    }
}
