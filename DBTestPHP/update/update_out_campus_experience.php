<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $unit = mysqli_real_escape_string($link, $_POST["unit"]);
    $job_position = mysqli_real_escape_string($link, $_POST["job_position"]);
    $school = mysqli_real_escape_string($link, $_POST["school"]);

    echo $ID . $unit . $job_position . $school . "<br><br>";

    $sql = "UPDATE out_campus_experience SET unit='$unit', job_position='$job_position', school='$school' WHERE ID='$ID'";

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