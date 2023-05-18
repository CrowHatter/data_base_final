<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $book_name = mysqli_real_escape_string($link, $_POST["book_name"]);
    $paper_title = mysqli_real_escape_string($link, $_POST["paper_title"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $unit = mysqli_real_escape_string($link, $_POST["unit"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);

    echo $ID . $book_name . $paper_title . $aurthor . $unit . $page . $date . "<br><br>";

    $sql = "UPDATE book_paper SET book_name='$book_name', paper_title='$paper_title', aurthor='$aurthor', unit='$unit', page='$page', date='$date' WHERE ID='$ID'";

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