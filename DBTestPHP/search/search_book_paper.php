<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );
    $sql = "SELECT * FROM book_paper WHERE book_name LIKE '%{$input}%' OR paper_title LIKE '%{$input}%' OR aurthor LIKE '%{$input}%' OR unit LIKE '%{$input}%' OR page LIKE '%{$input}%' OR date LIKE '%{$input}%'";
    $result = mysqli_query($link, $sql);
    echo "<table>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["book_name"] . "</td>";
        echo "<td>" . $row["paper_title"] . "</td>";
        echo "<td>" . $row["aurthor"] . "</td>";
        echo "<td>" . $row["unit"] . "</td>";
        echo "<td>" . $row["page"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
}

?>