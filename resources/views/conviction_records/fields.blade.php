<!-- Convict Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('convict_id', 'Convict:') !!}
    {!! Form::select('convict_id', $convicts, $selected ?? null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Conviction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_of_conviction', 'Date Of Conviction:') !!}
    {!! Form::date('date_of_conviction', null, ['class' => 'form-control date_time_picker','id'=>'date_of_conviction']) !!}
</div>

<!-- Court Field -->
<div class="form-group col-sm-6">
    {!! Form::label('court', 'Court:') !!}
    {!! Form::text('court', null, ['class' => 'form-control']) !!}
</div>

<!-- Nature Of Offence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nature_of_offence', 'Nature Of Offence:') !!}
    {!! Form::text('nature_of_offence', null, ['class' => 'form-control']) !!}
</div>

<!-- Offence Commited On Field -->
<div class="form-group col-sm-6">
    {!! Form::label('offence_commited_on', 'Offence Commited On:') !!}
    {!! Form::date('offence_commited_on', null, ['class' => 'form-control date_time_picker','id'=>'offence_commited_on']) !!}
</div>

{{--@section('scripts')
    <script type="text/javascript">
        $('#offence_commited_on').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection--}}

<!-- Warrant Issued On Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warrant_issued_on', 'Warrant Issued On:') !!}
    {!! Form::date('warrant_issued_on', null, ['class' => 'form-control date_time_picker','id'=>'warrant_issued_on']) !!}
</div>

{{--@section('scripts')
    <script type="text/javascript">
        $('#warrant_issued_on').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection--}}

<!-- Warrant Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warrant_type', 'Warrant Type:') !!}
    {!! Form::text('warrant_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('convictionRecords.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script type="text/javascript">
        $('.date_time_picker').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        })
    </script>
@endsection
