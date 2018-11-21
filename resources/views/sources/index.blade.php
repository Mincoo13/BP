@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Na stiahnutie</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success btn-margin" href="{{ route('sources.create') }}">Vytvor novy link</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Názov</th>
            <th>Link</th>
            <th width="300px">Akcie</th>
        </tr>

        @foreach($sources as $source)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $source->title }}</td>
                <td>{{ substr($source->link,0,30) }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('sources.show', $source->id) }}">Zobraz</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('sources.edit', $source->id) }}">Uprav</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['sources.destroy', $source->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Zmaž',['class'=>'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach

    </table>
    {!! $sources->links() !!}
@endsection