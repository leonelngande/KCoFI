@extends('layouts.app')

@section('content')
    <section class="content-header">

        @include('flash::message')

        <h1>
            Convict - {{$convict->full_name_id_card}}
            <a class="btn btn-primary pull-right" href="{!! route('convictionRecords.create', ['convict' => $convict->id]) !!}">Add Conviction Record</a>
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('convicts.show_fields')
                    <div class="col-md-12">
                        <br>
                        <a href="{!! route('convicts.index') !!}" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                {!! $html->table(['class' => 'table table-bordered'], true) !!}
            </div>
        </div>--}}
    </div>
@endsection

{{--@push('scripts')
    {!! $html->scripts() !!}
@endpush--}}
