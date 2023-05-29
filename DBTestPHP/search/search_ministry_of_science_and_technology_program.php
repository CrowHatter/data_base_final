<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM ministry_of_science_and_technology_program WHERE project_name LIKE '%{$input}%' OR project_number LIKE '%{$input}%' OR start_end LIKE '%{$input}%' OR job_position LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["project_name"] . "</td>";
        echo "<td>" . $row["project_number"] . "</td>";
        echo "<td>" . $row["start_end"] . "</td>";
        echo "<td>" . $row["job_position"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>