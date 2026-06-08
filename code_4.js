// app.js - Asynchronous Behavioral Layer using jQuery AJAX
$(document).ready(function() {
    $("#foodForm").submit(function(event) {
        event.preventDefault(); // HALTS traditional page reloading

        // Client-Side Validation (Lecture 3 Principles)
        let sName = $("#student_name").val().trim();
        let cafeName = $("#cafeteria_name").val();
        let foodItem = $("#food_item").val();
        let qty = $("#quantity").val();

        if (sName === "" || cafeName === "" || foodItem === "" || qty === "") {
            $("#status-message").html("<p class='error'>Error: All cafeteria form fields are required!</p>");
            return false;
        }

        // Seamless serialization of data as taught in Lecture 5
        let formData = $(this).serialize();

        // Triggering secure asynchronous POST request
        $.post("process.php", formData, function(response) {
            if (response.status === "success") {
                $("#status-message").html("<p class='success'>" + response.message + "</p>");
                $("#foodForm")[0].reset(); // Clear input items
            } else {
                $("#status-message").html("<p class='error'>" + response.message + "</p>");
            }
        }, "json").fail(function(xhr) {
            $("#status-message").html("<p class='error'>Server Error: " + xhr.responseText + "</p>");
        });
    });
});