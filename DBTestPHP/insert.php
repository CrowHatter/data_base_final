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
                                    <label>school: </label><br />
                                    <label>department: </label><br />
                                    <label>degree: </label><br />
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
                                    <label>area: </label><br />
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
                                    <label>paper_title: </label><br />
                                    <label>aurthor: </label><br />
                                    <label>periodicals_title: </label><br />
                                    <label>num_of_rolls: </label><br />
                                    <label>num_of_period: </label><br />
                                    <label>page: </label><br />
                                    <label>date: </label><br />
                                    <label>level: </label><br />
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
                                    <label>paper_title: </label><br />
                                    <label>aurthor: </label><br />
                                    <label>meeting_title: </label><br />
                                    <label>meeting_unit: </label><br />
                                    <label>date: </label><br />
                                    <label>page: </label><br />
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
                                    <label>book_name: </label><br />
                                    <label>paper_title: </label><br />
                                    <label>aurthor: </label><br />
                                    <label>unit: </label><br />
                                    <label>page: </label><br />
                                    <label>date: </label><br />
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
                                    <label>lecture_name: </label><br />
                                    <label>lecture_unit: </label><br />
                                    <label>lecture_date: </label><br />
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
                                    <label>bookname: </label><br />
                                    <label>aurthor: </label><br />
                                    <label>publisher: </label><br />
                                    <label>type: </label><br />
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
                                    <label>award_name: </label><br />
                                    <label>launch_year: </label><br />
                                    <label>awarding_unit: </label><br />
                                    <label>awarding_date: </label><br />
                                    <label>content: </label><br />
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
                                    <label>award_name: </label><br />
                                    <label>launch_year: </label><br />
                                    <label>awarding_unit: </label><br />
                                    <label>awarding_date: </label><br />
                                    <label>content: </label><br />
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
                                    <label>project_name: </label><br />
                                    <label>start_end: </label><br />
                                    <label>position: </label><br />
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
                                    <label>project_name: </label><br />
                                    <label>project_number: </label><br />
                                    <label>start_end: </label><br />
                                    <label>position: </label><br />
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
                                    <label>unit: </label><br />
                                    <label>job_position: </label><br />
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
                                    <label>unit: </label><br />
                                    <label>job_position: </label><br />
                                    <label>school: </label><br />
                                </div>
                            </div>
                            <div class="Data-Items">
                                <input type="text" name="unit" class="InputBlock" required><br />
                                <input type="text" name="job_position" class="InputBlock" required><br />
                                <input type="text" name="school" class="InputBlock"><br />
                            </div>
                            <br /><br /><br /><input type="submit">
                        </div>
                    </form>
                </div>
            </div>
            <div class="WorkBlock" id="WorkBlock2" style="display: none">
                <h1>刪除</h1>
                <form action="">
                    <select name="Experience" onchange="DeleteChange(this.value)">
                        <option value="">none</option>
                        <option value="personal_basic_data_d">個人基本資料</option>
                        <option value="paper_d">論文</option>
                        <option value="lecture_and_book_d">演講紀錄與專書</option>
                        <option value="teach_award_d">指導獲獎</option>
                        <option value="participate_program_d">參與計畫</option>
                        <option value="experience_d">經歷</option>
                    </select>
                </form>
                <div id="personal_basic_data_d" style="display: none">
                    <h2>學歷</h2>
                    <form action="delete/delete_academic_qualifications.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["school"] . $row["department"] . $row["degree"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>專長</h2>
                    <form action="delete/delete_expertise.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["area"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
                <div id="paper_d" style="display: none">
                    <h2>期刊論文</h2>
                    <form action="delete/delete_periodicals_paper.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["paper_title"] . $row["aurthor"] . $row["periodicals_title"] . $row["num_of_rolls"] . $row["num_of_period"] . $row["page"] . $row["date"] . $row["level"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>會議論文</h2>
                    <form action="delete/delete_meeting_paper.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["paper_title"] . $row["aurthor"] . $row["meeting_title"] . $row["meeting_unit"] . $row["date"] . $row["page"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>專書論文</h2>
                    <form action="delete/delete_book_paper.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["book_name"] . $row["paper_title"] . $row["aurthor"] . $row["unit"] . $row["page"] . $row["date"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
                <div id="lecture_and_book_d" style="display: none">
                    <h2>校內外演講</h2>
                    <form action="delete/delete_campus_lecture.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["lecture_name"] . $row["lecture_unit"] . $row["lecture_date"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>教材與作品</h2>
                    <form action="delete/delete_textbooks_and_works.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["bookname"] . $row["aurthor"] . $row["publisher"] . $row["type"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
                <div id="teach_award_d" style="display: none">
                    <h2>校內獎勵與指導生獲獎</h2>
                    <form action="delete/delete_campus_awards_and_student_guidance_awards.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["award_name"] . $row["launch_year"] . $row["awarding_unit"] . $row["awarding_date"] . $row["content"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>校外獎勵與指導生獲獎</h2>
                    <form action="delete/delete_out_campus_awards_and_student_guidance_awards.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["award_name"] . $row["launch_year"] . $row["awarding_unit"] . $row["awarding_date"] . $row["content"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
                <div id="participate_program_d" style="display: none">
                    <h2>產學合作計畫</h2>
                    <form action="delete/delete_Industry_University_Cooperation_Program.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["project_name"] . $row["start_end"] . $row["position"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>科技部計畫</h2>
                    <form action="delete/delete_ministry_of_science_and_technology_program.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["project_name"] . $row["project_number"] . $row["start_end"] . $row["position"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
                <div id="experience_d" style="display: none">
                    <h2>校內經歷</h2>
                    <form action="delete/delete_campus_experience.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["unit"] . $row["job_position"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                    <h2>校外經歷</h2>
                    <form action="delete/delete_out_campus_experience.php" method="post">
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
                            echo "<label>";
                            echo '<input type="checkbox" name="checkbox[]" value=' . $row["ID"] . ' />' . $row["unit"] . $row["job_position"] . $row["school"] . "</label>";
                            echo "<br><br>";
                            echo "</label>";
                        }
                        mysqli_close($link);
                        ?>
                        <input type="submit" name="button" id="button" value="delete" />
                    </form>
                </div>
            </div>
            <div class="WorkBlock" id="WorkBlock3" style="display: none">
                <h1>修改</h1>
                <form action="">
                    <select name="Experience" onchange="">
                        <option value="">none</option>
                        <option value="personal_basic_data_u">個人基本資料</option>
                        <option value="paper_u">論文</option>
                        <option value="lecture_and_book_u">演講紀錄與專書</option>
                        <option value="teach_award_u">指導獲獎</option>
                        <option value="participate_program_u">參與計畫</option>
                        <option value="experience_u">經歷</option>
                    </select>
                </form>
                <div id="personal_basic_data_u">
                    <h2>學歷</h2>

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
                        echo '<form action="update/update_academic_qualifications.php" method="post">';
                        echo "<label>";
                        echo '<input type="hidden" name=ID value=' . $row["ID"] . ' />';
                        echo '<input type="text" name=school value=' . $row["school"] . ' />';
                        echo '<input type="text" name=department value=' . $row["department"] . ' />';
                        echo '<input type="text" name=degree value=' . $row["degree"] . ' />';
                        echo '<input type="submit"/>';
                        echo "</label>";
                        echo "<br><br>";
                        echo '</form>';
                    }
                    mysqli_close($link);
                    ?>

                </div>
                <div id="paper_u">

                </div>
                <div id="lecture_and_book_u">

                </div>
                <div id="teach_award_u">

                </div>
                <div id="participate_program_u">

                </div>
                <div id="experience_u">

                </div>
            </div>
        </div>
    </div>


</body>

</html>