@extends('employees.layout')
@section('content')
 
<div class="wrapper">
  <div class="main-content">
   <h2 class="text-center success">EDIT Employees</h2>
   <br>
   <br>
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

      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <table class="table tbl-full">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="text" name="age" id="age" value="{{$employees->age}}" class="form-control"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary" id="salary" value="{{$employees->salary}}" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn-secondary text-center">Update</button></td>
                </tr>
            </table>
    </form>
   </div>
  </div>
</div>
 
@stop