
$("#tab1").fadeIn(3000);

$(document).ready(function() {
});


function turn_tab(show_tab) {
    for (var i = 1; i < 5 ; i++) {
        if(i === show_tab){
           $("#tab" + i).fadeIn(1000);
        }else{
           $("#tab" + i).hide(); 
        }
    }
}

$("#a_tab1").click(function() {
    turn_tab(1);
});
$("#a_tab2").click(function() {
    turn_tab(2);
});
$("#a_tab3").click(function() {
    turn_tab(3);
});
$("#a_tab4").click(function() {
    turn_tab(4);
});
