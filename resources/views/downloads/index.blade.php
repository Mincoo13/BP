@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Zdroje</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success btn-margin" href="{{ route('downloads.create') }}">Vytvor novy link</a>
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

        @foreach($downloads as $dl)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $dl->title }}</td>
                <td>{{ substr($dl->link,0,50) }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('downloads.show', $dl->id) }}">Zobraz</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('downloads.edit', $dl->id) }}">Uprav</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['downloads.destroy', $dl->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Zmaž',['class'=>'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach

    </table>
    {!! $downloads->links() !!}
@endsection