<?php

//function build_table($array)
//{
//// start table
//    $html = '<table class="table table-hover" >';
//// header row
//    $html .= '<tr>';
//    $html .= '<th style="text-align: center">' . "film" . '</th>';
//    $html .= '<th style="text-align: center">' . "hall" . '</th>';
//    $html .= '<th style="text-align: center">' . "date and time" . '</th>';
//    $html .= '</tr>';
//
//// data rows
//    foreach ($array as $key => $scheduleObject) {
//        $html .= '<tr>';
//        $html .= '<td>' . htmlspecialchars($scheduleObject->film) . '</td>';
//        $html .= '<td>' . htmlspecialchars($scheduleObject->hall) . '</td>';
//        $html .= '<td>' . htmlspecialchars($scheduleObject->date) . '</td>';
//        $html .= '</tr>';
//    }
//
//// finish table and return it
//
//    $html .= '</table>';
//    return $html;
//}

function validateUsername(string $username, \PDO $pdo): ?string
{
    $err = '';

    $sql = "SELECT pk FROM user WHERE username = :username";

    $stmt = $pdo->prepare($sql);
    if (!$stmt) {
        return 'Statement did not work';
    }

    // Bind variables to the prepared statement as parameters
    $stmt->bindParam(':username', $param_username, PDO::PARAM_STR);

    // Set parameters
    $param_username = $username;


    // Attempt to execute the prepared statement
    $stmtOk = $stmt->execute();

    if (!$stmtOk) {
        return "Oops! Something went wrong. Please try again later.";
    }

    ////Afisez 0 ???????????????????????

    if ($stmt->rowCount() == 0) {
        return 'No account found with that username.';
    }
    if ($row = $stmt->fetch()) {
        echo 'mama';
        $id   = $row['pk'];
        $sqll = "SELECT pk FROM usertype WHERE users_fk = :id";
        if ($stm = $pdo->prepare($sqll)) {

            $stm->bindParam(':users_fk', $id, PDO::PARAM_INT);
            if ($stm->execute()) {
                if ($stm->rowCount() == 1) {
                    if ($r = $stm->fetch()) {
                        if ($row['type'] === 'admin')
                            echo 'mama';
                        return true;
                    }
                }

            }
        }
    }

    return $err;
}