@extends('employees.layout')
@section('content')
 
<div class="wrapper">
    <div class="menu">
        <a href="{{ url('/employee') }}" class="btn btn-primary" title="Add New Student">
                  GO BACK</a>
                  <br><br>
    </div>
</div>


<div class="wrapper">
  <div class="main-content">
    <h2 class="text-center success">ADD Employees</h2>
</div>
  
<div class="card-body">

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

input {
    width: 100%;
}

</style>

    <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
            <table class="table tbl-full">
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" id="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age: </td>
                    <td><input type="text" name="age" id="age" class="form-control"></td>
                </tr>
                <tr>
                    <td>Salary: </td>
                    <td><input type="text" name="salary" id="salary" class="form-control"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn-secondary text-center">Save</button></td>
                </tr>
            </table>
        </form>
  </div>
</div>



@stop