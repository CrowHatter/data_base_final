<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM campus_lecture WHERE lecture_name LIKE '%{$input}%' OR lecture_unit LIKE '%{$input}%' OR lecture_date LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["lecture_name"] . "</td>";
        echo "<td>" . $row["lecture_unit"] . "</td>";
        echo "<td>" . $row["lecture_date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>