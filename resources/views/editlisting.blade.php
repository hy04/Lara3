@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">Edit Listing<a href="/dashboard" class="float-right btn btn-dark btn-xs">Go Back</a></div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method'=>'POST']) !!}
                    {{ Form::bsText('name', $listing->name, ['placeholder'=>'Company Name']) }}
                    {{ Form::bsText('email', $listing->email, ['placeholder'=>'Contact Email']) }}
                    {{ Form::bsText('website', $listing->website, ['placeholder'=>'Company Website']) }}
                    {{ Form::bsText('phone', $listing->phone, ['placeholder'=>'Contact Phone']) }}
                    {{ Form::bsText('address', $listing->address, ['placeholder'=>'Business Address']) }}
                    {{ Form::bsTextArea('bio', $listing->bio, ['placeholder'=>'About This Business']) }}
                    <!-- Since HTML forms only support POST and GET, PUT and DELETE methods will be spoofed by automatically adding a _method hidden field to your form.  -->
                    {{ Form::hidden('_method', 'PUT')}}
                    {{ Form::bsSubmit('Submit') }}
                  {!! Form::close() !!}
              </div>
          </div>
      </div>
  </div>
@endsection
