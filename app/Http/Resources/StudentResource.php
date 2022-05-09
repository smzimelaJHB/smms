<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'idnumber'=>$this->idnumber,
            'surname'=>$this->surname,
            'name'=>$this->name,
            'age'=>$this->age,
            'email'=>$this->email,
            'password'=>$this->password
        ];
    }
}
