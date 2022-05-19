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
            'idNumber'=>$this->idNumber,
            'fullName'=>$this->fullName,
            'subjectName'=>$this->subjectName,
            'age'=>$this->age,
            'email'=>$this->email,
            'password'=>$this->pass,
            'gender'=>$this->gender,
            'cell'=>$this->cell,
        ];
    }
}