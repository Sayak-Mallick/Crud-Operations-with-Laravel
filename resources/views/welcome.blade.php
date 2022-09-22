<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home Page</title>
</head>

<body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;300;400;500;600;700;800&display=swap');

*{
    margin: 0 0;
    padding: 0 0;
    font-family: 'JetBrains Mono', monospace;
}

footer{ 
    min-height:50px;
    margin-top:auto; 
}


.wrapper {
    padding: 0;
    width: 80%;
    margin: 0 auto;
}

.text-center {
    text-align: center;
}

.clearfix{
    float: none;
    clear: both;
}

.tbl-full{
    width: 100%;
}
.tbl-30{
    width: 30%;
}

table tr th{
    border-bottom: 1px solid black;
    padding: 1%;
    text-align: left;
}

table tr td{
    padding: 1%;
}

.btn-primary{
    background-color: #1e90ff;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-primary:hover{
    background-color: #3742fa;
}

.btn-secondary{
    background-color: #7bed9f;
    padding: 1%;
    color: black;
    text-decoration: none;
    font-weight: bold;
}
.btn-secondary:hover{
    background-color: #2ed573;
}

.btn-danger{
    background-color: #ff6b81;
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
.btn-danger:hover{
    background-color: #ff4757;
}


.success{
    background-color: #2ed573;
    /* color: #2ed573; */
    color:white;
}
.error{
    color: #ff4757;
}


/* CSS for Menu */
.menu{
    text-align: center;
    border-bottom: 1px solid #2f3542;
}
.menu ul{
    list-style-type: none;
}
.menu ul li{
    
    display: inline;
    padding: 1%;
}
.menu ul li a{
    text-decoration: none;
    font-weight: bold;
    color: #ff6b81;
}
.menu ul li a:hover{
    color: #ff4757;
}

/* CSS for main-content */
.main-content{
    background-color: #f1f2f6;
    padding: 3% 0;
}

.col-4{
    width: 18%;
    background-color: white;
    margin: 1%;
    padding: 2%;
    float: left;
}


/* CSS for Footer */
.footer{
    background-color: #ff4757;
    color: white;
}

/* CSS for Login */
.login{
    border: 1px solid grey;
    width: 20%;
    margin: 10% auto;
    padding: 2%;
}
</style>
    <div id="header">
        <h1 class="text-center"> <strong> Welcome to my page!!!!!</strong> </h1> <br> <br>
    </div>

    <div class='text-center' style='margin-top: 160px;'><a class='btn btn-primary' href="{{ url('/employee') }}">GO TO HOME PAGE</a></div>
    
    <br><br><br><br><br><br><br><br><br><br><br>
    
    <!---Footer Section Starts--->
    <footer class="footer">
        <div class="wrapper">
            <p  class="text-center">2022 Developed By <a style="text-decoration: none;" href="https://github.com/Sayak-Mallick">Sayak Mallick</a></p>
        </div>
    </footer>
    <!---Footer Section Ends--->
</body>

</html>