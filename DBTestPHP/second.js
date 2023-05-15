function showAdd() {
    document.getElementById("AddOption").style.backgroundColor = "#8f8f9b";
    document.getElementById("DeleteOption").style.backgroundColor = "#aaabbe";
    document.getElementById("EditOption").style.backgroundColor = "#aaabbe";

    document.getElementById("WorkBlock1").style.display = "initial";
    document.getElementById("WorkBlock2").style.display = "none";
    document.getElementById("WorkBlock3").style.display = "none";
}

function showDelete() {
    document.getElementById("AddOption").style.backgroundColor = "#aaabbe";
    document.getElementById("DeleteOption").style.backgroundColor = "#8f8f9b";
    document.getElementById("EditOption").style.backgroundColor = "#aaabbe";

    document.getElementById("WorkBlock1").style.display = "none";
    document.getElementById("WorkBlock2").style.display = "initial";
    document.getElementById("WorkBlock3").style.display = "none";
}

function showEdit() {
    document.getElementById("AddOption").style.backgroundColor = "#aaabbe";
    document.getElementById("DeleteOption").style.backgroundColor = "#aaabbe";
    document.getElementById("EditOption").style.backgroundColor = "#8f8f9b";

    document.getElementById("WorkBlock1").style.display = "none";
    document.getElementById("WorkBlock2").style.display = "none";
    document.getElementById("WorkBlock3").style.display = "initial";
}

function InsertChange(str) {
    switch (str) {
        case "personal_basic_data":
            document.getElementById("personal_basic_data").style.display = "initial";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "none";
            break;
        case "paper":
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "initial";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "none";
            break;
        case "lecture_and_book":
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "initial";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "none";
            break;
        case "teach_award":
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "initial";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "none";
            break;
        case "participate_program":
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "initial";
            document.getElementById("experience").style.display = "none";
            break;
        case "experience":
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "initial";
            break;
        default:
            document.getElementById("personal_basic_data").style.display = "none";
            document.getElementById("paper").style.display = "none";
            document.getElementById("lecture_and_book").style.display = "none";
            document.getElementById("teach_award").style.display = "none";
            document.getElementById("participate_program").style.display = "none";
            document.getElementById("experience").style.display = "none";
            break;
    }
}