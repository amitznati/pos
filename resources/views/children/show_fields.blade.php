<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $child->id !!}</p>
</div>

<!-- Childcol Field -->
<div class="form-group">
    {!! Form::label('childcol', 'Childcol:') !!}
    <p>{!! $child->childcol !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $child->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $child->updated_at !!}</p>
</div>

