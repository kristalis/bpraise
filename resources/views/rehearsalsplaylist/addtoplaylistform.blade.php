 {{csrf_field()}}
     
     <div class='form-group row'> 
{!! Form::text('pwlist_Id', $pwlistId, ['class' => 'form-control input-text', 'id' => 'pwlist_Id' ]) !!}
</div>
 {!! Form::submit($submitButtonText, ['class' => 'btn btn-block btn-primary']) !!}