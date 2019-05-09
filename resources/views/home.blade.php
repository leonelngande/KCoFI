@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br><br><br>
            <h3 class="text-center">Welcome {{$user->name}}</h3>
        </div>

    </div>
</div>
@endsection
