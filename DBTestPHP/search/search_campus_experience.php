<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM campus_experience WHERE unit LIKE '%{$input}%' OR job_position LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["unit"] . "</td>";
        echo "<td>" . $row["job_position"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>