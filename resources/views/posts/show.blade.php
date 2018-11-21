@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h3>Zobrezenie príspevku </h3>
                <a class="btn btn-xs btn-primary" href="{{ route('posts.index') }}">Naspäť</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Nadpis: </strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 form-width">
            <div class="form-group">
                <strong>Text: </strong>
                {{ $post->body }}
            </div>
        </div>
    </div>

@endsection