<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:cadetblue;">
@yield("theme")
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
</body>
</html>