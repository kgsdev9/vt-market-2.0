<div>
    <div class="container">
        @if(session('cart') >0)
        <section class="container-fluid p-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="border-bottom pb-3 mb-3">
                        <div class="mb-2 mb-lg-0">
                            <h1 class="mb-0 h2 fw-bold text-center">Votre panier</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <h4 class="mb-0">
                                   Liste de mon panier
                                    <span>(Mes articles )</span>
                                </h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table mb-0 text-nowrap">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Article</th>
                                            <th>Prix</th>
                                            <th>Qunatité</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $total = 0;
                                    @endphp
                                        @foreach( (array)session('cart') as $id => $details)
                                        @php
                                        $total +=  $details['prix'] * $details['quantity']
                                        @endphp
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div>
                                                        <img src="{{asset('s3/product/'.$details['image'])}}" alt="" class="img-4by3-md rounded">
                                                    </div>
                                                    <div class="ms-4 mt-2 mt-lg-0">
                                                        <h4 class="mb-1 text-primary-hover">{{ Str::limit($details['title'], 30)}}</h4>
                                                        <div class="mt-4">
                                                            <button type="button" wire:click="delete({{$details['product_id']}})"  class="btn btn-outline-secondary"><i class="fe fe-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h4 class="mb-0">{{$details['prix']}} € </h4>
                                            </td>
                                            <td>
                                              <div class="row">
                                                <button class="btn btn-outline-secondary" wire:click="increment({{$details['product_id']}})"><i class="fe fe-plus"></i></button>
                                                <span>{{$details['quantity']}}</span>
                                                <button class="btn btn-outline-secondary" wire:click="decrement({{$details['product_id']}})">  <span style="height:40px;">-</span> </button>
                                              </div>
                                            </td>
                                            <td>
                                                <h4 class="mb-0">{{ $details['prix'] * $details['quantity'] }} €</h4>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="align-middle border-top-0 border-bottom-0"></td>
                                            <td class="align-middle border-top-0 border-bottom-0">
                                                <h4 class="mb-0">Total</h4>
                                            </td>
                                            <td>
                                                <h4 class="mb-0">{{$total}} €</h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid mt-4">
                        <a href="{{route('sommary.orders')}}" class="btn btn-outline-secondary text-dark">
                            <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M256,0C114.618,0,0,114.618,0,256s114.618,256,256,256s256-114.618,256-256S397.382,0,256,0z M256,469.333 c-117.818,0-213.333-95.515-213.333-213.333S138.182,42.667,256,42.667S469.333,138.182,469.333,256S373.818,469.333,256,469.333 z"></path> <path d="M401.067,268.761c0.227-0.303,0.462-0.6,0.673-0.915c0.203-0.304,0.379-0.619,0.565-0.93 c0.171-0.286,0.35-0.565,0.508-0.86c0.17-0.317,0.313-0.643,0.466-0.967c0.145-0.308,0.299-0.61,0.43-0.925 c0.13-0.314,0.235-0.635,0.349-0.953c0.122-0.338,0.251-0.672,0.356-1.018c0.096-0.318,0.167-0.642,0.248-0.964 c0.089-0.353,0.188-0.701,0.259-1.061c0.074-0.372,0.117-0.748,0.171-1.122c0.045-0.314,0.105-0.622,0.136-0.941 c0.138-1.4,0.138-2.81,0-4.21c-0.031-0.318-0.091-0.627-0.136-0.941c-0.054-0.375-0.097-0.75-0.171-1.122 c-0.071-0.359-0.17-0.708-0.259-1.061c-0.081-0.322-0.152-0.645-0.248-0.964c-0.105-0.346-0.234-0.68-0.356-1.018 c-0.114-0.318-0.219-0.639-0.349-0.953c-0.131-0.315-0.284-0.618-0.43-0.925c-0.153-0.324-0.296-0.65-0.466-0.967 c-0.158-0.294-0.337-0.574-0.508-0.86c-0.186-0.311-0.362-0.626-0.565-0.93c-0.211-0.315-0.446-0.612-0.673-0.915 c-0.19-0.254-0.366-0.514-0.569-0.761c-0.443-0.54-0.91-1.059-1.403-1.552c-0.004-0.004-0.006-0.008-0.01-0.011l-85.333-85.333 c-8.331-8.331-21.839-8.331-30.17,0s-8.331,21.839,0,30.17l48.915,48.915H128c-11.782,0-21.333,9.551-21.333,21.333 s9.551,21.333,21.333,21.333h204.497l-48.915,48.915c-8.331,8.331-8.331,21.839,0,30.17c8.331,8.331,21.839,8.331,30.17,0 l85.333-85.333c0.004-0.004,0.006-0.008,0.01-0.011c0.493-0.494,0.96-1.012,1.403-1.552 C400.701,269.275,400.877,269.014,401.067,268.761z"></path> </g> </g> </g> </g></svg>
                            Continuer </a>
                    </div>
                </div>
            </div>
        </section>
        @else
        <div class="container row-justify-content-center text-center">
            <div class="card mt-4">
                <div class="card-body">
                    <div class="mb-4">
                        <h2 class="mb-0">Votre panier est vide </h2>
                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 446.853 446.853" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M444.274,93.36c-2.558-3.666-6.674-5.932-11.145-6.123L155.942,75.289c-7.953-0.348-14.599,5.792-14.939,13.708 c-0.338,7.913,5.792,14.599,13.707,14.939l258.421,11.14L362.32,273.61H136.205L95.354,51.179 c-0.898-4.875-4.245-8.942-8.861-10.753L19.586,14.141c-7.374-2.887-15.695,0.735-18.591,8.1c-2.891,7.369,0.73,15.695,8.1,18.591 l59.491,23.371l41.572,226.335c1.253,6.804,7.183,11.746,14.104,11.746h6.896l-15.747,43.74c-1.318,3.664-0.775,7.733,1.468,10.916 c2.24,3.184,5.883,5.078,9.772,5.078h11.045c-6.844,7.617-11.045,17.646-11.045,28.675c0,23.718,19.299,43.012,43.012,43.012 s43.012-19.294,43.012-43.012c0-11.028-4.201-21.058-11.044-28.675h93.777c-6.847,7.617-11.047,17.646-11.047,28.675 c0,23.718,19.294,43.012,43.012,43.012c23.719,0,43.012-19.294,43.012-43.012c0-11.028-4.2-21.058-11.042-28.675h13.432 c6.6,0,11.948-5.349,11.948-11.947c0-6.6-5.349-11.948-11.948-11.948H143.651l12.902-35.843h216.221 c6.235,0,11.752-4.028,13.651-9.96l59.739-186.387C447.536,101.679,446.832,97.028,444.274,93.36z M169.664,409.814 c-10.543,0-19.117-8.573-19.117-19.116s8.574-19.117,19.117-19.117s19.116,8.574,19.116,19.117S180.207,409.814,169.664,409.814z M327.373,409.814c-10.543,0-19.116-8.573-19.116-19.116s8.573-19.117,19.116-19.117s19.116,8.574,19.116,19.117 S337.916,409.814,327.373,409.814z"></path> </g> </g></svg>
                    </div>
                    <a  href="{{route('catalogue.product')}}" class="btn btn-outline-secondary">
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M256,0C114.859,0,0,114.837,0,256c0,141.141,114.859,256,256,256c141.163,0,256-114.859,256-256 C512,114.837,397.163,0,256,0z M403.691,264.149c-1.088,2.603-2.645,4.971-4.608,6.933l-85.333,85.333 c-4.16,4.16-9.621,6.251-15.083,6.251c-5.461,0-10.901-2.091-15.083-6.251c-8.32-8.341-8.32-21.845,0-30.165l48.917-48.917H128 c-11.776,0-21.333-9.557-21.333-21.333c0-11.797,9.557-21.333,21.333-21.333h204.501l-48.917-48.917 c-8.32-8.341-8.32-21.845,0-30.165c8.341-8.341,21.845-8.341,30.165,0l85.333,85.312c1.963,1.963,3.52,4.331,4.608,6.955 C405.845,253.056,405.845,258.923,403.691,264.149z"></path> </g> </g> </g></svg>
                         Consulter les produits</a>
                </div>
            </div>
        </div>
        <br>
        @endif
    </div>
</div>
