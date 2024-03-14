<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Traits\WithProduct;
use Livewire\Component;

class CategoryProduct extends Component
{
    use WithProduct;
    public $slug, $product, $category;

    public function mount($slug) {
        $this->category = Category::where('slug', $slug)->first();
        $this->product = Product::where('category_id', $this->category->id)->get();
    }

    public function render()
    {
        return view('livewire.category-product')->extends('layouts.layout')
        ->section('content');
    }
}
