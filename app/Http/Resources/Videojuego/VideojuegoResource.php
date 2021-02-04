<?php

namespace App\Http\Resources\Videojuego;

use Illuminate\Http\Resources\Json\JsonResource;

class VideojuegoResource extends JsonResource
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
            'name' => $this->name,
            'genre' => $this->genre,
            'price' => $this->price,
            'stock' => $this->stock == 0 ? 'Out of stock' : $this->stock,
            'discount' => $this->discount,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->discount, 2),
            'rating' => $this->reviews->count() > 0 ?
            round($this->reviews->sum('star')/$this->reviews->count(), 2) :
            'no rating yet',
            'href' => [
                'reviews' =>  route('reviews.index', 'videojuego_id=' . $this->id)
            ]
        ];
    }
}
