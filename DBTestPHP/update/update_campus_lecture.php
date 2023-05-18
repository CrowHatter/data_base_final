<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $lecture_name = mysqli_real_escape_string($link, $_POST["lecture_name"]);
    $lecture_unit = mysqli_real_escape_string($link, $_POST["lecture_unit"]);
    $lecture_date = mysqli_real_escape_string($link, $_POST["lecture_date"]);

    echo $ID . $lecture_name . $lecture_unit . $lecture_date . "<br><br>";

    $sql = "UPDATE campus_lecture SET lecture_name='$lecture_name', lecture_unit='$lecture_unit', lecture_date='$lecture_date' WHERE ID='$ID'";

    try {
        $result = mysqli_query($link, $sql);
        echo "修改成功<br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>";
    }

    mysqli_close($link);
    header("Refresh: 2; url=http://140.134.53.58/~D1051594/DBTestPHP/insert.php");
}
?>