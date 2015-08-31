var currentRotation = 0;
var targetRotation = 0;
var obj = "";

var graphState = "none";

var interFunc = 0;

var rotate = function(){
	$(obj).css("transform", "rotate(" + currentRotation + "deg)");

	currentRotation = currentRotation + (4.8);

	if(currentRotation >= targetRotation){
		$(obj).css("transform", "rotate(" + targetRotation + "deg)");
		clearInterval(interFunc);
		currentRotation = 0;
		interFunc = 0;
		return;
	}
}

var animating = 0;

var main = function(){

	$("select").children("[value=\"none\"]").attr("selected", "selected");

	$("body").css("background-color", "#000022");
	$("body").css("background-image", "url('../../resources/blue_bg.jpg')");
	$("body").css("background-repeat", "no-repeat");
	$("body").css("background-position", "center");
	$("body").css("background-size", "100% 100%");

	$(".right").hide();
	$(".subsettings").hide();



	$(".five .horizontalBar .horizontalLabel").each(function(index, val){
		$(val).css("left", $(val).attr("title"));
		$(val).css("top", "" + ((index * 20)) + "%");
	});

	$(".four").each(function(index, val){
		$(val).find(".horizontalBar .horizontalLabel").each(function(index, val){
			$(val).css("left", $(val).attr("title"));
			$(val).css("top", "" + ((index * 25)) + "%");
		});
	});

	$(".smallfour").each(function(index, val){
		$(val).find(".horizontalBar .horizontalLabel").each(function(index, val){
			$(val).css("left", $(val).attr("title"));
			$(val).css("top", "" + (((index) * 5)) + "%");
		});
	});

	$(".verticalBar .verticalLabel").each(function(index, val){
		$(val).css("top", $(val).attr("title"));
		$(val).css("left", "" + ((index * 25)) + "%");
	});

	$(".left").mouseup(function(){

		$("#arrow").fadeIn(function(){
			if(interFunc!=0)return;
			obj = "#arrow";
			currentRotation = 0;
			targetRotation = 180;

			interFunc = setInterval(rotate, 20);
		});

		$(".subsettings").fadeOut();
		updateGraph("none");
	});

	$(".right").mouseup(function(){
		$("#arrow").fadeOut(function(){
			$("#arrow").css("transform", "rotate(0deg)");
		});

		$(".subsettings").fadeIn();
		graphState = $(this).find(".text").text();
		if(("." + graphState) === "."){
			graphState = $(this).find("select").val();
		}
		updateGraph(graphState);
	});

	$(".left.brawler").mouseup(function(){

		$(".right.brawler").fadeIn();
		$(".right.champion").fadeOut();
		
	});

	$(".left.champion").mouseup(function(){

		$(".right.champion").fadeIn();
		$(".right.brawler").fadeOut();
		
	});
}

$(document).ready(main);