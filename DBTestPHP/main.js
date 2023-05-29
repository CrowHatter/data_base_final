
function showDialog1() {
    const dialog = document.getElementById("Dialog1");
    dialog.show();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "initial";
}
function closeDialog1() {
    const dialog = document.getElementById("Dialog1");
    dialog.close();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "none";
}

function showDialog2() {
    const dialog = document.getElementById("Dialog2");
    dialog.show();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "initial";
}
function closeDialog2() {
    const dialog = document.getElementById("Dialog2");
    dialog.close();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "none";
}

function showDialog3() {
    const dialog = document.getElementById("Dialog3");
    dialog.show();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "initial";
}
function closeDialog3() {
    const dialog = document.getElementById("Dialog3");
    dialog.close();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "none";
}

function showDialog4() {
    const dialog = document.getElementById("Dialog4");
    dialog.show();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "initial";
}
function closeDialog4() {
    const dialog = document.getElementById("Dialog4");
    dialog.close();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "none";
}

function showDialog5() {
    const dialog = document.getElementById("Dialog5");
    dialog.show();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "initial";
}
function closeDialog5() {
    const dialog = document.getElementById("Dialog5");
    dialog.close();
    const blur = document.getElementById("Filter");
    document.getElementById("Filter").style.display = "none";
}

function ShowPaper(str) {
    switch (str) {
        case "periodicals_paper":
            document.getElementById("periodicals_paper").style.display = "initial";
            document.getElementById("meeting_paper").style.display = "none";
            document.getElementById("book_paper").style.display = "none";
            break;
        case "meeting_paper":
            document.getElementById("periodicals_paper").style.display = "none";
            document.getElementById("meeting_paper").style.display = "initial";
            document.getElementById("book_paper").style.display = "none";
            break;
        case "book_paper":
            document.getElementById("periodicals_paper").style.display = "none";
            document.getElementById("meeting_paper").style.display = "none";
            document.getElementById("book_paper").style.display = "initial";
            break;

        default:
            document.getElementById("periodicals_paper").style.display = "none";
            document.getElementById("meeting_paper").style.display = "none";
            document.getElementById("book_paper").style.display = "none";
            break;
    }
}

function ShowLectureBook(str) {
    switch (str) {
        case "campus_lecture":
            document.getElementById("campus_lecture").style.display = "initial";
            document.getElementById("textbooks_and_works").style.display = "none";
            break;
        case "textbooks_and_works":
            document.getElementById("campus_lecture").style.display = "none";
            document.getElementById("textbooks_and_works").style.display = "initial";
            break;

        default:
            document.getElementById("campus_lecture").style.display = "none";
            document.getElementById("textbooks_and_works").style.display = "none";
            break;
    }
}

function ShowAwards(str) {
    switch (str) {
        case "campus_awards_and_student_guidance_awards":
            document.getElementById("campus_awards_and_student_guidance_awards").style.display = "initial";
            document.getElementById("out_campus_awards_and_student_guidance_awards").style.display = "none";
            break;
        case "out_campus_awards_and_student_guidance_awards":
            document.getElementById("campus_awards_and_student_guidance_awards").style.display = "none";
            document.getElementById("out_campus_awards_and_student_guidance_awards").style.display = "initial";
            break;
        default:
            document.getElementById("campus_awards_and_student_guidance_awards").style.display = "none";
            document.getElementById("out_campus_awards_and_student_guidance_awards").style.display = "none";
            break;
    }
}

function ShowProgram(str) {
    switch (str) {
        case "Industry_University_Cooperation_Program":
            document.getElementById("Industry_University_Cooperation_Program").style.display = "initial";
            document.getElementById("ministry_of_science_and_technology_program").style.display = "none";
            break;
        case "ministry_of_science_and_technology_program":
            document.getElementById("Industry_University_Cooperation_Program").style.display = "none";
            document.getElementById("ministry_of_science_and_technology_program").style.display = "initial";
            break;
        default:
            document.getElementById("Industry_University_Cooperation_Program").style.display = "none";
            document.getElementById("ministry_of_science_and_technology_program").style.display = "none";
            break;
    }
}

function ShowExperience(str) {
    switch (str) {
        case "campus_experience":
            document.getElementById("campus_experience").style.display = "initial";
            document.getElementById("out_campus_experience").style.display = "none";
            break;
        case "out_campus_experience":
            document.getElementById("campus_experience").style.display = "none";
            document.getElementById("out_campus_experience").style.display = "initial";
            break;
        default:
            document.getElementById("campus_experience").style.display = "none";
            document.getElementById("out_campus_experience").style.display = "none";
            break;
    }
}

function SearchPeriodicalsPaper(str) {
    if (str == "") {
        document.getElementById("sarch_periodicals_paper_hint").innerHTML = "";
        return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("sarch_periodicals_paper_hint").innerHTML = this.responseText;
    }
    xhttp.open("GET", "test.php?q=" + str);
    xhttp.send();
}