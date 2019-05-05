<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division_id', 'Division:') !!}
{{--    {!! Form::number('division_id', null, ['class' => 'form-control']) !!}--}}
    {!! Form::select('division_id', $divisions, $selected ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('subdivisions.index') !!}" class="btn btn-default">Cancel</a>
</div>
