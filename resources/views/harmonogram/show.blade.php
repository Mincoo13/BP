@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Zobrazenie príspevku</h3>
                <a class="btn btn-xs btn-primary" href="{{ route('harmonogram.index') }}">Naspäť</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Názov: </strong>
                {{ $harm->title }}
            </div>
        </div>
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Dátum: </strong>
                {{ $harm->date }}
            </div>
        </div>
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Text: </strong>
                {{ $harm->body }}
            </div>
        </div>
    </div>

@endsection