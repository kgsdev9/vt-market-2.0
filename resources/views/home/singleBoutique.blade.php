@extends('layouts.layout')
@section('content')
<div class="h-lg-16rem h-10rem bg-primary" style="
  background: url(assets/images/background/company-bg.jpg) no-repeat;
  background-position: center; background-size: cover;
"></div>  


<section>
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row align-items-center">
        <!-- col -->
        <div class=" col-12">
          <div class="d-md-flex align-items-center">
            <div class="position-relative mt-n5">
              <!-- img -->
              <img src="{{asset('assets/images/job/png/job-logo.png')}}" alt="" class=" rounded-3 border">

            </div>

            <div class="w-100 ms-md-4 mt-4">
              <div class="d-flex justify-content-between">
                <div>
                  <h1 class="mb-0 "> {{$boutique->libelle_boutique}}
                  </h1>
                  <div>
                  </div>
                </div>
                <div>
                  <!-- btn -->
                  <a href="#" class="btn btn-outline-primary">Contacter</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

    
  <section class="bg-white mt-4">
    <div class="container mb-lg-8">
        <div class="row">
            <div class="col-md-12">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($productStore as $product)
                    <div class="col">
                        <div class="card card-hover">
                            <a href="{{route('single.product', $product->slug)}}">
                             <img src="{{asset('pommade.jpg')}}" alt="course" class="card-img-top"></a>
                                          
                            <div class="card-body">
                                <h4 class="mb-2 text-truncate-line-2"><a href="{{route('single.product', $product->slug)}}" class="text-inherit">{{$product->title}}</a></h4>
                                <small>Boutique: {{$product->boutique->libelle_boutique}}</small>
                                    <p>{{Str::limit($product->description,100)}}</p>
                            </div>
                            <!-- Card Footer -->
                            <div class="card-footer">
                                <div class="row align-items-center g-0">
                                    <div class="col">
                                        <h5 class="mb-0">{{$product->prix}} €</h5>
                                    </div>

                                    <div class="col-auto">
                                        <a href="#" class="text-inherit">
                                            <i class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                            Acheter
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
              
               
          
                </div>
              
            </div>
        </div>
    </div>
</section>

@endsection
