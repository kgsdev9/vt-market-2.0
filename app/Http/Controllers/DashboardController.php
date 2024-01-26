<?php
 /**
     * Cette classe gere les statistique et redireige les utilisateurs en
     * fonction de leurs roles
     */
namespace App\Http\Controllers;

use App\Services\UserService;
use App\Services\ProductService;
use App\Services\BoutiqueService;
use App\Services\CommandeService;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $commandeService;
    protected $userService;
    protected $boutiqueService;
    protected $productService;

    public function __construct(CommandeService $commandeService, UserService $userService, BoutiqueService $boutiqueService, ProductService $productService) {
        $this->middleware('auth');
        $this->commandeService = $commandeService;
        $this->userService = $userService;
        $this->boutiqueService = $boutiqueService;
        $this->productService = $productService;
    }

    public function index() {
        if(Auth::user()->role->nom== "user")  {
            return view('clients.dashboards.index', [
                'countOrders'=> $this->commandeService->countOrders()
            ]);
         } elseif(Auth::user()->role->nom== "admin") {
             return view('dashboards.index', [
                'countCommande' => $this->commandeService->countOrders(),
                'countProducts'  =>   $this->productService->count(),
                'countRevenues'  => $this->commandeService->getSommeTotalOrders(),
                'countBoutique'  => $this->boutiqueService->count(),
                'countUsers' => $this->userService->count()
             ]);
         } else {
            return view('dashboards.index');
         }
    }
}
