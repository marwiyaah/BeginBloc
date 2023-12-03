<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "", "test");

$status = 'OK';
$content = [];

if (mysqli_connect_errno()) {
    $status = 'ERROR';
    $content = mysqli_connect_error();
} else {
    $query = "SELECT name FROM user WHERE id=$id";

    if ($result = mysqli_query($link, $query)) {
        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
            $content[] = $row; // push value to array
        }
    } else {
        $status = 'ERROR';
        $content = ['error' => mysqli_error($link)];
    }
}

$data = ["status" => $status, "content" => $content];

header('Content-type: application/json');
echo json_encode($data); // get all products in json format.
?>
