
     {{csrf_field()}}
      <div class='form-group row'> 
        {!! Form::select('instrumentalsId', $instrumentalsCat, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Instrumentals Type']) !!}                                         
          
      </div>  
      <div class='form-group row'>                                          
        {!! Form::text('songwriter', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'Song Writer']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
      </div>
      <div class='form-group row'>                                          
        {!! Form::text('vocalsURL', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'Vocals URL']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
      </div>
      <div class='form-group row'>     

        {!! Form::text('instrumentalsURL', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'instrumentals URL']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
      </div>
      <div class='form-group row'> 
        {!! Form::select('instrumentalsId', $instrumentalsCat, null, ['class' => 'form-control input-text','placeholder' => 'Please Select Instrumentals Type']) !!}                                         
          
      </div>    
      
                  
                           
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}
 