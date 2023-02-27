$(function() {

    // Add Course
    $("#course-form").submit(function (e) {
        e.preventDefault();

        var coursecode = $("#coursecode").val();
        var type = $("#type").val(); 
        var title = $("#title").val();
        var credunits = $("#credunits").val();
        var room = $("#room").val();    

        var course = new FormData();

        course.append("coursecode", coursecode);
        course.append("type", type);
        course.append("title", title);
        course.append("credunits", credunits);
        course.append("room", room);

        $.ajax({
            url:"../../ajax/course_add.ajax.php",
            method: "POST",
            data: course,
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
      $("#coursecode").val('');
      $("#type").val('');
      $("#title").val('');
      $("#credunits").val('');
      $("#room").val('');
 
      $("#coursecode").focus();
    }

});    