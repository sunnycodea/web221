
$("#logo").fadeIn(3000);

$(document).ready(function() {
    setTimeout(function() {
        $("#logo").fadeOut(1500,function() {
            window.location.href='page1.html';   
        });
    },3000);

    /* 飞机1 */
	var element1 = document.getElementById("element1"), 
	    target1 = document.getElementById("target1");
	setElemLTPos(element1,"800px","250px");
	setElemMLTPos(target1,"420px", "415px");
	startFly(element1, target1,1);

	/* 飞机2 */
	var element2 = document.getElementById("element2"), 
	    target2 = document.getElementById("target2");
	setElemLTPos(element2,"1000px","150px");
	setElemMLTPos(target2,"284px", "245px");
	startFly(element2, target2,-1);

	/* 飞机3 */
	var element3 = document.getElementById("element3"), 
	    target3 = document.getElementById("target3");
	setElemLTPos(element3,"200px","150px");
	setElemMLTPos(target3,"734px", "45px");
	startFly(element3, target3,1);

	/* 飞机4 */
	var element4 = document.getElementById("element4"), 
	    target4= document.getElementById("target4");
	//setElemLTPos(element4,"200px","150px");
	setElemMLTPos(target4,"1200px", "135px");
	startFly(element4, target4,-1);

	function setElemLTPos(element, leftpx,toppx){
		$(element).css({"left":leftpx,"top":toppx});
	}
	function setElemMLTPos(element, marginleftpx,margintoppx){
		$(element).css({"margin-left":marginleftpx,"margin-top":margintoppx});
	}
 	function startFly(element, target, curv,callback){
 		var defaults = {
			speed: 1, // 每帧移动的像素大小，每帧（对于大部分显示屏）大约16~17毫秒
			curvature: 0.001,  // 实际指焦点到准线的距离，你可以抽象成曲率，这里模拟扔物体的抛物线，因此是开口向下的
			progress: profunc,
			complete: comfunc
		};
		var g_count = 1;
		var dotclassname = "tmpdots";
		// 抛物线元素的的位置标记
		var parabola = funParabola(element, target,defaults).mark();
		// 抛物线运动的触发
	    parabola.init();

		function drawdots(dotclassname,element,x,y,g_count){
			var left_v = parseInt($(element).css("left"));
			var top_v = parseInt($(element).css("top"));
			if(g_count%5==0){
				$("<div class = '"+dotclassname+"'>").appendTo("body").css({
	                "position": "absolute",
	               	"transform": "translate("+ [x + "px", y + "px"].join() +")",
	                "background-color": "#CDCDCD",
	                "width": "1px",
	                "height": "1px",
	                "left": left_v+5+"px",
	                "top": top_v+5+"px",
	                "border-radius": "5px"
            	});
			}
		}
		
		function profunc(x,y){
			///console.log(x,y);
			drawdots(dotclassname,element,x,y,g_count);
			g_count++;
            
		};
		function randomcurv(){
			return Math.random()*(0.001)+0.001;
		}
		function comfunc(){
			$("."+dotclassname).css({"display":"none"});
			g_count =1;
			// 抛物线元素的的位置标记
			defaults.curvature = randomcurv()*curv;
			var parabola = funParabola(element, target,defaults).mark();
	    	parabola.init();
		}
 	}
});