<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SoundResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'file_url' => url($this->file_path),
            'image_url' => $this->image_path
                ? url($this->image_path)
                : null,
            'duration' => $this->duration,
            'created_at' => $this->created_at,
        ];
    }
}
