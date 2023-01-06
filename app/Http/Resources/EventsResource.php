<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
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
            'id' => (string) $this->id,
            'attributes' => [
                'title' => $this->title,
                'notes' => $this->notes,
                'start' => $this->start,
                'end' => $this->end,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
            'relationships' => [
                'id' => (string) $this->user->id,
                'user name' => $this->user->name,
                'user email' => $this->user->email,
            ]
        ];
    }
}
