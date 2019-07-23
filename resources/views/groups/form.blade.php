
     {{csrf_field()}}
      <div class='form-group row'>                                          
        {!! Form::text('groupname', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'Group Name']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
      </div>
      
                  
                           
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}
 