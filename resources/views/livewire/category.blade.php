<div>
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-md-flex align-items-center justify-content-between">
                    <div class="mb-3 mb-md-0">
                        <h1 class="mb-1 h2 fw-bold">Liste des catégories </h1>
                    </div>
                    <div>
                        <button  type="button"  wire:click="displayform" class="btn btn-primary"><i class="fas fa-plus"></i> Nouvelle categorie </button>
                    </div>
                </div>
            </div>
        </div>
        @if($mode == false)
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header border-bottom-0">
                        <form class="d-flex align-items-center">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" wire:model.live="search" class="form-control ps-6" placeholder="Rechercher une catégorie">
                        </form>
                    </div>
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>Nom</th>
                                    <th>Slug</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($allCategories as $value  )
                                <tr class="accordion-toggle collapsed">
                                    <td>
                                        <div>
                                            <img src="{{Storage::url($value->image)}}" alt="" class="img-4by3-lg rounded">
                                        </div>
                                    </td>
                                    <td> {{$value->nom}}</td>
                                    <td>{{$value->slug}}</td>
                                    <td>
                                        <button type="button" wire:click="edit({{$value->id}})" class="btn btn-outline-secondary btn-sm">Editer</button>
                                        <button type="button" wire:click="destroy({{$value->id}})" class="btn btn-success btn-sm">Supprimer</button>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @else
        @include('dashboards.categories.form')
        @endif
    </section>

</div>
