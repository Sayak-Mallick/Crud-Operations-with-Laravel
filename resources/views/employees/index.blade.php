@extends('employees.layout')
@section('content')

    <div class="wrapper">
        <div class="main-content">
            <div class="text-center">
                <h2 style='color:white;' class="btn-secondary">Employee CRUD</h2>
                <br>
            </div>
            <div>
                <a href="{{ url('/employee/create') }}" class="btn-primary" title="Add New Employee">
                  Add New</a>
                <br/>
                <br/>
    <div class="table-responsive">
<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

    <table class="tbl-full">
    <thead>
        <tr>
            <th>Sl.No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
            <td>{{ $item->salary }}</td>
            <td>
                <a href="{{ url('/employee/' . $item->id) }}" title="View Employees"><button class="btn-primary">View</button></a>
                <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Employee"><button class="btn-secondary">Edit</button></a>

                <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn-danger"  onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</div>
@endsection