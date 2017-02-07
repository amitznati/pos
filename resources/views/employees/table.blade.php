<table class="table table-responsive" id="employees-table">
    <thead>  
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role Id</th>
        <th>Full Name</th>
        <th>Birthday</th>
        <th>Phone</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            
            <td>{!! $employee->$person->first_name !!}</td>
            <td>{!! $employee->$person->last_name !!}</td>
            <td>{!! $employee->role_id !!}</td>
            <td>{!! $employee->$person->full_name !!}</td>
            <td>{!! $employee->$person->birthday !!}</td>
            <td>{!! $employee->$person->phone !!}</td>
            <td>{!! $employee->$person->email !!}</td>
            <td>
                {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('employees.show', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('employees.edit', [$employee->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>