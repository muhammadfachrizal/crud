<div class="col-md-6 form-group mb-3">
    {!! Form::label('name', 'Group Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('groups.index') }}" class="btn btn-default">Cancel</a>
</div>
