<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $bookname = mysqli_real_escape_string($link, $_POST["bookname"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $publisher = mysqli_real_escape_string($link, $_POST["publisher"]);
    $type = mysqli_real_escape_string($link, $_POST["type"]);

    echo "$ID";
    echo "$bookname";
    echo "$aurthor";
    echo "$publisher";
    echo "$type";
    echo "<br><br>";

    $sql = "INSERT INTO textbooks_and_works VALUES ('$ID','$bookname', '$aurthor', '$publisher', '$type')";

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