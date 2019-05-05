@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conviction Record - {{$convictionRecord->convict->full_name_id_card}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('conviction_records.show_fields')
                    <div class="col-md-12">
                        <a href="{!! route('convictionRecords.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
