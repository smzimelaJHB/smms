<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MarkResource extends JsonResource
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
            'mystatus'=>$this->mystatus,
            'grade'=>$this->grade,
            'SubjectCode'=>$this-> SubjectCode
        ];
    }
}
