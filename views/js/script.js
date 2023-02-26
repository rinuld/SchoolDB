function showStudent() {
    var x = document.getElementById("studentRecords");
    var y = document.getElementById("table2");
    if (x.style.display === "none") {
      x.style.display = "flex";
      y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "flex";
    }
}

function showCourse() {
    var x = document.getElementById("courseRecords");
    var y = document.getElementById("table1");
    if (x.style.display === "none") {
      x.style.display = "flex";
      y.style.display = "none";
    } else {
      x.style.display = "none";
      y.style.display = "flex";
    }
}