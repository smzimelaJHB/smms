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
            'IDnumber'=>$this->IDnumber,
            'FullName'=>$this->FullName,
            'SubjectCode'=>$this->SubjectCode,
            'age'=>$this->age,
            'email'=>$this->email,
            'pass'=>$this->pass,
            'gender'=>$this->gender

        ];
    }
}
