@extends('employees.layout')
@section('content')
 
 
<div class="wrapper">
  <div class="main-content">
    <h2 class="text-center btn-danger">Details about {{ $employees->name }}</h2>
    <br><a href="{{ url('/employee') }}" class="btn btn-primary" title="Add New Student">
                  GO BACK</a>
    <br>
      
  <div class="container">
    

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

</style>

    <table class="tbl-30 center">
                <tr>
                    <td>Name</td>
                    <td>{{ $employees->name }}</td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td>{{ $employees->age }}</td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td>{{ $employees->salary }}</td>
                </tr>
            </table>
  </div>
     </div>  
    </hr>
  
  </div>
</div>