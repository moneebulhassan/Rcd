<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'sex'=>$this->sex,
            'dob'=>$this->dob,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'email'=>$this->email,
            'date_of_join'=>$this->date_of_join,
            'blood_group'=>$this->blood_group,

            'guardian_name'=>$this->guardian_name,
            'guardian_address'=>$this->guardian_address,
            'guardian_number'=>$this->guardian_number,

            'education'=>$this->education,
            'aos' =>$this->aos,// area of speacialization
            'link'=>$this->link,
            'branch'=>$this->branch,
            'id_num'=>$this->id_num,
        ];
    }
}
