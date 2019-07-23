  {{csrf_field()}}
     
     <div class='form-group row'> 
        {!! Form::select('groups', $groups, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Singing Group']) !!}                                         
          
      </div>  
       <div class='form-group row'> 
        {!! Form::select('playlists', $playlists, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Song', 'multiple' => 'multiple']) !!}                                         
          
      </div>   
                  
                           
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}