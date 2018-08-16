
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
            background-image: url("https://www.verdict.co.uk/wp-content/uploads/2017/10/shutterstock_384996514.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100%;
            background-size: cover;
            background-position: center;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
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

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }

        topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        label {
            color: #ffcccc;
        }

        p {
            color: lightpink;
        }
    </style>
</head>
<body>
<div class="menu">
    <div class="topnav">
        <ul>
            <li><a href="/movies">Homepage</a></li>
            <li><a href="/logout">Log out</a></li>
        </ul>
    </div>
</div>

<div class="wrapper">

    <h2 style="color: #ffb3b3">Login</h2>
    <p>Please fill in your credentials to login.</p>
    <form action="login/submitLogin" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control"">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <span class="help-block"></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="/register">Sign up now</a>.</p>
    </form>
</div>
</body>
</html>