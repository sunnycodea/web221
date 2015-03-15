
$(document).ready(function() {
    var page_name = $(location).attr('href');
    try{
        var page_num = page_name.match(/[^\/]*$/)[0][4];
        $("#nav-" + page_num).addClass('navbar-choose');
    }
    catch (error){
        console.error(err);
    }
});
