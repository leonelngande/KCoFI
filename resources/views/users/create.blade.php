@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrator
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {{--{!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}--}}
                    <div class="col-md-12">
                        @include('auth.form_register')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
