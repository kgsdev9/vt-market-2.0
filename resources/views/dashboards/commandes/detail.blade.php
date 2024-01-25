@extends('dashboards.master')
@section('master')
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
                                <small>REFERENCE   {{$singleOrder->reference}}</small>
                            </div>
                            @if($singleOrder->status == "validee")
                            <button class="btn btn-outline-success">COMMANDE VALIDEE</button>

                            @elseif($singleOrder->status == "refuse")
                            <button class="btn btn-outline-danger">ECHEC DE LA TRANSACTION</button>
                            @elseif($singleOrder->status == "encours")
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
                                <h5 class="mb-3">{{$singleOrder->owneradresse->fullname}}</h5>
                                <p>
                                    Adresse :
                                    {{$singleOrder->owneradresse->adresse}}
                                </p>
                            </div>
                            <div class="col-md-4 col-12">
                                <span class="fs-6">Pays de livraison</span>
                                <h5 class="mb-3">{{$singleOrder->owneradresse->city->nom}}</h5>
                                <p>
                                   Ville de livraison
                                    <br>
                                    {{$singleOrder->owneradresse->country->nom}}
                                    <br>

                                </p>
                            </div>
                        </div>
                        <!-- Row -->
                        <div class="row mb-5">
                            <div class="col-8">
                                <span class="fs-6">Contact</span>
                                <h6 class="mb-0">{{$singleOrder->owneradresse->contact}}</h6>
                            </div>
                            <div class="col-4">
                                <span class="fs-6">Date paiement </span>
                                <h6 class="mb-0">{{$singleOrder->created_at}}</h6>
                            </div>
                        </div>
                        <!-- Table -->
                        <div class="table-responsive mb-8">
                            <table class="table mb-0 text-nowrap table-borderless">
                                <thead class="table-light">
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach ($singleOrder->products as $detail)
                                        @php
                                            $total += $detail->pivot->quantity * $detail->pivot->total
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
                                        <td class="pb-0">50 € </td>
                                    </tr>
                                    <tr class="text-dark">
                                        <td colspan="2"></td>
                                        <td colspan="1" class="py-0">Taxe</td>
                                        <td class="py-0">0</td>
                                    </tr>

                                    <tr class="text-dark">
                                        <td colspan="2"></td>
                                        <td colspan="1" class="border-top py-1 fw-bold">Total</td>
                                        <td class="border-top py-1 fw-bold">{{$total + 50}} € </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- Short note -->
                        <p class="border-top pt-3 mb-0">Notes: si vous n'etes pas l'auteur de cette commande alors signaler vous à notre equipe.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
