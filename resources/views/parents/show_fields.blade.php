<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $parent->id !!}</p>
</div>

<!-- Parentcol Field -->
<div class="form-group">
    {!! Form::label('parentcol', 'Parentcol:') !!}
    <p>{!! $parent->parentcol !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $parent->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $parent->updated_at !!}</p>
</div>

