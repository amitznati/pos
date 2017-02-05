<!-- Parentcol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentcol', 'Parentcol:') !!}
    {!! Form::text('parentcol', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('parents.index') !!}" class="btn btn-default">Cancel</a>
</div>
