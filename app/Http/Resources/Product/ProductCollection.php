<?php
namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($product) {
            return [
                'name' => $product->name,
                'totalPrice' => round($product->price * (100 - $product->discount) / 100, 2),
                'rating' => $product->reviews->count() > 0 ? round($product->reviews->sum('star') / $product->reviews->count(), 2) : 'No rating yet',
                'discount' => $product->discount,
                'href' => [
                    'link' => route('products.show', $product->id)
                ]
            ];
        })->toArray();
    }
}
