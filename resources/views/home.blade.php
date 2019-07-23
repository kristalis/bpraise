@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
        <div class="col-md-5">
        	<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
         </div>
        <div class="col-md-5">
        	<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
         </div>
    </div>
    @include('partials.bniceplaylistdash')
</div>
@endsection
