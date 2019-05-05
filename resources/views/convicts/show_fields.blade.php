<!-- Id Field -->
{{--<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $convict->id !!}</p>
</div>--}}

<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        <p>{!! $convict->name !!}</p>
    </div>
</div>

<!-- Surname Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('surname', 'Surname:') !!}
        <p>{!! $convict->surname !!}</p>
    </div>
</div>

<!-- Civil Status Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('civil_status', 'Civil status:') !!}
        <p>{!! $convict->civil_status !!}</p>
    </div>
</div>

<!-- Profession Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('profession', 'Profession:') !!}
        <p>{!! $convict->profession !!}</p>
    </div>
</div>

<!-- Name Father Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name_father', 'Name father:') !!}
        <p>{!! $convict->name_father !!}</p>
    </div>
</div>

<!-- Place Of Birth Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('place_of_birth', 'Place of birth:') !!}
        <p>{!! $convict->place_of_birth !!}</p>
    </div>
</div>

<!-- Id Card Number Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('id_card_number', 'Id Card Number:') !!}
        <p>{!! $convict->id_card_number !!}</p>
    </div>
</div>

<!-- Residence Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('residence', 'Residence:') !!}
        <p>{!! $convict->residence !!}</p>
    </div>
</div>

<!-- Name Mother Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name_mother', 'Name mother:') !!}
        <p>{!! $convict->name_mother !!}</p>
    </div>
</div>

<!-- Nationality Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('nationality', 'Nationality:') !!}
        <p>{!! $convict->nationality !!}</p>
    </div>
</div>

<!-- Gender Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('gender', 'Gender:') !!}
        <p>{!! $convict->gender !!}</p>
    </div>
</div>

<!-- Date Of Birth Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('date_of_birth', 'Date of birth:') !!}
        <p>{!! $convict->date_of_birth !!}</p>
    </div>
</div>

<!-- Subdivision Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('subdivision_id', 'Subdivision:') !!}
        <p>{!! $convict->subdivision->name !!}</p>
    </div>
</div>

