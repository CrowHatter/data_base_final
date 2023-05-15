<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = time();
    $book_name = mysqli_real_escape_string($link, $_POST["book_name"]);
    $paper_title = mysqli_real_escape_string($link, $_POST["paper_title"]);
    $aurthor = mysqli_real_escape_string($link, $_POST["aurthor"]);
    $unit = mysqli_real_escape_string($link, $_POST["unit"]);
    $page = mysqli_real_escape_string($link, $_POST["page"]);
    $date = mysqli_real_escape_string($link, $_POST["date"]);

    echo "$ID";
    echo "$book_name";
    echo "$paper_title";
    echo "$aurthor";
    echo "$unit";
    echo "$page";
    echo "$date";
    echo "<br><br>";

    $sql = "INSERT INTO book_paper VALUES ('$ID','$book_name','$paper_title','$aurthor','$unit','$page','$date')";

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