<?php
echo "input not found.";
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM periodicals_paper WHERE paper_title LIKE '%{$input}%' OR aurthor LIKE '%{$input}%' OR periodicals_title LIKE '%{$input}%' OR num_of_rolls LIKE '%{$input}%' OR num_of_period LIKE '%{$input}%' OR page LIKE '%{$input}%' OR date LIKE '%{$input}%' OR level LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["paper_title"] . "</td>";
        echo "<td>" . $row["aurthor"] . "</td>";
        echo "<td>" . $row["periodicals_title"] . "</td>";
        echo "<td>" . $row["num_of_rolls"] . "</td>";
        echo "<td>" . $row["num_of_period"] . "</td>";
        echo "<td>" . $row["page"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["level"] . "</td>";
        echo "</tr>";
    }
    mysqli_close($link);
}

?>