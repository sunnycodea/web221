
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

//弹出层
var cnt_who = "<img width='708' heght='419' src='image/start_who.jpg' />";
T$('click_who').onclick = function(){TINY.box.show(cnt_who,0,0,0,1)}
var cnt_what = "<img width='708' heght='419' src='image/start_what.jpg' />";
T$('click_what').onclick = function(){TINY.box.show(cnt_what,0,0,0,1)}
var cnt_how= "<img width='708' heght='419' src='image/start_how.jpg' />";
T$('click_how').onclick = function(){TINY.box.show(cnt_how,0,0,0,1)}