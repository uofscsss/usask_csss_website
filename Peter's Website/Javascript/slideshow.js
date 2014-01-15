var images = $(".images img");
images.eq(0).fadeIn("fast");
var current = 0;
setInterval(function() {
    var next = ((current + 1) % images.length);
    images.eq(current).fadeOut("slow");
    images.eq(next).fadeIn("slow");
    current = next;
}, 5000);