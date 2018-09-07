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
                <h1 class="display-3 text-white">{{ $post->title }}</h1>
                <p class="lead text-white">{{ str_limit( $post->body, 150) }}</p>
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
                    <img src="{{ $post->photo->file }}" class="card-img">
                    <p></p>
                    <p>{{ $post->body }}</p>
                  </div>
                </div>
              </div>
            </div>
            
            @if(count($comments) > 0)
              @foreach($comments as $comment)
                <div class="px-4">
                  <div class="py-5 border-top">
                    <div class="row justify-content-center">
                      <div class="col-lg-1">
                        <h5>{{ $comment->author }}</h5>
                      </div>
                      <div class="col-lg-1">
                        <img width:"20%" src="{{ $comment->photo ? $comment->photo : "/images/place_holder.jpg" }}" alt=""class="card-img">
                      </div>
                      <div class="col-lg-10">
                        <p>{!! str_replace('"', '', $comment->body) !!}</p>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
            
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer class="footer has-cards">
    
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