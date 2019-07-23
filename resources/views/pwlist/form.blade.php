
     {{csrf_field()}}
      <div class='form-group row'>                                          
        {!! Form::text('title', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'Song Title']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
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
        <div class="col-md-6">    
          {!! Form::radio('pwtype', 'w', true, ['class' => 'form-control']) !!}   Worship
        </div>
        <div class="col-md-6">   
          {!! Form::radio('pwtype', 'p', false, ['class' => 'form-control ']) !!} Praise
        </div>                                         
          
      </div>  
                  
                           
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}
 