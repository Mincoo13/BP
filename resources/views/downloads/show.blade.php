@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Zobraz link </h3>
                <a class="btn btn-xs btn-primary" href="{{ route('downloads.index') }}">Naspäť</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Nazov: </strong>
                {{ $dl->title }}
            </div>
        </div>
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Link: </strong>
                {{ $dl->link }}
            </div>
        </div>
    </div>

@endsection