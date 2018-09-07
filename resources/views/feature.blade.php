@extends('layouts.front')

@section('content')

<main>
    <div class="position-relative">
      <!-- shape Hero -->
      <section class="section-shaped my-0">
        <div class="shape shape-style-1 shape-default shape-skew">
          <span></span>
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
              <div class="col-lg-9 text-center">
                <h1 class="display-3 text-white">{{ $feature->title }}</h1>
                <p class="lead text-white">{{ $feature->content }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- 1st Hero Variation -->
    </div>
    <section class="section section-lg pt-lg-0 pb-0 mt--200">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="row row-grid">
              <div class="col-md-12">
                <div class="card shadow border-0">
                  <div class="card-body py-5">
                    <img src="{{ $feature->photo->file }}" class="card-img">
                  </div>
                </div>
              </div>
            </div>
            
            @if(count($subfeatures) > 0)
              @foreach($subfeatures as $subfeature)
                <div class="px-4">
                  <div class="py-5 border-top">
                    <div class="row justify-content-center">
                      <div class="col-sm-6 col-md-8">
                        <div class="row justify-content-center">
                          <div class="col-md">
                            <h5>{{ $subfeature->title }}</h5>
                          </div>
                          <div class="col-md">
                            <p>{!! $subfeature->content !!}</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <!--<img src="/img/theme/elements.png" class="card-img">-->
                        <img src="{{ $subfeature->photo ? $subfeature->photo->file : "/images/place_holder.jpg" }}" alt="" class="card-img">
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
            
            <!--Another way to display the subfeatures-->
            <!--<div class="px-4">-->
            <!--  <div class="py-5 border-top">-->
            <!--    <div class="row justify-content-center">-->
            <!--      <div class="col-md">-->
            <!--        <h5 class="px-1">Automatic Student Reports</h5>-->
            <!--      </div>-->
            <!--      <div class="col-md">-->
            <!--        <p>NiftySchool generates students reports including enrolments, attendance rates, test results, payments and more. It can also generate contracts on the fly.</p>-->
            <!--      </div>-->
            <!--      <div class="col-md">-->
            <!--        <img src="/img/theme/checkout.png" class="card-img">-->
            <!--      </div>-->
            <!--    </div>-->
            <!--  </div>-->
            <!--</div>-->
            
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="footer has-cards">
    <div class="container">
      <div class="row mb-5 pb-5">
        <div class="col-md-6 mb-5 mb-md-0">
          @if(isset($featureprev))
            <div class="card shadow shadow-lg--hover">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-bold-left"></i>
                    </div>
                  </div>
                  <div class="pl-4">
                    <h5 class="title text-success">{{ $featureprev->title }}</h5>
                    <p>{{ $featureprev->content }}</p>
                    <a href="{{ $featureprev->slug }}" class="text-success">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          @if(isset($featurenext))
            <div class="card shadow shadow-lg--hover">
              <div class="card-body">
                <div class="d-flex px-3">
                  <div class="pl-4">
                    <h5 class="title text-success">{{ $featurenext->title }}</h5>
                    <p>{{ $featurenext->content }}</p>
                    <a href="{{ $featurenext->slug }}" class="text-success">Learn more</a>
                  </div>
                  <div>
                    <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                      <i class="ni ni-bold-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
    
    <section class="section section-lg pt-5">
      <div class="container">
        <div class="card bg-gradient-warning shadow-lg border-0">
          <div class="p-5">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <h3 class="text-white">Create your account now!</h3>
                <p class="lead text-white mt-3">I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture.</p>
              </div>
              <div class="col-lg-3 ml-lg-auto">
                <a href="/register" class="btn btn-lg btn-block btn-white">Create account</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
@endsection