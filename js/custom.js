$(document).ready(function() {
    $(function() {
        $("#playlist li").on("click", function() {
            console.log("Clicked");
            $("#videoarea").attr({
                src: $(this).attr("movieurl"),
            });
        });
        $("#videoarea").attr({
            src: $("#playlist li").eq(0).attr("movieurl"),
        });
    });
});