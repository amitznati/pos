<table class="table table-responsive" id="products-table">
    <thead>
        <th>Name</th>
        <th>Dept Id</th>
        <th>Group Id</th>
        <th>Vandor Id</th>
        <th>Sale Price</th>
        <th>Bay Price</th>
        <th>Bacode</th>
        <th>Brand</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->dept_id !!}</td>
            <td>{!! $product->group_id !!}</td>
            <td>{!! $product->vandor_id !!}</td>
            <td>{!! $product->sale_price !!}</td>
            <td>{!! $product->bay_price !!}</td>
            <td>{!! $product->bacode !!}</td>
            <td>{!! $product->brand !!}</td>
            <td>{!! $product->description !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>