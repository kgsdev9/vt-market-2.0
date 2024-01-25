<div>

    <section class="container-fluid p-4">
        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="mb-1 h2 fw-bold">Liste des villes  </h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if($mode)
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">

                    <div class="p-4">
                            <div class="row">
                                <div class="col-lg-10">

                                    <input type="search" wire:model.live="search" class="form-control ps-6" placeholder="Rechercher">
                                </div>

                                <div class="col-lg-2">
                                    <button type="button" class="btn btn-outline-secondary" wire:click="displayForm()">Enregistrer</button>
                                </div>

                            </div>
                    </div>


                    <div>
                        <div class="table-responsive">
                            <!-- Table -->
                            <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox table-centered table-hover">
                                <!-- Table Head -->
                                <thead class="table-light">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Table body -->
                                    @foreach ($allCities as $city)
                                    <tr>
                                        <td>
                                            <h5 class="mb-0">
                                                <a href="#" class="text-inherit">{{$city->nom}}</a>
                                            </h5>
                                        </td>
                                        <td>
                                            <button  wire:click="edit({{$city->id}})" class="btn btn-outline-secondary btn-sm"><i class="fe fe-edit"></i></button>
                                            <button  wire:click="delete({{$city->id}})"  class="btn btn-danger btn-sm"><i class="fe fe-trash"></i></button>
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
                                {{$allCities->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            @else
            @include('dashboards.city.form')
            @endif
        </div>
    </section>
    </div>

