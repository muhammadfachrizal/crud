<div class="col-md-6 form-group mb-3">
    {!! Form::label('avatar', 'Avatar:') !!}
    @if(!empty($contacts->avatar))
        @php
        {{
            $f = $contacts->avatar;
            echo '<p><a target="_blank" href="'.url('upload/'.$f).'"><img src="'.url('upload/'.$f).'" style="width:200px"/></a></p>';
        }}
        @endphp
        New Upload 
    @endif
    <input type="file" name="photo" >
    <!-- {!! Form::text('avatar', null, ['class' => 'form-control']) !!} -->
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('fname', 'First Name:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('lname', 'Last Name:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('zip', 'ZIP Code:') !!}
    {!! Form::number('zip', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>
<div class="col-md-6 form-group mb-3">
    {!! Form::label('group_id', 'Group:') !!}
    {!! Form::select('group_id', $groups, null, ['class' => 'form-control','placeholder' => '-- Select Group --']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contacts.index') }}" class="btn btn-default">Cancel</a>
</div>
