<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Document',
            'Attribute' => [
                'title' => $this->title,
                'path' => $this->path,
                'description' => $this->description,
                'views' => (string)$this->views,
                'download' => (string)$this->download,
                'tags' => $this->tag,
                'categories' => $this->category
            ]
        ];
    }
}
