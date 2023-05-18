<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $award_name = mysqli_real_escape_string($link, $_POST["award_name"]);
    $launch_year = mysqli_real_escape_string($link, $_POST["launch_year"]);
    $awarding_unit = mysqli_real_escape_string($link, $_POST["awarding_unit"]);
    $awarding_date = mysqli_real_escape_string($link, $_POST["awarding_date"]);
    $content = mysqli_real_escape_string($link, $_POST["content"]);

    echo $ID . $award_name . $launch_year . $awarding_unit . $awarding_date . $content . "<br><br>";

    $sql = "UPDATE out_campus_awards_and_student_guidance_awards SET award_name='$award_name', launch_year='$launch_year', awarding_unit='$awarding_unit', awarding_date='$awarding_date', content='$content' WHERE ID='$ID'";

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