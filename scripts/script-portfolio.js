function look(elemId1, elemId2) {
    let elem1 = document.getElementById(elemId1);
    let elem2 = document.getElementById(elemId2);

    if (elem1.style.display === "block") {
        elem1.style.display = "none";
        elem2.style.filter = "none";
    } else {
        elem1.style.display = "block";
        elem1.style.animation = "show 1s"
        elem2.style.filter = "blur(5px)";
    }
}

function showPage(elemId1, elemId2, elemId3) {
    let elem1 = document.getElementById(elemId1);
    let elem2 = document.getElementById(elemId2);
    let elem3 = document.getElementById(elemId3);

    elem1.style.display = "block";
    elem1.style.animation = "show 1s"
    elem2.style.display = "none";
    elem3.style.display = "none";
}