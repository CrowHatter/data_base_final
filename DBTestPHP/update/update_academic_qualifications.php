<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $school = mysqli_real_escape_string($link, $_POST["school"]);
    $department = mysqli_real_escape_string($link, $_POST["department"]);
    $degree = mysqli_real_escape_string($link, $_POST["degree"]);

    echo $ID . $school . $department . $degree . "<br><br>";

    $sql = "UPDATE academic_qualifications SET school='$school', department='$department', degree='$degree' WHERE ID='$ID'";

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