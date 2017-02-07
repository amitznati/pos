<table class="table table-responsive" id="children-table">
    <thead>
        <th>Child Col</th>
        <th>Parent Col</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($children as $child)
        <tr>
            <td>{!! $child->child_col !!}</td>
            <td>{!! $child->parent ?$child->parent->parent_col : 'no data' !!}</td>
            <td>
                {!! Form::open(['route' => ['children.destroy', $child->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('children.show', [$child->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('children.edit', [$child->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>