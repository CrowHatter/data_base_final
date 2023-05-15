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
