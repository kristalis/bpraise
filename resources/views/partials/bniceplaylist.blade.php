<div class="row justify-content-center">
             <div class="col-md-10">
            
                <div class="input-group">
               
                    <input id="title" type="title" class="form-control" name="location" value="{{ old('title') }}" placeholder="search playlist" >
                       <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                </div>
           
        </div>
    </div>   
    </div>
<div class="row justify-content-center">        
        <div class="col-md-10">
<div class="card-columns">
 @foreach($bnworship as $bnworships) 
  <div class="card">  
    <div class="card-body">
      <h5 class="card-title">{{ $bnworships->title }}</h5>
      <p class="card-text">{{$bnworships->vocalsURL}}</p>
    </div>
    <div class="card-footer text-muted">              
       {!! Form::open(['action' => 'MyplaylistController@store', 'enctype'=>'multipart/form-data' ]) !!}
      @include('rehearsalsplaylist.addtoplaylistform', ['pwlistId'=> $bnworships->id , 'submitButtonText' => 'ADD TO MY PLAYLIST'])
    {!! Form::close() !!}
    </div>
  </div>
  @endforeach
  
</div>
</div>
</div>