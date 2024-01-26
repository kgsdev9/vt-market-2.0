<?php

namespace App\Http\Controllers;

use App\Services\CityService;
use App\Services\CommandeService;
use App\Services\CountryService;
use App\Services\PaymentAdresseService;

class DashboardUserController extends Controller
{
    protected $commandeService;
    protected $cityService;
    protected $countryService;
    protected $paymentAdresseService;

    public function __construct(CommandeService $commandeService, CountryService $countryService, CityService $cityService, PaymentAdresseService $paymentAdresseService) {
        $this->middleware('auth');
        $this->commandeService = $commandeService;
        $this->countryService = $countryService;
        $this->cityService = $cityService;
        $this->paymentAdresseService = $paymentAdresseService;
    }


    public function customerDashboard() {
        return view('clients.dashboards.index');
    }

    public function orderCustomer() {
        return view('clients.orders.liste', [
            'allCommandeUser' =>  $this->commandeService->collecteOders()
        ]);
    }

    public function adresseCustomer() {
        return view('clients.adresses.index', [
            'allCities'=> $this->cityService->all(),
            'country'=>$this->countryService->all(),
            'allAdresseUser' => $this->paymentAdresseService->allAdressePayment()
        ]);
    }

    public function showOrder($id)  {
        return view('clients.orders.detail', [
            'singleOrder'=> $this->commandeService->single($id)
        ]);
    }
}
