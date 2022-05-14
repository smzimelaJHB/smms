<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
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
            'SubjectCode'=>$this->SubjectCode,
            'SubjectName'=>$this->SubjectName,
        ];
    }
}
