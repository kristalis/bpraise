<div class="row justify-content-center">
             <div class="col-md-10">
            
    </div>   
    </div>
<div class="row justify-content-center">        
        <div class="col-md-10">
<div class="card-columns">
 @foreach($bnrehearsal as $bnrehearsals) 
  <div class="card">  
    <div class="card-body">
      <h5 class="card-title">Songs for {{ $bnrehearsals->eventtitle }}</h5>
     
    </div>
    <div class="card-footer text-muted"> 
    @foreach($bnrehearsals->playlist as $bnplaylist)             
       <p class="card-text">{{$bnplaylist->title}}</p>
       @endforeach
    </div>
  </div>
  @endforeach
  
</div>
</div>
</div>