<!-- Convict Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('convict_id', 'Convict:') !!}
        <p>{!! $convictionRecord->convict->full_name_id_card !!}</p>
    </div>
</div>


<!-- Date Of Conviction Field -->
<div class="col-md-6">

</div>
<div class="form-group">
    {!! Form::label('date_of_conviction', 'Date Of Conviction:') !!}
    <p>{!! $convictionRecord->date_of_conviction !!}</p>
</div>

<!-- Court Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('court', 'Court:') !!}
        <p>{!! $convictionRecord->court !!}</p>
    </div>
</div>


<!-- Nature Of Offence Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('nature_of_offence', 'Nature Of Offence:') !!}
        <p>{!! $convictionRecord->nature_of_offence !!}</p>
    </div>
</div>


<!-- Offence Commited On Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('offence_commited_on', 'Offence Commited On:') !!}
        <p>{!! $convictionRecord->offence_commited_on !!}</p>
    </div>
</div>


<!-- Warrant Issued On Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('warrant_issued_on', 'Warrant Issued On:') !!}
        <p>{!! $convictionRecord->warrant_issued_on !!}</p>
    </div>
</div>


<!-- Warrant Type Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('warrant_type', 'Warrant Type:') !!}
        <p>{!! $convictionRecord->warrant_type !!}</p>
    </div>
</div>

