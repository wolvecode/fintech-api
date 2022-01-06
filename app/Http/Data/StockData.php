<?php

namespace App\Http\Data;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class StockData extends JsonResource
{
    /**s
     * @param  Request  $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'type' => 'stocks',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'sell_rate' => $this->sell_rate,
                'price' => $this->price,
                'rate_change_percent' => $this->rate_change_percent,
                'created_at' => $this->created_at,
            ],
        ];
    }
}
