<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return[
        'id' => $this->id,
        'name' => $this->name,
        'email' => $this->email,
        'image'  =>base64_decode($this->image)
       ];
    }
    public function with($request)
    {
        return [
            'Author' => 'Abdul Samad'
        ];
    }
}
