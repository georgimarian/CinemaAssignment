<?php if (!isset($movies)): return; endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cinema</title>
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

        table {
            background-color: #ffcccc;
            border: 1px solid black;
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

        .pagination {
            display: inline-block;
        }

        img {
            width: 100px;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
            background-color: lightpink;
        }

        .pagination a.active {
            background-color: #ffb3b3;
            color: white;
        }

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }

        }
        .center {
            text-align: center;
        }

        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="pag.js"></script>
</head>
<body>
<div class="page-header">
    <div class="topnav">
        <ul>
            <li><a href="/movies">Homepage</a></li>
            <li><a href="/schedule">Schedule</a></li>
            <li><a href="/login">Log In</a></li>
        </ul>
    </div>
    <h1 style="color:#b30000;"> Welcome to our movie booking site!</h1>
</div>
<div id="myBtnContainer">
    <button class="btn active"><a href="schedule.php">Show all</a></button>
</div>
<div class="container">
    <?php foreach ($movies

    as $movie): ?>
    <div class="row">
        <?php /** @var $movie Model\Domain\Schedule */ ?>

        <?php echo $movie->getFilm() ?>
        <?php echo $movie->getHall(); ?>
        <?php echo $movie->getDate(); ?>
    </div>
</div>
<?php endforeach; ?>
</div>


</body>
</html>