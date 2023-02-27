$(function() {

    // Add Student
    $("#student-form").submit(function (e) {
        e.preventDefault();

        var lname = $("#lname").val();
        var fname = $("#fname").val();
        var mi = $("#mi").val();
        var address = $("#address").val(); 
        var coursecode = $("#coursecode").val();
        var bdate = $("#bdate").val();
        var age = $("#age").val();
        var gender = $("#gender").val();    

        var student = new FormData();

        student.append("lname", lname);
        student.append("fname", fname);
        student.append("mi", mi);
        student.append("address", address);
        student.append("coursecode", coursecode);
        student.append("bdate", bdate);
        student.append("age", age);
        student.append("gender", gender);

        $.ajax({
            url:"../../ajax/student_add.ajax.php",
            method: "POST",
            data: student,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"text",
            complete: function () {
                clearForm();
            }
        })
    
    });
 

    function clearForm(){
      $("#lname").val('');
      $("#fname").val('');
      $("#mi").val('');
      $("#address").val('');
      $("#coursecode").val('');
      $("#bdate").val('');
      $("#age").val('');
      $("#gender").val('');
 
      $("#lname").focus();
    }

});    