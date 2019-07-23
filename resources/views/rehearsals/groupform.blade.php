  {{csrf_field()}}
     
     <div class='form-group row'> 
        {!! Form::select('rehearsals', $rehearsals, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Rehearsal']) !!}                                         
          
      </div>  
       <div class='form-group row'> 
        {!! Form::select('playlists', $playlists, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Song', 'multiple' => 'multiple']) !!}                                         
          
      </div>   
                  
                           
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}