@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @include('partials.errors')
                    @include('partials.success')
                </div>

                <div class="card-body">
                    {!! Form::open(['action' => 'RehearsalplaylistController@store', 'enctype'=>'multipart/form-data' ]) !!}
      @include('rehearsalsplaylist.form', ['submitButtonText' => 'ADD TO REHEARSAL PLAYLIST'])
    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection