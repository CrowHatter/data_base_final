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
                <div id="personal_basic_data" style="display: none">
                    <h2>學歷</h2>
                    <form action="insert/insert_academic_qualifications.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="school">school: </label><br />
                                    <label for="department">department: </label><br />
                                    <label for="degree">degree: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="school" class="InputBlock" required><br />
                                <input type="text" name="department" class="InputBlock" required><br />
                                <input type="text" name="degree" class="InputBlock" required><br />
                            </div>
                            <br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>專長</h2>
                    <form action="insert/insert_expertise.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="area">area: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="area" class="InputBlock" required><br />
                            </div>
                            <br /><input type="submit">
                        </div>
                    </form>
                </div>
                <div id="paper" style="display: none">
                    <h2>期刊論文</h2>
                    <form action="insert/insert_periodicals_paper.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="paper_title">paper_title: </label><br />
                                    <label for="aurthor">aurthor: </label><br />
                                    <label for="periodicals_title">periodicals_title: </label><br />
                                    <label for="num_of_rolls">num_of_rolls: </label><br />
                                    <label for="num_of_period">num_of_period: </label><br />
                                    <label for="page">page: </label><br />
                                    <label for="date">date: </label><br />
                                    <label for="level">level: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="paper_title" class="InputBlock" required><br />
                                <input type="text" name="aurthor" class="InputBlock" required><br />
                                <input type="text" name="periodicals_title" class="InputBlock"><br />
                                <input type="text" name="num_of_rolls" class="InputBlock"><br />
                                <input type="text" name="num_of_period" class="InputBlock"><br />
                                <input type="text" name="page" class="InputBlock"><br />
                                <input type="text" name="date" class="InputBlock"><br />
                                <input type="text" name="level" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>會議論文</h2>
                    <form action="insert/insert_meeting_paper.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="paper_title">paper_title: </label><br />
                                    <label for="aurthor">aurthor: </label><br />
                                    <label for="meeting_title">meeting_title: </label><br />
                                    <label for="meeting_unit">meeting_unit: </label><br />
                                    <label for="date">date: </label><br />
                                    <label for="page">page: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="paper_title" class="InputBlock" required><br />
                                <input type="text" name="aurthor" class="InputBlock" required><br />
                                <input type="text" name="meeting_title" class="InputBlock"><br />
                                <input type="text" name="meeting_unit" class="InputBlock"><br />
                                <input type="text" name="date" class="InputBlock"><br />
                                <input type="text" name="page" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>專書論文</h2>
                    <form action="insert/insert_book_paper.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="book_name">book_name: </label><br />
                                    <label for="paper_title">paper_title: </label><br />
                                    <label for="aurthor">aurthor: </label><br />
                                    <label for="unit">unit: </label><br />
                                    <label for="page">page: </label><br />
                                    <label for="date">date: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="book_name" class="InputBlock" required><br />
                                <input type="text" name="paper_title" class="InputBlock" required><br />
                                <input type="text" name="aurthor" class="InputBlock"><br />
                                <input type="text" name="unit" class="InputBlock"><br />
                                <input type="text" name="page" class="InputBlock"><br />
                                <input type="text" name="date" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                </div>
                <div id="lecture_and_book" style="display: none">
                    <h2>校內外演講</h2>
                    <form action="insert/insert_campus_lecture.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="lecture_name">lecture_name: </label><br />
                                    <label for="lecture_unit">lecture_unit: </label><br />
                                    <label for="lecture_date">lecture_date: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="lecture_name" class="InputBlock" required><br />
                                <input type="text" name="lecture_unit" class="InputBlock" required><br />
                                <input type="text" name="lecture_date" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>教材與作品</h2>
                    <form action="insert/insert_textbooks_and_works.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="bookname">bookname: </label><br />
                                    <label for="aurthor">aurthor: </label><br />
                                    <label for="publisher">publisher: </label><br />
                                    <label for="type">type: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="bookname" class="InputBlock" required><br />
                                <input type="text" name="aurthor" class="InputBlock" required><br />
                                <input type="text" name="publisher" class="InputBlock"><br />
                                <input type="text" name="type" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                </div>
                <div id="teach_award" style="display: none">
                    <h2>校內獎勵與指導生獲獎</h2>
                    <form action="insert/insert_campus_awards_and_student_guidance_awards.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="award_name">award_name: </label><br />
                                    <label for="launch_year">launch_year: </label><br />
                                    <label for="awarding_unit">awarding_unit: </label><br />
                                    <label for="awarding_date">awarding_date: </label><br />
                                    <label for="content">content: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="award_name" class="InputBlock" required><br />
                                <input type="text" name="launch_year" class="InputBlock" required><br />
                                <input type="text" name="awarding_unit" class="InputBlock"><br />
                                <input type="text" name="awarding_date" class="InputBlock"><br />
                                <input type="text" name="content" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>校外獎勵與指導生獲獎</h2>
                    <form action="insert/insert_out_campus_awards_and_student_guidance_awards.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="award_name">award_name: </label><br />
                                    <label for="launch_year">launch_year: </label><br />
                                    <label for="awarding_unit">awarding_unit: </label><br />
                                    <label for="awarding_date">awarding_date: </label><br />
                                    <label for="content">content: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="award_name" class="InputBlock" required><br />
                                <input type="text" name="launch_year" class="InputBlock" required><br />
                                <input type="text" name="awarding_unit" class="InputBlock"><br />
                                <input type="text" name="awarding_date" class="InputBlock"><br />
                                <input type="text" name="content" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                </div>
                <div id="participate_program" style="display: none">
                    <h2>產學合作計畫</h2>
                    <form action="insert/insert_Industry_University_Cooperation_Program.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="project_name">project_name: </label><br />
                                    <label for="start_end">start_end: </label><br />
                                    <label for="position">position: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="project_name" class="InputBlock" required><br />
                                <input type="text" name="start_end" class="InputBlock" required><br />
                                <input type="text" name="position" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>科技部計畫</h2>
                    <form action="insert/insert_ministry_of_science_and_technology_program.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="project_name">project_name: </label><br />
                                    <label for="project_number">project_number: </label><br />
                                    <label for="start_end">start_end: </label><br />
                                    <label for="position">position: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="project_name" class="InputBlock" required><br />
                                <input type="text" name="project_number" class="InputBlock"><br />
                                <input type="text" name="start_end" class="InputBlock" required><br />
                                <input type="text" name="position" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><br /><input type="submit">
                        </div>
                    </form>
                </div>
                <div id="experience" style="display: none">
                    <h2>校內經歷</h2>
                    <form action="insert/insert_campus_experience.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="unit">unit: </label><br />
                                    <label for="job_position">job_position: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="unit" class="InputBlock" required><br />
                                <input type="text" name="job_position" class="InputBlock" required><br />
                            </div>
                            <br /><br /><input type="submit">
                        </div>
                    </form>
                    <h2>校外經歷</h2>
                    <form action="insert/insert_out_campus_experience.php" method="post">
                        <div class="Data-Content">
                            <div class="Data-Title">
                                <div class="AlignRight">
                                    <label for="school">school: </label><br />
                                    <label for="department">department: </label><br />
                                    <label for="degree">degree: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="school" class="InputBlock" required><br />
                                <input type="text" name="department" class="InputBlock" required><br />
                                <input type="text" name="degree" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><input type="submit">
                        </div>
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