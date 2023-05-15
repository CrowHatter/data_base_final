<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $award_name = mysqli_real_escape_string($link, $_POST["award_name"]);
    $launch_year = mysqli_real_escape_string($link, $_POST["launch_year"]);
    $awarding_unit = mysqli_real_escape_string($link, $_POST["awarding_unit"]);
    $awarding_date = mysqli_real_escape_string($link, $_POST["awarding_date"]);
    $content = mysqli_real_escape_string($link, $_POST["content"]);

    echo "$ID";
    echo "$award_name";
    echo "$launch_year";
    echo "$awarding_unit";
    echo "$content";
    echo "<br><br>";

    $sql = "INSERT INTO campus_awards_and_student_guidance_awards VALUES ('$ID','$award_name', '$launch_year', '$awarding_unit', '$awarding_date', '$content')";

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