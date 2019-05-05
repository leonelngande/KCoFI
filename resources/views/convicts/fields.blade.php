<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Civil Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('civil_status', 'Civil status:') !!}
    {!! Form::text('civil_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Profession Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profession', 'Profession:') !!}
    {!! Form::text('profession', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Father Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_father', 'Name father:') !!}
    {!! Form::text('name_father', null, ['class' => 'form-control']) !!}
</div>

<!-- Place Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('place_of_birth', 'Place of birth:') !!}
    {!! Form::text('place_of_birth', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Card Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_card_number', 'Id Card Number:') !!}
    {!! Form::text('id_card_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Residence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('residence', 'Residence:') !!}
    {!! Form::text('residence', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Mother Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name_mother', 'Name mother:') !!}
    {!! Form::text('name_mother', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_birth', 'Date of birth:') !!}
    {!! Form::date('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#date_of_birth').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection

<!-- Subdivision Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subdivision_id', 'Subdivision:') !!}
{{--    {!! Form::number('subdivision_id', null, ['class' => 'form-control']) !!}--}}
    {!! Form::select('subdivision_id', $subdivisions, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('convicts.index') !!}" class="btn btn-default">Cancel</a>
</div>
