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
    $periodicals_title = mysqli_real_escape_string($link, $_POST["periodicals_title"]);
    $num_of_rolls = mysqli_real_escape_string($link, $_POST["num_of_rolls"]);
    $num_of_period = mysqli_real_escape_string($link, $_POST["num_of_period"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);
    $level = mysqli_real_escape_string($link, $_POST["level"]);

    echo "$ID";
    echo "$paper_title";
    echo "$aurthor";
    echo "$periodicals_title";
    echo "$num_of_rolls";
    echo "$num_of_period";
    echo "$page";
    echo "$date";
    echo "$level";
    echo "<br><br>";

    $sql = "INSERT INTO periodicals_paper VALUES ('$ID','$paper_title','$aurthor','$periodicals_title','$num_of_rolls','$num_of_period','$page','$date','$level')";

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