<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee CRUD</title>
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
    color: white;
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

<div class="wrapper">
    <div class="main-content">
        @yield('content')
    </div>
</div>

</body>
</html>