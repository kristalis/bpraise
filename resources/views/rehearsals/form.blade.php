
     {{csrf_field()}}
      <div class='form-group row'>  
        <div class="col-md-7">                                         
        {!! Form::text('eventtitle', null, ['class' => 'form-control input-text', 'id' => 'eventtitle','placeholder' => 'Upcoming Event - e.g. Fathers Day']) !!}
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
        </div/>
        <div class="col-md-5 input-group date" id="datetimepicker1" data-target-input="nearest">  
                                       
        {!! Form::text('eventdate', null, ['class' => 'form-control  datetimepicker-input', 'data-target' => '#datetimepicker1','placeholder' => 'Event Date']) !!}
         <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div> 
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
        </div/>
      </div>
      <div class='form-group row'>
       <div class="col-md-5 input-group date" id="startdatetimepicker" data-target-input="nearest">  
                                       
        {!! Form::text('startdate', null, ['class' => 'form-control  datetimepicker-input', 'data-target' => '#startdatetimepicker','placeholder' => 'Rehearsals Date']) !!}
         <div class="input-group-append" data-target="#startdatetimepicker" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div> 
          <div>
            @if ($errors->has('title'))
              <span class="text-warning">
                  <strong>{{ $errors->first('title') }}</strong>
              </span>
            @endif
          </div/>
        </div/>
        <div class="col-md-7 ">                                        
          {!! Form::text('occurrence', null, ['class' => 'form-control input-text', 'id' => 'title','placeholder' => 'Occurrence']) !!}
            <div>
              @if ($errors->has('title'))
                <span class="text-warning">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
              @endif
            </div/>
          </div>
        </div>
                     
                         
      {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}
 