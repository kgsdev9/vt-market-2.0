<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Liste prix par destination </h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                            <div>
                           <button class="btn btn-primary" wire:click="displayForm"><i class="bx bx-plus me-1"></i></button>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- end row -->
                @if($mode)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-nowrap align-middle">
                                        <thead class="table-light">
                                            <tr>

                                                <th scope="col">Pays depart</th>
                                                <th scope="col">Pays D'arrivée</th>
                                                <th scope="col">Ville départ</th>
                                                <th scope="col">VIlle arrivée</th>
                                                <th scope="col">Prix</th>
                                                <th scope="col" style="width: 200px;">Action</th>
                                              </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($allPointsRelais as $value)
                                            <tr>

                                                <td>

                                                    <a href="#" class="text-body">{{$value->country_at}}</a>
                                                </td>
                                                <td>{{$value->country_end}}</td>
                                                <td>{{$value->city_at}}</td>
                                                <td>{{$value->city_end}}</td>
                                                <td>{{$value->price}} €</td>
                                                <td>
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);"  class="px-2 text-primary" wire:click="edit({{$value->id}})" ><i class="bx bx-pencil font-size-18"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void(0);" class="px-2 text-danger" wire:click="destroy({{$value->id}})" ><i class="bx bx-trash-alt font-size-18"></i></a>
                                                        </li>

                                                    </ul>
                                                </td>
                                            </tr>
                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @elseif($mode == false)
                @include('dashboards.pointrelais.form')
                @endif
                <!-- end row -->



            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

    </div>
</div>
