<?php
namespace App\Repositories ;

use App\Models\Boutique;
use App\Models\Product;
use App\Repositories\ProductRepository;

class   BoutiqueRepository {

    public $boutique ;
    public $product;

    public function __construct(Boutique $boutique, Product $product)
        {
            $this->boutique = $boutique ;
            $this->product = $product;
        }


        public function count() {
            return $this->boutique->count();
        }

        public function single($id):Boutique  {
            return $this->boutique->where('id', $id)->first();
        }

        public function  getProductByBoutiqueId($id) {
          $singleStore =   $this->single($id);

            if($singleStore) {
               return  $this->product->where('boutique_id', $singleStore->id)->get();
            }
        }

}
