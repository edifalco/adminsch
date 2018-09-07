@extends('layouts.front')

@section('content')
  <main>
    <section class="section section-shaped section-lg my-0">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container shape-container d-flex">
        <div class="col px-0">
          
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center pb-5">
              <h1 class="display-3 text-white">Simple, transparent pricing.</h1>
            </div>
          </div>
          
          <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
              <div class="row justify-content-center">
                
                <div class="col-lg-6">
                  <div class="card shadow border-0">
                    <div class="card-body py-5">

                      <h6 class="text-primary text-uppercase">Pay Yearly</h6>
                      <h1 class="text-primary text-uppercase">€999</h1>
                      <p class="mb-1 text-center">No Setup Costs</p>
                      <p class="mb-1">Free Upgrades</p>
                      <p class="mb-1">Unlimited Students/Classes</p>
                      <p class="mb-1">Unlimited Document Storage</p>
                      <p class="mb-1">Unlimited Users</p>
                      <p class="mb-1">Free Data Import</p>
                      
                      <a href="{{ route('register') }}" class="btn btn-primary mt-4">Create account</a>
                    </div>
                  </div>
                </div>
                  
                <div class="col-lg-6">
                  <div class="card shadow border-0">
                    <div class="card-body py-5">
                      <h6 class="text-success text-uppercase">Pay Monthly</h6>
                      <h1 class="text-success text-uppercase">€99</h1>
                      <p class="mb-1 text-center">No Setup Costs</p>
                      <p class="mb-1">Free Upgrades</p>
                      <p class="mb-1">Unlimited Students/Classes</p>
                      <p class="mb-1">Unlimited Document Storage</p>
                      <p class="mb-1">Unlimited Users</p>
                      <p class="mb-1">Free Data Import</p>
                      <a href="{{ route('register') }}" class="btn btn-success mt-4">Creater Account</a>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
