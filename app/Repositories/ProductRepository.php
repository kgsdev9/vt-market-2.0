<?php
namespace App\Repositories ;

use App\Models\Product;

class   ProductRepository {

public $product ;

public function __construct(Product $product)
{
    $this->product = $product ;
}

public function count() {
    return $this->product->count();
}


}
