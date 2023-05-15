<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $paper_title = mysqli_real_escape_string($link, $_POST["paper_title"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $meeting_title = mysqli_real_escape_string($link, $_POST["meeting_title"]);
    $meeting_unit = mysqli_real_escape_string($link, $_POST["meeting_unit"]);
    $date = mysqli_real_escape_string($link, $_POST["num_of_pdateeriod"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);

    echo "$ID";
    echo "$paper_title";
    echo "$aurthor";
    echo "$meeting_title";
    echo "$meeting_unit";
    echo "$date";
    echo "$page";
    echo "<br><br>";

    $sql = "INSERT INTO meeting_paper VALUES ('$ID','$paper_title','$aurthor','$meeting_title','$meeting_unit','$date','$page')";

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