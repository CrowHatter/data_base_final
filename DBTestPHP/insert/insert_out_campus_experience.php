<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $school = mysqli_real_escape_string($link, $_POST["school"]);
    $department = mysqli_real_escape_string($link, $_POST["department"]);
    $degree = mysqli_real_escape_string($link, $_POST["degree"]);


    echo "$ID";
    echo "$school";
    echo "$department";
    echo "$degree";
    echo "<br><br>";

    $sql = "INSERT INTO out_campus_experience VALUES ('$ID','$school', '$department', '$degree')";

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