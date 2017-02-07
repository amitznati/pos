<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $child->id !!}</p>
</div>

<!-- Child Col Field -->
<div class="form-group">
    {!! Form::label('child_col', 'Child Col:') !!}
    <p>{!! $child->child_col !!}</p>
</div>

<!-- Parent Col Field -->
<div class="form-group">
    {!! Form::label('parent_col', 'Parent Col:') !!}
    <p>{!! $child->parent_col !!}</p>
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

