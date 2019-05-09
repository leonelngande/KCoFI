@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h1 class="pull-left">Certificates</h1>
            </div>
            <div class="col-md-6">
                <h1 class="pull-right">
                    <!-- New certificate request form -->
                    <form action="{!! route('certificates.create') !!}" method="get" class="new-certificate-form">

                        @csrf

                        <div class="input-group">
                            <input type="text" name="id_card_number" class="form-control" placeholder="ID Card Number..." required/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-primary pull-right">Add New
                                </button>
                            </span>
                        </div>
                    </form>
                    {{--           <a href="{!! route('certificates.create') !!}"></a>--}}
                </h1>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('certificates.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

