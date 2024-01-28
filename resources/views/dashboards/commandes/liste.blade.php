@extends('dashboards.master')
@section('master')
<section class="container-fluid p-4">
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12 col-md-12 col-12">
            <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                <div>
                    <h1 class="mb-1 h2 fw-bold">Liste des commandes </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Card -->
            <div class="card rounded-3">
                <div class="p-4 row">
                    <!-- Form -->
                    <form class="d-flex align-items-center col-12 col-md-8 col-lg-3">
                        <span class="position-absolute ps-3 search-icon">
                            <i class="fe fe-search"></i>
                        </span>
                        <input type="search" class="form-control ps-6" placeholder="Rechercher">
                    </form>
                </div>
                <div>
                    <div class="table-responsive">
                        <!-- Table -->
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                            <!-- Table Head -->
                            <thead class="table-light">
                                <tr>
                                    <th>Réference</th>
                                    <th>Client</th>
                                    <th>Pays & Ville destination</th>
                                    <th>Télephone</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table body -->
                                @foreach ($allCommandes as $commande)
                                <tr>
                                    <td>
                                        <h5 class="mb-0">
                                            <a href="#" class="text-inherit">{{$commande->reference}}</a>
                                        </h5>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">{{$commande->owneradresse->fullname}}</a>
                                    </td>
                                    <td>{{$commande->owneradresse->country->nom}} - {{$commande->owneradresse->city->nom}}</td>
                                    <td>{{$commande->owneradresse->contact}}</td>
                                    <td>
                                        @if($commande->status == "validee")
                                        <span class="badge bg-success me-4">Validée</span>
                                        @elseif($commande->status == "refuse")
                                        <span class="badge bg-danger me-4">Echec</span>
                                        @elseif($commande->status == "encours")
                                        <span class="badge bg-warning me-4">Encours</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-outline-secondary btn-sm"><i class="fe fe-edit"></i></a>
                                        <a href="{{route('view.order', $commande->id)}}" class="btn btn-success btn-sm"><i class="fe fe-eye"></i> </a>
                                        <a href="" class="btn btn-danger btn-sm"><i class="fe fe-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- Card Footer -->
                <div class="card-footer">
                    <nav>
                        <ul class="pagination justify-content-center mb-0">
                            {{$allCommandes->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
