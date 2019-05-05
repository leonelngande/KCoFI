

<!-- Name Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        <p>{!! $subdivision->name !!}</p>
    </div>
</div>

<!-- Division Id Field -->
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('division_id', 'Division:') !!}
        <p>{!! $subdivision->division->name !!}</p>
    </div>
</div>

