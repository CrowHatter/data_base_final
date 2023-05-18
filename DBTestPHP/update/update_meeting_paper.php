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
    $meeting_title = mysqli_real_escape_string($link, $_POST["meeting_title"]);
    $meeting_unit = mysqli_real_escape_string($link, $_POST["meeting_unit"]);
    $date = mysqli_real_escape_string($link, $_POST["num_of_pdateeriod"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);

    echo $ID . $paper_title . $aurthor . $meeting_title . $meeting_unit . $date . $page . "<br><br>";

    $sql = "UPDATE meeting_paper SET paper_title='$paper_title', aurthor='$aurthor', meeting_title='$meeting_title', meeting_unit='$meeting_unit', date='$date', page='$page' WHERE ID='$ID'";

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