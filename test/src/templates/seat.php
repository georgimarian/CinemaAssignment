<?php

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
            background-image: url("https://www.verdict.co.uk/wp-content/uploads/2017/10/shutterstock_384996514.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        form {
            color: #ffb3b3;
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #ffb3b3;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        h1 {
            color: #b30000;
        }

        btn {

        }

        .btn-primary {
            background-color: #b30000;
        }

        .btn-primary:hover {
            background-color: red;
        }
    </style>
</head>
<body>
<div class="topnav">
    <ul>
        <li><a href="/templates/Login/homepage.php">Homepage</a></li>
        <li><a href="/templates/Login/schedule.php">Schedule</a></li>
        <li><a href="/templates/Login/login.php">Log In</a></li>
    </ul>
</div>
<div class="menu">
    <div class="page-header">
        <h1>Please select your seat <?php ?></h1>
    </div>
</div>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-inline">
        <div>
            <label>Seat</label>
            <input type="number" name="date">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Select number of seats">
        </div>
    </form>
</div>

</body>
</html>
