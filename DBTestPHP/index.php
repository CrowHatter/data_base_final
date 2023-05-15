<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料庫作業</title>
    <link rel="stylesheet" href="main_style.css">
</head>

<body>
    <script src="main.js"></script>
    <div id="Filter"></div>
    <dialog id="Dialog1">
        <button id="CloseButton" onclick="closeDialog1() ">x</button>
        <h1>論文</h1>
        <form action="">
            <select name="paper" onchange="ShowPaper(this.value)">
                <option value="">none</option>
                <option value="periodicals_paper">期刊論文</option>
                <option value="meeting_paper">會議論文</option>
                <option value="book_paper">專書論文</option>
            </select>
        </form>
        <div id="periodicals_paper" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM periodicals_paper";
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
                ?>
            </table>
        </div>
        <div id="meeting_paper" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM meeting_paper";
                $result = mysqli_query($link, $sql);
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
                mysqli_close($link);
                ?>
            </table>
        </div>
        <div id="book_paper" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM book_paper";
                $result = mysqli_query($link, $sql);
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
                mysqli_close($link);
                ?>
            </table>
        </div>
    </dialog>
    <dialog id="Dialog2">
        <button id="CloseButton" onclick="closeDialog2() ">x</button>
        <h1>演講紀錄與專書</h1>
        <form action="">
            <select name="lectureAndBook" onchange="ShowLectureBook(this.value)">
                <option value="">none</option>
                <option value="campus_lecture">校內外演講</option>
                <option value="textbooks_and_works">教材與作品</option>
            </select>
        </form>
        <div id="campus_lecture" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM campus_lecture";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["lecture_name"] . "</td>";
                    echo "<td>" . $row["lecture_unit"] . "</td>";
                    echo "<td>" . $row["lecture_date"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
        <div id="textbooks_and_works" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM textbooks_and_works";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["bookname"] . "</td>";
                    echo "<td>" . $row["aurthor"] . "</td>";
                    echo "<td>" . $row["publisher"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
    </dialog>
    <dialog id="Dialog3">
        <button id="CloseButton" onclick="closeDialog3() ">x</button>
        <h1>指導獲獎</h1>
        <form action="">
            <select name="teachAward" onchange="ShowAwards(this.value)">
                <option value="">none</option>
                <option value="campus_awards_and_student_guidance_awards">校內獎勵及指導學生獲獎</option>
                <option value="out_campus_awards_and_student_guidance_awards">校外獎勵及指導學生獲獎</option>
            </select>
        </form>
        <div id="campus_awards_and_student_guidance_awards" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM campus_awards_and_student_guidance_awards";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["launch_year"] . "</td>";
                    echo "<td>" . $row["award_name"] . "</td>";
                    echo "<td>" . $row["awarding_unit"] . "</td>";
                    echo "<td>" . $row["awarding_date"] . "</td>";
                    echo "<td>" . $row["content"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
        <div id="out_campus_awards_and_student_guidance_awards" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM out_campus_awards_and_student_guidance_awards";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["launch_year"] . "</td>";
                    echo "<td>" . $row["award_name"] . "</td>";
                    echo "<td>" . $row["awarding_unit"] . "</td>";
                    echo "<td>" . $row["awarding_date"] . "</td>";
                    echo "<td>" . $row["content"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
    </dialog>
    <dialog id="Dialog4">
        <button id="CloseButton" onclick="closeDialog4() ">x</button>
        <h1>參與計畫</h1>
        <form action="">
            <select name="program" onchange="ShowProgram(this.value)">
                <option value="">none</option>
                <option value="Industry_University_Cooperation_Program">產學合作計畫</option>
                <option value="ministry_of_science_and_technology_program">科技部計畫</option>
            </select>
        </form>
        <div id="Industry_University_Cooperation_Program" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM Industry_University_Cooperation_Program";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["project_name"] . "</td>";
                    echo "<td>" . $row["start_end"] . "</td>";
                    echo "<td>" . $row["position"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
        <div id="ministry_of_science_and_technology_program" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM ministry_of_science_and_technology_program";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["project_name"] . "</td>";
                    echo "<td>" . $row["project_number"] . "</td>";
                    echo "<td>" . $row["start_end"] . "</td>";
                    echo "<td>" . $row["job_position"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
    </dialog>
    <dialog id="Dialog5">
        <button id="CloseButton" onclick="closeDialog5() ">x</button>
        <h1>經歷</h1>
        <form action="">
            <select name="Experience" onchange="ShowExperience(this.value)">
                <option value="">none</option>
                <option value="campus_experience">校內經歷</option>
                <option value="out_campus_experience">校外經歷</option>
            </select>
        </form>
        <div id="campus_experience" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM campus_experience";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["unit"] . "</td>";
                    echo "<td>" . $row["job_position"] . "</td>";
                    echo "<td>" . $row["school"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
        <div id="out_campus_experience" style="display: none;">
            <table>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM out_campus_experience";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["unit"] . "</td>";
                    echo "<td>" . $row["job_position"] . "</td>";
                    echo "<td>" . $row["school"] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </table>
        </div>
    </dialog>
    <header>
        <div style="width: 180px;user-select: none;">
            <a href="https://www.iecs.fcu.edu.tw/"><img src="image/logo.svg" alt="IECS"></a>
        </div>
        <button id="EditPageButton" onclick="location.href='insert.php'">編修資料</button>
    </header>
    <div class="Box">
        <div class="LeftBox">
            <h2 style="color: white">瀏覽</h2>
            <button class="ExButton" onclick="showDialog1()">論文</button>
            <button class="ExButton" onclick="showDialog2()">演講紀錄與專書</button>
            <button class="ExButton" onclick="showDialog3()">指導獲獎</button>
            <button class="ExButton" onclick="showDialog4()">參與計畫</button>
            <button class="ExButton" onclick="showDialog5()">經歷</button>
        </div>
        <div class="RightBox">
            <div class="Box1">
                <h1 style="color: black">個人基本資料</h1>
                <img src="image/ProfessorPhoto.jpg" style="width: 300px" alt="ProfessorPhoto">
                <div style="text-align:center;">
                    <?php
                    $link = mysqli_connect(
                        'localhost',
                        'D1051594',
                        '#eiH4eufi',
                        'D1051594'
                    );
                    $sql = "SELECT * FROM personal_data";
                    $result = mysqli_query($link, $sql);
                    while ($row = $result->fetch_assoc()) {
                        echo '<h1>' . $row['name'] . '</h1>';
                        echo '<h2>' . $row['job_position'] . '</h2>';
                        echo '<h2>' . '分機: ' . $row['phone'] . '</h2>';
                        echo '<h2>' . '信箱: ' . $row['email'] . '</h2>';
                    }
                    mysqli_close($link);
                    ?>
                </div>
            </div>
            <div class="Box2">
                <h2 style="color: black">學歷</h2>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM academic_qualifications";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["school"] . "</td>";
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["degree"] . "</td>";
                    echo "<br><br>";
                    echo "</tr>";
                }
                mysqli_close($link);
                ?>
            </div>
            <div class="Box3">
                <h2 style="color: black">專長</h2>
                <?php
                $link = mysqli_connect(
                    'localhost',
                    'D1051594',
                    '#eiH4eufi',
                    'D1051594'
                );
                $sql = "SELECT * FROM expertise";
                $result = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<p>" . $row["area"] . "<p>";
                }
                mysqli_close($link);
                ?>
            </div>
        </div>
    </div>
</body>

</html>