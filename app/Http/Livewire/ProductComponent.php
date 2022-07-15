<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductComponent extends Component
{
    public function render()
    {
        $products = Product::orderBy('name')->paginate(5);
        return view('livewire.product-component',['products' => $products]);
    }

    public function create(){
        $this->emit('create_product');
    }
}
