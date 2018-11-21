@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Dennik</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success btn-margin" href="{{ route('posts.create') }}">Vytvor novy prispevok</a>
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

        @foreach($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ substr($post->body,0,50) }}</td>
                <td>{{ $post->date }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('posts.show', $post->id) }}">Zobraz</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('posts.edit', $post->id) }}">Uprav</a>

                    {!! Form::open(['method' => 'DELETE', 'route'=>['posts.destroy', $post->id], 'style'=> 'display:inline']) !!}
                    {!! Form::submit('Zmaž',['class'=>'btn btn-xs btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>

    {!! $posts->links() !!}

    @endsection