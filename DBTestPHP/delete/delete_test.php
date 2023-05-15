<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $check = $_POST['checkbox'];
    print_r($check);

    foreach ($check as $key => $value) {

        $sql = "delete from TEST where id = '$value'";
        try {
            $result = mysqli_query($link, $sql);
        } catch (Exception $e) {
            echo $e->getMessage() . "<br>";
        }

    }
    mysqli_close($link);
}
?>