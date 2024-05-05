@extends('layouts.layout')
@section('title', 'Mon Profile')
@section('content')
<section class="pt-5 pb-5">
    <div class="container">
        @include('clients.dashboards.header')


        <div class="row mt-0 mt-md-4">
            <div class="col-lg-3 col-md-4 col-12">
                <!-- Side navbar -->
                @include('clients.dashboards.slidebar')
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Mon profile</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <form class="row gx-3 needs-validation"  method="POST" action="{{route('update.profile')}}">
                                @csrf
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="name">Nom </label>
                                    <input type="text" id="name" name="name"  class="form-control"  required="" value="{{Auth::user()->name}}">
                                </div>
                                <div class="mb-3 col-12 col-md-6">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" required="" value="{{Auth::user()->email}}">
                                </div>
                                <div class="mb-3 col-12 col-md-12">
                                    <label class="form-label" for="passowrd">Mot de passe </label>
                                    <input type="password" name="passowrd" id="passowrd" class="form-control" placeholder="******">
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary" type="submit">Mise à jour </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
