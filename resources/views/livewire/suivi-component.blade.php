<div>

    <section>
        <div class="container">
           <div class="row justify-content-center mt-4">
              <div class="col-xl-6 col-lg-8 col-md-8 col-12">
                 <div class="card shadow-sm mb-6">
                    <div class="card-body">
                       <div class="needs-validation mb-6" novalidate="">
                          <div class="mb-3">
                             <label for="signinEmailInput" class="form-label">
                               Entrer la réference de la commande
                                <span class="text-danger">*</span>
                             </label>
                             <input type="search" wire:model.live="reference" class="form-control ps-6" placeholder="Rechercher....">
                          </div>
                          <div class="d-grid">
                             <button class="btn btn-outline-dark" wire:click="statusOrder">Verifier le statut</button>
                          </div>
                        </div>
                    </div>
                 </div>
              </div>
           </div>

        </div>
     </section>

@if($commande)
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row mt-0 mt-md-4">

            <div class="col-lg-12 col-md-8 col-12">
                <!-- Card -->
                <div class="card border-0" id="invoice">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-6">
                            <div>
                                <h4 class="mb-0">FACTURE DE COMMANDE  </h4>
                                <small>REFERENCE   {{$commande?->reference}}</small>
                            </div>
                            @if($commande?->status == "validee")
                            <button class="btn btn-outline-success">COMMANDE VALIDEE</button>

                            @elseif($commande->status == "refuse")
                            <button class="btn btn-outline-danger">ECHEC DE LA TRANSACTION</button>
                            @elseif($commande->status == "encours")
                            <button class="btn btn-outline-warning">TRANSACTION EN COURS</button>

                            @endif


                            <div>
                                <a href="#" class="print-link no-print"><i class="fe fe-printer"></i></a>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <span class="fs-6">Information sur le client </span>
                                <h5 class="mb-3">{{$commande->owneradresse->fullname}}</h5>
                                <p>
                                    Adresse :
                                    {{$commande->owneradresse->adresse}}
                                </p>
                            </div>
                            <div class="col-md-4 col-12">
                                <span class="fs-6">Pays de livraison</span>
                                <h5 class="mb-3">{{$commande->owneradresse->city->nom}}</h5>
                                <p>
                                   Ville de livraison
                                    <br>
                                    {{$commande->owneradresse->country->nom}}
                                    <br>

                                </p>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-5">
                            <div class="col-8">
                                <span class="fs-6">Contact</span>
                                <h6 class="mb-0">{{$commande->owneradresse->contact}}</h6>
                            </div>
                            <div class="col-4">
                                <span class="fs-6">Date paiement </span>
                                <h6 class="mb-0">{{$commande->created_at}}</h6>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive mb-8">
                            <table class="table mb-0 text-nowrap table-borderless">
                                <thead class="table-light">
                                    <tr>
                                        <th>Désignation</th>
                                        <th>Qauntité</th>
                                        <th>Prix unitaire</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0;
                                    $pricedelivery = 0.2;
                                    $totallivraison = 0;
                                    @endphp
                                    @foreach ($commande->products as $detail)
                                        @php
                                              $total += $detail->pivot->quantity * $detail->prix;
                                              $totallivraison+=  $detail->prix * $pricedelivery;
                                        @endphp
                                    <tr class="text-dark">
                                        <td>
                                         {{$detail->title}}
                                        </td>
                                        <td> {{$detail->pivot->quantity}}</td>
                                        <td> {{$detail->prix}} €</td>
                                        <td>{{$detail->pivot->total}} € </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="text-dark">
                                        <td colspan="2"></td>
                                        <td colspan="1" class="pb-0">Prix de livraison</td>
                                        <td class="pb-0"> {{$totallivraison}} € </td>
                                    </tr>
                                    <tr class="text-dark">
                                        <td colspan="2"></td>
                                        <td colspan="1" class="border-top py-1 fw-bold">Total</td>
                                        <td class="border-top py-1 fw-bold">{{$total + $totallivraison}} € </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <p class="border-top pt-3 mb-0">Notes: si vous n'etes pas l'auteur de cette commande alors signaler vous à notre equipe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@else
@if (session()->has('message'))
<div class="alert alert-danger">
    {{ session('message') }}
</div>
@endif
@endif

</div>
