@extends('employees.layout')
@section('content')
 
 
<div class="wrapper">
  <div class="main-content">
    <h2 class="text-center error">Details about {{ $employees->name }}</h2>
    <br>
    <br>
  <div class="card-body">
    

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}


</style>

    <table class="tbl-30">
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
                <!-- <tr>
                    <td></td>
                    <td><button type="submit" class="btn-secondary text-center">Save</button></td>
                </tr> -->
            </table>
        <!-- <h5 class="card-title">Name : </h5>
        <p class="card-text">Age : </p>
        <p class="card-text">Salary : </p> -->
  </div>
     </div>  
    </hr>
  
  </div>
</div>