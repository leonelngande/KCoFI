@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Convict
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($convict, ['route' => ['convicts.update', $convict->id], 'method' => 'patch']) !!}

                        @include('convicts.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection