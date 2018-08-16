<?php
//require_once '/var/www/test/src/Model/Repository/Repository.php';
use Model\Repository\Repository;
require_once 'db.php';

$date = $time = $hall = "";
$date_err = $time_err = $hall_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["date"]))) {
        $date_err = 'Please enter date.';
    } else {
        $date = trim($_POST["date"]);
    }

    // Check if password is empty
    if (empty(trim($_POST['time']))) {
        $time_err = 'Please enter your time.';
    } else {
        $time = trim($_POST['time']);
    }
    if (empty(trim($_POST['hall']))) {
        $hall_err = 'Please enter your hall.';
    } else {
        $hall = trim($_POST['hall']);
    }
}


function build_table($array, \PDO $pdo)
{
// start table
    $html = '<table id = "data" class="table table-hover" >';
// header row
    $html .= '<tr>';
    foreach ($array[0] as $key => $value) {
        $html .= '<th style="text-align: center">' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';

    $html         .= '<tbody>';
    $perPage      = 5;
    $numberOfRows = $pdo->query('select count(*) from `schedule`')->fetchColumn();
    $pages        = ceil($numberOfRows / $perPage);
// data rows
    for ($i = 1; $i < $pages; $i++) {
        foreach ($array as $key => $value) {
            $html .= '<tr>';
            foreach ($value as $key2 => $value2) {
                if ($key2 === 'picture') {
                    $html .= '<td>' . " > </a>" . '</td>';
                } else
                    $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }
    }

    $html .= '</tbody>';
    $html .= '</table>';
    return $html;
}

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
        <li><a href="/templates/homepage.php">Homepage</a></li>
        <li><a href="/templates/schedule.php">Schedule</a></li>
        <li><a href="/templates/login.php">Log In</a></li>
    </ul>
</div>
<div class="menu">
    <div class="page-header">
        <h1>Please select your booking details for the movie <?php ?></h1>
    </div>
</div>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-inline">
        <div>
            <label>Date</label>
            <input type="date" name="date">
        </div>
        <div>
            <label>Time</label>
            <select name="time">
                <option value="19:00"><?php ?></option>
                <option value="21:20">21:20</option>
            </select>
        </div>
        <div class="form-group <?php echo (!empty($hall_err)) ? 'has-error' : ''; ?>">
            <label>Hall</label>
            <select name="hall">
                <option value="iulius cluj 1">Iulius Cluj 1</option>
                <option value="victoria">Victoria</option>
                <option value="arta">Arta</option>
            </select>
        </div>
        <div class="form-group">
            <a href="seat.php"> <input type="submit" class="btn btn-primary" value="Book"> </a>

        </div>
        <div>
            <p><?php echo $date_err . $time_err; ?></p>
            <?php

            $d   = new Repository();
            $db  = new DatabaseConnection();
            $pdo = $db->getPDOConnection();
            echo build_table($d->prepareSchedule('The Shawshank Redemption', $pdo), $pdo);
            $data   = array();
            $data[] = $date . " " . $time;
            $data[] = $hall;
            $data[] = 'The Shawshank Redemption';

            $d->insertBooking($data, $pdo);
            ?>
        </div>
    </form>
</div>

</body>
</html>