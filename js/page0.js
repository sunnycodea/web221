
$("#logo").fadeIn(3000);

$(document).ready(function() {
    setTimeout(function() {
        $("#logo").fadeOut(3000,function() {
            window.location.href='page1.html';   
        });
    },3000);
});

$(document).click(function() {
    $("#logo").fadeOut(1000,function() {
        window.location.href='page1.html';   
    });
});
