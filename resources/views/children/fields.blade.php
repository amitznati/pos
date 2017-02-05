<!-- Childcol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('childcol', 'Childcol:') !!}
    {!! Form::text('childcol', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('pernetcol', 'Parentcol:') !!}
    {!! Form::text('pernetcol', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('children.index') !!}" class="btn btn-default">Cancel</a>
</div>
