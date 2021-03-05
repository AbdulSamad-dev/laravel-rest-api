<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
       return[
        'id' => $this->id,
        'title' => $this->title,
        'body' => $this->body,
       ];
       
    }
    public function with($request)
    {
        return [
            'Author' => 'Abdul Samad'
        ];
    }
}
