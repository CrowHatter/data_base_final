<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $lecture_name = mysqli_real_escape_string($link, $_POST["lecture_name"]);
    $lecture_unit = mysqli_real_escape_string($link, $_POST["lecture_unit"]);
    $lecture_date = mysqli_real_escape_string($link, $_POST["lecture_date"]);

    echo "$ID";
    echo "$lecture_name";
    echo "$lecture_unit";
    echo "$lecture_date";
    echo "<br><br>";

    $sql = "INSERT INTO campus_lecture VALUES ('$ID','$lecture_name', '$lecture_unit', '$lecture_date')";

    try {
        $result = mysqli_query($link, $sql);
        echo "新增成功<br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>";
    }

    mysqli_close($link);
    header("Refresh: 2; url=http://140.134.53.58/~D1051594/DBTestPHP/insert.php");
}
?>