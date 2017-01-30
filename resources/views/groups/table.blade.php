<table class="table table-responsive" id="groups-table">
    <thead>
        <th>{{ trans('general.Name') }}</th>
        <th>{{ trans('group.Department') }}</th>
        <th colspan="3">{{ trans('general.Action') }}</th>
    </thead>
    <tbody>
    @foreach($groups as $group)
        <tr>
            <td>{!! $group->name !!}</td>
            <td>{!! $group->department->name !!}</td>
            <td>
                {!! Form::open(['route' => ['groups.destroy', $group->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('groups.show', [$group->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('groups.edit', [$group->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>