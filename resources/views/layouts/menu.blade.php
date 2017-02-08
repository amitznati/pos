<li class="treeview">
    <a href="#"><i class="fa fa-cubes"></i> <span>Catalog</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">

		<li class="{{ Request::is('products*') ? 'active' : '' }}">
		    <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
		</li>

		<li class="{{ Request::is('departments*') ? 'active' : '' }}">
		    <a href="{!! route('departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>
		</li>

		<li class="{{ Request::is('groups*') ? 'active' : '' }}">
		    <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
		</li>

	</ul>
</li>

<li class="treeview">
    <a href="#"><i class="fa fa-cubes"></i> <span>People</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">

		<li class="{{ Request::is('employees*') ? 'active' : '' }}">
    		<a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
		</li>

		<li class="{{ Request::is('contacts*') ? 'active' : '' }}">
		    <a href="{!! route('contacts.index') !!}"><i class="fa fa-edit"></i><span>Contacts</span></a>
		</li>

		<li class="{{ Request::is('customers*') ? 'active' : '' }}">
		    <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
		</li>

	</ul>
</li>

{{-- <li class="{{ Request::is('employees*') ? 'active' : '' }}">
    <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
</li>

<li class="{{ Request::is('people*') ? 'active' : '' }}">
    <a href="{!! route('people.index') !!}"><i class="fa fa-edit"></i><span>People</span></a>
</li> --}}

