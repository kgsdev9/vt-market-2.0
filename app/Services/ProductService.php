<?php
namespace App\Repositories ;

use App\Repositories\ProductRepository;

class   ProductService {

public $productRepository ;

public function __construct(ProductRepository $productRepository)
{
    $this->productRepository = $productRepository ;
}

public function count() {
    return $this->productRepository->count();
}

}
