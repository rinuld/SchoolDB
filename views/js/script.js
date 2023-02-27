$(document).ready(function () {
  $('#studentTable').DataTable();
});

$(document).ready(function () {
  $('#courseTable').DataTable();
});

function showStudent() {
  var x = document.getElementById("studentRecords");
  var y = document.getElementById("table2");
  var z = document.getElementById("hideTable");
  x.style.display = "flex";
  y.style.display = "none";
  z.style.display = "flex";
}

function showCourse() {
  var x = document.getElementById("courseRecords");
  var y = document.getElementById("table1");
  var z = document.getElementById("hideTable");
  x.style.display = "flex";
  y.style.display = "none";
  z.style.display = "flex";
}

function hideTable() {
  var a = document.getElementById("studentRecords");
  var b = document.getElementById("courseRecords");
  var c = document.getElementById("table1");
  var d = document.getElementById("table2");
  var e = document.getElementById("hideTable");
  if (a.style.display === "flex") {
    a.style.display = "none";
    d.style.display = "flex";
    e.style.display = "none";
  } else if (b.style.display === "flex") {
    b.style.display = "none";
    c.style.display = "flex";
    e.style.display = "none";
  }
}

