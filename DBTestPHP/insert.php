<!DOCTYPE html>
<html lang="ch">

<head>
    <title>插入資料</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="second.js"></script>
    <header>
        <div style="width: 180px;user-select: none;">
            <a href="https://www.iecs.fcu.edu.tw/"><img src="image/logo.svg" alt="IECS"></a>
        </div>
        <button id="EditPageButton" onclick="location.href='index.php'">個人頁面</button>
    </header>
    <div class="UnderHeader">
        <div class="LeftHeader">
            <div class="List" id="AddOption" onclick="showAdd()">
                <img src="image/add_icon.png" class="Icon">
                <h2>新增資料</h2>
            </div>
            <div class="List" id="DeleteOption" onclick="showDelete()">
                <img src="image/delete_icon.png" class="Icon">
                <h2>刪除資料</h2>
            </div>
            <div class="List" id="EditOption" onclick="showEdit()">
                <img src="image/edit_icon.png" class="Icon">
                <h2>修改資料</h2>
            </div>
        </div>
        <div class="WorkArea">
            <div class="WorkBlock" id="WorkBlock1" style="display: none">
                <h1>新增</h1>
                <form action="">
                    <select name="Experience" onchange="InsertChange(this.value)">
                        <option value="">none</option>
                        <option value="personal_basic_data">個人基本資料</option>
                        <option value="paper">論文</option>
                        <option value="lecture_and_book">演講紀錄與專書</option>
                        <option value="teach_award">指導獲獎</option>
                        <option value="participate_program">參與計畫</option>
                        <option value="experience">經歷</option>

                    </select>
                </form>
                <div id="personal_basic_data">
                    <h2>學歷</h2>
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        &nbsp school: <input type="text" name="school" required>
                        &nbsp department: <input type="text" name="department" required>
                        &nbsp degree: <input type="text" name="degree" required>
                        <input type="submit">
                    </form>
                    <h2>專長</h2>
                    <form action="insert/insert_expertise.php" method="post">
                        &nbsp area: <input type="text" name="area" required>
                        <input type="submit">
                    </form>
                </div>
                <div id="paper">
                    <h2>期刊論文</h2>
                    <form action="insert/insert_periodicals_paper.php" method="post">
                        &nbsp paper_title: <input type="text" name="paper_title" required>
                        &nbsp aurthor: <input type="text" name="aurthor" required>
                        &nbsp periodicals_title: <input type="text" name="periodicals_title">
                        &nbsp num_of_rolls: <input type="text" name="num_of_rolls">
                        <br>
                        &nbsp num_of_period: <input type="text" name="num_of_period">
                        &nbsp page: <input type="text" name="page">
                        &nbsp date: <input type="text" name="date">
                        &nbsp level: <input type="text" name="level">
                        <input type="submit">
                    </form>
                    <h2>會議論文</h2>
                    <form action="insert/insert_meeting_paper.php" method="post">
                        &nbsp paper_title: <input type="text" name="paper_title" required>
                        &nbsp aurthor: <input type="text" name="aurthor" required>
                        &nbsp meeting_title: <input type="text" name="meeting_title">
                        &nbsp meeting_unit: <input type="text" name="meeting_unit">
                        <br>
                        &nbsp date: <input type="text" name="date">
                        &nbsp page: <input type="text" name="page">
                        <input type="submit">
                    </form>
                    <h2>專書論文</h2>
                    <form action="insert/insert_book_paper.php" method="post">
                        &nbsp book_name: <input type="text" name="book_name" required>
                        &nbsp paper_title: <input type="text" name="paper_title" required>
                        &nbsp aurthor: <input type="text" name="aurthor">
                        &nbsp unit: <input type="text" name="unit">
                        <br>
                        &nbsp page: <input type="text" name="page">
                        &nbsp date: <input type="text" name="date">
                        <input type="submit">
                    </form>
                </div>
                <div id="lecture_and_book">
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        school: <input type="text" name="school" required>
                        department: <input type="text" name="department" required>
                        degree: <input type="text" name="degree" required>
                        <input type="submit">
                    </form>
                </div>
                <div id="teach_award">
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        school: <input type="text" name="school" required>
                        department: <input type="text" name="department" required>
                        degree: <input type="text" name="degree" required>
                        <input type="submit">
                    </form>
                </div>
                <div id="personal_basic_data">
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        school: <input type="text" name="school" required>
                        department: <input type="text" name="department" required>
                        degree: <input type="text" name="degree" required>
                        <input type="submit">
                    </form>
                </div>
                <div id="experience">
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        school: <input type="text" name="school" required>
                        department: <input type="text" name="department" required>
                        degree: <input type="text" name="degree" required>
                        <input type="submit">
                    </form>
                </div>

            </div>
            <div class="WorkBlock" id="WorkBlock2" style="display: none">
                <h1>刪除</h1>
                <form action="delete/delete_test.php" method="post">
                    <?php
                    $link = mysqli_connect(
                        'localhost',
                        'D1051594',
                        '#eiH4eufi',
                        'D1051594'
                    );
                    $sql = "SELECT * FROM TEST";
                    $result = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<label>";
                        echo '<input type="checkbox" name="checkbox[]" id="checkbox_0" value=' . $row["id"] . ' />' . $row["id"] . $row["name"] . "</label>";
                        echo "<br><br>";
                        echo "</label>";
                    }
                    mysqli_close($link);
                    ?>
                    <input type="submit" name="button" id="button" value="送出" />
                </form>
            </div>
            <div class="WorkBlock" id="WorkBlock3" style="display: none">
                <h1>修改</h1>
                <form action="insert_sql.php" method="post">
                    id: <input type="text" name="id" required>
                    name: <input type="text" name="name" required>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>


</body>

</html>