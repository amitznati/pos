<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{!! route('departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('groups*') ? 'active' : '' }}">
    <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
</li>

<li class="{{ Request::is('children*') ? 'active' : '' }}">
    <a href="{!! route('children.index') !!}"><i class="fa fa-edit"></i><span>Children</span></a>
</li>

<li class="{{ Request::is('parents*') ? 'active' : '' }}">
    <a href="{!! route('parents.index') !!}"><i class="fa fa-edit"></i><span>Parents</span></a>
</li>

