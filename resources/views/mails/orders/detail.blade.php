<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="VTP market" />
    <meta name="author" content="KGS INFORMATIQUE" />
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- Libs CSS -->
    <link href="{{public_path('public_paths/fonts/feather/feather.css')}}" rel="stylesheet" />
    <link href="{{public_path('public_paths/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{public_path('public_paths/libs/simplebar/dist/simplebar.min.css')}}">
    <!-- Theme CSS -->

    <link rel="stylesheet" href="{{public_path('public_paths/css/theme.min.css')}}">
    <link rel="canonical" href="vtp-market.com" />
    <title>Facture  </title>
</head>
<body>
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Card -->
        <div class="card border-0" id="invoice">
            <!-- Card body -->
            <div class="card-body">
                <div class="d-flex justify-content-between mb-6">
                    <div>
                        <!-- Img -->

                        <h4 class="mb-0">FACTURE ACHAT VTP MARKET </h4>
                        <small>REFERENCE   {{$commande->reference}}</small>
                    </div>
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
                            @foreach ($commande->products as $detail)
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
                <p class="border-top pt-3 mb-0">Notes: Cette facture est la preuve de votre  paiement sur notre plateforme  vous serez remboursé en cas de litige.</p>
            </div>
        </div>
    </div>

</body>
</html>
