<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResepDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'id' => $this->id,
          'title' => $this->title,  
          'id_user' => $this->id_user,
          'user'=> $this->whenLoaded('user'),
          'id_kategori' => $this->id_kategori,
          'kategori' => $this->whenLoaded('kategori'),
          'bahan' => $this->bahan,
          'metode' => $this->metode,
          'energy' => $this->energy,
          'karbo' => $this->karbo,
          'protein' => $this->protein,
          'created at' => date('d-m-Y', strtotime($this->created_at)),
        ];
    }
}
