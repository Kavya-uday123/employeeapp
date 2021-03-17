@extends("theme")
@section("content")
<br>
<h5><center>ADD EMPLOYEE</center></h5>
<br>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <table class="table">
    <tr>
        <td>Employee Name</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Employee Code</td>
        <td><input type="number" class="form-control"></td>
    </tr>
    <tr>
        <td>Designation</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Salary</td>
        <td><input type="number" class="form-control"></td>
    </tr>
    <tr>
        <td>DOB</td>
        <td><input type="date" class="form-control"></td>
    </tr>
    <tr>
        <td>Place</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Pin Code</td>
        <td><input type="number" class="form-control"></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><input type="number" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-success">ADD</button></td>
    </tr>
    </table>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    </div></div>
@endsection