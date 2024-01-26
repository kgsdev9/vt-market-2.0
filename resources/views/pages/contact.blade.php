@extends('layouts.layout')
@section('content')
<main>
    <section class="py-8 bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <!-- caption-->
                    <h1 class="fw-bold mb-0 display-4 lh-1">Support</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- container  -->
    <div class="pt-3">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div>
                        <!-- breadcrumb  -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="help-center.html">Help Center</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Support</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container  -->
    <section class="py-8">
        <div class="container my-lg-4">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-12">
                    <div class="mb-3">
                        <!-- lead  -->
                        <p class="lead mb-8">Can’t find the answer you’re looking for? Don't worry! Get in touch with the Docs Support team, we will be glad to assist you.</p>
                        <div class="d-flex justify-content-between">
                            <span>Contact Information</span>
                            <div class="text-end">
                                <span>(123) 456 789</span>
                                <a href="#">contact@geeks.com</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <!-- card -->
                        <div class="card border">
                            <!-- card body  -->
                            <div class="card-body p-5">
                                <h2 class="mb-4 fw-semibold">Submit a Request</h2>
                                <!-- form  -->
                                <form class="needs-validation" novalidate="">
                                    <!-- input  -->
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Your name" id="name" required="">
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                    <!-- input  -->
                                    <div class="mb-3">
                                        <label class="form-label" for="company">Company</label>
                                        <input class="form-control" type="text" name="company" placeholder="Company name" id="company" required="">
                                        <div class="invalid-feedback">Please enter your company.</div>
                                    </div>
                                    <!-- input  -->
                                    <div class="mb-3">
                                        <label class="form-label" for="email">
                                            Email Address
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control" type="text" name="email" placeholder="Email address here" id="email" required="">
                                        <div class="invalid-feedback">Please enter email address.</div>
                                    </div>
                                    <!-- select options  -->
                                    <div class="mb-3">
                                        <label class="form-label" for="selectSubject">Subject</label>
                                        <select class="form-select" id="selectSubject" required="">
                                            <option selected="" value="">Select</option>
                                            <option value="General">General</option>
                                            <option value="Accounts">Accounts</option>
                                            <option value="Payment">Payment</option>
                                        </select>
                                        <div class="invalid-feedback">Please choose subject.</div>
                                    </div>
                                    <div class="mb-3">
                                        <!-- input  -->
                                        <label class="form-label" for="description">Description</label>
                                        <textarea placeholder="Write down here" id="description" rows="2" class="form-control" required=""></textarea>
                                        <div class="invalid-feedback">Please enter descriptions.</div>
                                    </div>
                                    <!-- button  -->
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
