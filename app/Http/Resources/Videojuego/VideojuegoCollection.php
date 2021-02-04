<?php

namespace App\Http\Resources\Videojuego;

use Illuminate\Http\Resources\Json\JsonResource;

class VideojuegoCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'totalPrice' => ($this->price - round((1 - ($this->discount/100)) * $this->discount, 2)),
            'rating' => $this->reviews->count() > 0 ?
            round($this->reviews->sum('star')/$this->reviews->count(), 2) :
            'no rating yet',
            'discount' => $this->discount,
            'href' => [
                'link' => route('videojuegos.show', $this->id)
            ]

        ];
    }
}
