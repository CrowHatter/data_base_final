<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $id = mysqli_real_escape_string($link, $_POST["id"]);
    $name = mysqli_real_escape_string($link, $_POST["name"]);

    echo "$id";
    echo "$name";
    //$sql = "INSERT INTO TEST (id, name) VALUES ('$id', '$name')";

    mysqli_close($link);
}
?>