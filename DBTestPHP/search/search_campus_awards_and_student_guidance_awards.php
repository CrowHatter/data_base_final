<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM campus_awards_and_student_guidance_awards WHERE award_name LIKE '%{$input}%' OR launch_year LIKE '%{$input}%' OR awarding_unit LIKE '%{$input}%' OR content LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["award_name"] . "</td>";
        echo "<td>" . $row["launch_year"] . "</td>";
        echo "<td>" . $row["awarding_unit"] . "</td>";
        echo "<td>" . $row["content"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>