<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $paper_title = mysqli_real_escape_string($link, $_POST["paper_title"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $periodicals_title = mysqli_real_escape_string($link, $_POST["periodicals_title"]);
    $num_of_rolls = mysqli_real_escape_string($link, $_POST["num_of_rolls"]);
    $num_of_period = mysqli_real_escape_string($link, $_POST["num_of_period"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);
    $level = mysqli_real_escape_string($link, $_POST["level"]);

    echo $ID . $paper_title . $aurthor . $periodicals_title . $num_of_rolls . $num_of_period . $page . $date . $level . "<br><br>";

    $sql = "UPDATE periodicals_paper SET paper_title='$paper_title', aurthor='$aurthor', periodicals_title='$periodicals_title', num_of_rolls='$num_of_rolls', num_of_period='$num_of_period', page='$page', date='$date', level='$level' WHERE ID='$ID'";

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