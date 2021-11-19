<?php

namespace App\Http\Livewire;

use Livewire\Component;
<<<<<<< HEAD
use App\Models\Size;

class AddCartItemSize extends Component
{
    public $product, $sizes;
    public $color_id = "";
    public $qty = 1;
    public $quantity = 0;
    public $size_id = "";
    public $colors = [];

    public function updatedSizeId($value)
    {
        $size = Size::find($value);
        $this->colors = $size->colors;
    }

    public function updatedColorId($value){
        $size = Size::find($this->size_id);
        $this->quantity = $size->colors->find($value)->pivot->quantity;
    }

    public function mount(){
        $this->sizes = $this->product->sizes;
    }

=======

class AddCartItemSize extends Component
{
>>>>>>> ae4c9765a5239edb4a9964ede06a4b988b77b14b
    public function render()
    {
        return view('livewire.add-cart-item-size');
    }
}
