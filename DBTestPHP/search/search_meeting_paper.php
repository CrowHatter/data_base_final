<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM meeting_paper WHERE paper_title LIKE '%{$input}%' OR aurthor LIKE '%{$input}%' OR meeting_title LIKE '%{$input}%' OR meeting_unit LIKE '%{$input}%' OR date LIKE '%{$input}%' OR page LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["paper_title"] . "</td>";
        echo "<td>" . $row["aurthor"] . "</td>";
        echo "<td>" . $row["meeting_title"] . "</td>";
        echo "<td>" . $row["meeting_unit"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["page"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>