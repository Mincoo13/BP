<div class="row">
    <div class="col-xs-12 form-width">
        <div class="form-group">
            <strong>Title: </strong>
            {!! Form::text('title', null,['placeholder'=>'Title','class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-xs-12 form-width">
        <div class="form-group">
            <strong>Link: </strong>
            {!! Form::text('link', null,['placeholder'=>'Link','class'=>'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12">
        <a class="btn btn-xs btn-success" href="{{ route('downloads.index') }}">Back</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
</div>