@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conviction Record - {{$convictionRecord->convict->full_name_id_card}}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($convictionRecord, ['route' => ['convictionRecords.update', $convictionRecord->id], 'method' => 'patch']) !!}

                        @include('conviction_records.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
