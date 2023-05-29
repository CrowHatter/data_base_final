<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM textbooks_and_works WHERE bookname LIKE '%{$input}%' OR aurthor LIKE '%{$input}%' OR publisher LIKE '%{$input}%' OR type LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["bookname"] . "</td>";
        echo "<td>" . $row["aurthor"] . "</td>";
        echo "<td>" . $row["publisher"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>