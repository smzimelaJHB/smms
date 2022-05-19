<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Array\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'employeeID'=>$this->employeeID,
            'idNumber'=>$this->idNumber,
            'fullName'=>$this->fullName,
            'schoolName'=>$this->schoolName,
            'subjectName'=>$this->subjectName,
            'position'=>$this->position,
            'age'=>$this->age,
            'email'=>$this->email,
            'password'=>$this->pass,
            'gender'=>$this->gender,
            'cell'=>$this->cell,
        ];
    }
}