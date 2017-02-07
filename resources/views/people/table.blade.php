<table class="table table-responsive" id="people-table">
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Full Name</th>
        <th>Birthday</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address Id</th>
        <th>Password</th>
        <th>Personable Id</th>
        <th>Personable Type</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($people as $person)
        <tr>
            <td>{!! $person->first_name !!}</td>
            <td>{!! $person->last_name !!}</td>
            <td>{!! $person->full_name !!}</td>
            <td>{!! $person->birthday !!}</td>
            <td>{!! $person->phone !!}</td>
            <td>{!! $person->email !!}</td>
            <td>{!! $person->address_id !!}</td>
            <td>{!! $person->password !!}</td>
            <td>{!! $person->personable_id !!}</td>
            <td>{!! $person->personable_type !!}</td>
            <td>
                {!! Form::open(['route' => ['people.destroy', $person->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('people.show', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('people.edit', [$person->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>