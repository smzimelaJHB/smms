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
            'EmployeeID'=>$this->EmployeeID,
            'FullName'=>$this->FullName,
            'email'=>$this->email,
            'cell'=>$this->cell,
            'pass'=>$this->pass,
            'SubjectCode'=>$this->SubjectCode
        ];
    }
}
