<div class="row">
    <div class="col-xs-12 form-width">
        <div class="form-group">
            <strong>Názov: </strong>
            {!! Form::text('title', null,['placeholder'=>'Title','class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 form-width">
        <div class="form-group">
            <strong>Dátum: </strong>
            {!! Form::date('date', null,['placeholder'=>'Date','class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 form-width">
        <div class="form-group">
            <strong>Text: </strong>
            {!! Form::textarea('body', null,['placeholder'=>'Body','class'=>'form-control','style'=>'height:150px']) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <a class="btn btn-xs btn-success" href="{{ route('posts.index') }}">Naspäť</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Odoslať</button>
    </div>
</div>