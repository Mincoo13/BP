@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Harmonogram</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success btn-margin" href="{{ route('harmonogram.create') }}">Vytvor novy prispevok</a>
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
            <th>Text</th>
            <th>Dátum</th>
            <th width="300px">Akcie</th>
        </tr>

        @foreach($harmonogram as $harm)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $harm->title }}</td>
                <td>{{ substr($harm->body,0,50) }}</td>
                <td>{{ $harm->date }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('harmonogram.show', $harm->id) }}">Zobraz</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('harmonogram.edit', $harm->id) }}">Uprav</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['harmonogram.destroy', $harm->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Zmaž',['class'=>'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach

    </table>
    {!! $harmonogram->links() !!}
@endsection