$(document).ready(function() {
    // preload images
    $("#image_list a").each(function() {
        var swappedImage = new Image();
        swappedImage.src = $(this).attr("href");
    });

    // set up event handlers for links
    $("#image_list a").click(function(evt) {
        evt.preventDefault(); // cancel default link behavior

        var imageURL = $(this).attr("href");
        var caption = $(this).attr("title");

        // fade out image and caption, then fade in new content
        $("#caption, #image").fadeOut(1000, function() {
            // update image and caption once fade out completes
            $("#image").attr("src", imageURL);
            $("#caption").text(caption);

            // fade in updated content
            $("#caption, #image").fadeIn(1000);
        });
    });

    // move focus to first thumbnail
    $("li:first-child a").focus();
});