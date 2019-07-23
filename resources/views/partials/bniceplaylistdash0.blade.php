<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Recently Uploaded
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        @foreach($bnworship as $bnworships) 

                        <div class="video-grid col-xs-6 col-sm-4 col-md-3">
                            <div class="video">
                                <div class="thumbnail">
                                    <a href="{{$bnworships->vocalsURL}}">
                                <img src="http://img.youtube.com/vi/IePvhZqG-Ck/mqdefault.jpg" alt="Dizzy DROS - Paris"></a>
                                </div>
                                <div class="caption">
                                {!! str_limit($bnworships->title , $limit = 50, $end = '....') !!}
                            
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


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