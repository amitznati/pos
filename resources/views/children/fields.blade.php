<!-- Child Col Field -->
<div class="form-group col-sm-6">
    {!! Form::label('child_col', 'Child Col:') !!}
    {!! Form::text('child_col', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Col Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_col', 'Parent Col:') !!}
    {!! Form::text('parent_col', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('children.index') !!}" class="btn btn-default">Cancel</a>
</div>
