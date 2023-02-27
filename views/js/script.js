$(document).ready(function () {
  $('#studentTable').DataTable();
});

$(document).ready(function () {
  $('#courseTable').DataTable();
});

function showStudent() {
  var a = document.getElementById("table2");
  var b = document.getElementById("studentRecords");
  var c = document.getElementById("hideTable");
  var d = document.getElementById("addStudent");
  a.style.display = "none";
  b.style.display = "flex";
  c.style.display = "flex";
  d.style.display = "flex";
}

function showCourse() {
  var a = document.getElementById("table1");
  var b = document.getElementById("courseRecords");
  var c = document.getElementById("hideTable");
  var d = document.getElementById("addCourse");
  a.style.display = "none";
  b.style.display = "flex";
  c.style.display = "flex";
  d.style.display = "flex";
}

function hideTable() {
  var a = document.getElementById("studentRecords");
  var b = document.getElementById("courseRecords");
  var c = document.getElementById("table1");
  var d = document.getElementById("table2");
  var e = document.getElementById("hideTable");
  var f = document.getElementById("addStudent");
  var g = document.getElementById("addCourse");

  if (a.style.display === "flex") {
    a.style.display = "none";
    d.style.display = "flex";
    e.style.display = "none";
    f.style.display = "none";
  } else if (b.style.display === "flex") {
    b.style.display = "none";
    c.style.display = "flex";
    e.style.display = "none";
    g.style.display = "none";
  }
}