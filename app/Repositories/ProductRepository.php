<?php
namespace App\Repositories ;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class   ProductRepository {

public $product ;

public function __construct(Product $product)
{
    $this->product = $product ;
}

public function count() {
    if(Auth::user()->role->nom== "vendeur") {
      return   $this->product->where('boutique_id', Auth::user()->owner_id)->count();
    } else {
        return $this->product->count();
    }
    abort(404);

}


}
