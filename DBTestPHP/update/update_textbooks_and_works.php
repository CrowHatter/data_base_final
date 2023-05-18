<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $bookname = mysqli_real_escape_string($link, $_POST["bookname"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $publisher = mysqli_real_escape_string($link, $_POST["publisher"]);
    $type = mysqli_real_escape_string($link, $_POST["type"]);

    echo $ID . $bookname . $aurthor . $publisher . $type . "<br><br>";

    $sql = "UPDATE textbooks_and_works SET bookname='$bookname', aurthor='$aurthor', publisher='$publisher', type='$type' WHERE ID='$ID'";

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