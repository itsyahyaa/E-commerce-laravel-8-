<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class DetailsComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        // select Click item from database
        $product = Product::where('slug',$this->slug)->first();

        //select random
        $popular_products = Product::inRandomOrder()->limit(4)->get();

        // Select those with the same categegory ID
        $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.details-component',['product'=>$product,'popular_products'=>$popular_products ,'related_products'=>$related_products])->layout('layouts.base');
    }
}
