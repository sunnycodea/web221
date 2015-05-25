
$(document).ready(function() {
    var page_name = $(location).attr('href');
    try{
        var page_num = page_name.match(/[^\/]*$/)[0][4];
        $("#nav-" + page_num).addClass('navbar-choose');
    }
    catch (error){
        console.error(err);
    }
    $("#nav-header").click(function() {
        window.location.href = '../';
    });
    $("#nav-1").click(function() {
        window.location.href = '../page1.html';
    });
    $("#nav-2").click(function() {
        window.location.href = '../page2.html';
    });
    $("#nav-3").click(function() {
        window.location.href = '../page3.html';
    });
    $("#nav-4").click(function() {
        window.location.href = '../page4.html';
    });
});
