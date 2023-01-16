<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PegawaiResource extends JsonResource
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
            'id' => $this->id,
            'nama' => $this->nama,
            'ttl' => $this->ttl,
            'usia' => $this->usia
        ];
    }

    // Data tambahan yang disimpan di bawah data array json
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_url' => url('https://testapiurl.com')
        ];
    }
}
