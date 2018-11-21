@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Pridaj link</h3>
            </div>
        </div>
    </div>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Chyba!</strong> Niektorý z údajov nie je správny.<br>
            <ul>
                @foreach($errors->all() as $error)

                    <liv>{{ $error }}</liv>

                @endforeach
            </ul>
        </div>
    @endif
    {!!  Form::open(['route' => 'sources.store', 'method'=>'POST']) !!}
    @include('sources.form')
    {!! Form::close() !!}
@endsection
