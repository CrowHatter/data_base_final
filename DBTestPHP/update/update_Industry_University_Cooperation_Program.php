<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $link = mysqli_connect(
        'localhost',
        'D1051594',
        '#eiH4eufi',
        'D1051594'
    );

    $ID = mysqli_real_escape_string($link, $_POST["ID"]);
    $project_name = mysqli_real_escape_string($link, $_POST["project_name"]);
    $start_end = mysqli_real_escape_string($link, $_POST["start_end"]);
    $position = mysqli_real_escape_string($link, $_POST["position"]);

    echo $ID . $project_name . $start_end . $position . "<br><br>";

    $sql = "UPDATE Industry_University_Cooperation_Program SET project_name='$project_name', start_end='$start_end', position='$position' WHERE ID='$ID'";

    try {
        $result = mysqli_query($link, $sql);
        echo "修改成功<br>";
    } catch (Exception $e) {
        echo $e->getMessage() . "<br>";
    }

    mysqli_close($link);
    header("Refresh: 2; url=http://140.134.53.58/~D1051594/DBTestPHP/insert.php");
}
?>