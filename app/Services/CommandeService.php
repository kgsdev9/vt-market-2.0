<?php

namespace App\Services ;

use App\Repositories\CommandeRepository;

class CommandeService  {

    protected $commandeRepository;

    public function __construct(CommandeRepository $commandeRepository)
    {
        $this->commandeRepository = $commandeRepository ;
    }

    public function updateSuccessStatusPayment() {
        return $this->commandeRepository->updateSuccessStatusPayment();
    }

    public function updateFailledStatusPayment() {
        return $this->commandeRepository->updateFailledStatusPayment();
    }

    public function allOrdersUser() {
      return $this->commandeRepository->allOrdersUser();
    }

    public function single($id) {
        return $this->commandeRepository->single($id);
    }

    public function countOrders(){
        return $this->commandeRepository->countOrders();
    }

    public function  getSommeTotalOrders(){
        return $this->commandeRepository->getSommeTotalOrders();
    }

    public function collecteOders() {
        return $this->commandeRepository->collecteOders();
    }

}
