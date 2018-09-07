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
              <h1 class="display-3 text-white">Contact us, we're here to help</h1>
            </div>
          </div>
          
              <div class="row justify-content-center">
                
                <div class="col-lg-9">
                  <div class="card shadow border-0">
                    <div class="card-body py-5">

                      {!! Form::open(['method'=>'POST', 'action'=>'MessagesController@store']) !!}
                        {{ csrf_field() }}
                          <div class="row">
                            <div class="col-sm pt-3">
                              {!! Form::label('name', 'Your Name:') !!}
                              {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm pt-3">
                              {!! Form::label('email', 'Your Email:') !!}
                              {!! Form::text('email', null, ['class'=>'form-control', 'required']) !!}
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm pt-3">
                            {!! Form::label('school', 'School Name:') !!}
                            {!! Form::text('school', null, ['class'=>'form-control']) !!}
                          </div>
                          <div class="col-sm pt-3">
                            {!! Form::label('website', 'School Website:') !!}
                            {!! Form::text('website', null, ['class'=>'form-control']) !!}
                          </div>
                        </div>
                        <div class="form-group pt-3">
                            {!! Form::label('message', 'Message:') !!}
                            {!! Form::textarea('message', null, ['class'=>'form-control', 'rows'=>3, 'required']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Send Message', ['class'=>'btn btn-primary']) !!}
                        </div>
                      {!! Form::close() !!}
                      
                    </div>
                  </div>
                </div>
                
              </div>

        </div>
      </div>
    </section>
  </main>
@endsection
