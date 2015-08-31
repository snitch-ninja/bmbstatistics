
var main_ = function(){
	
	$(".horizontalBar").click(function(){
		$(".subsettings").html("<h1>" + $(this).attr("value") + "</h1><h2>" + $(this).attr("title") + "</h2><h3 style=\"font-variant:small-caps;\">" + $(this).attr("desc") + "</h3><img style=\"position:absolute;left:0px;top:0px;height:100%;\" src=\"resources/brawlers/" + $(this).attr("value") + "-thumbnail.png\"></img>");
	});

	$(".WinratevsPickrate img").click(function(){
		$(".subsettings").html("<h1>" + $(this).attr("value") + "</h1><h2>" + $(this).attr("title") + "</h2><h3 style=\"font-variant:small-caps;\">" + $(this).attr("desc") + "</h3><img style=\"position:absolute;left:0px;top:0px;height:100%;\" src=\"" + $(this).attr("src") + "\"></img>");
	});

	$(".Brawlerwinratevspickrate img").click(function(){
		$(".subsettings").html("<h1>" + $(this).attr("value") + "</h1><h2>" + $(this).attr("title") + "</h2><h3 style=\"font-variant:small-caps;\">" + $(this).attr("desc") + "</h3><img style=\"position:absolute;left:0px;top:0px;height:100%;\" src=\"" + $(this).attr("src") + "\"></img>");
	});

	$(".item").click(function(){
		$(".subsettings").html("<h1>" + $(this).attr("value") + "</h1><h2>" + $(this).attr("title") + "</h2><img style=\"position:absolute;left:0px;top:0px;height:100%;\" src=\"" + $(this).attr("src") + "\"></img>");
	});

}

var updateGraph = function(graphState){
	graphState = graphState.replace(/ /g, "");
	console.log(graphState);
	$(".subsettings").html("");
	$.each($(".graph").find(".horizontalBar"), function(index, val){
		$(val).animate({
			width: "0px"
		});
	});
	$.each($(".graph").find(".verticalBar"), function(index, val){
		$(val).animate({
			height: "0px"
		});
	});

	$.each($(".data").children(), function(index, val){
		$(val).hide();
	});

	if(graphState=="none" || !$("." + graphState).length){
		$("#arrow").fadeIn(function(){
			if(interFunc!=0)return;
			obj = "#arrow";
			currentRotation = 0;
			targetRotation = 180;

			interFunc = setInterval(rotate, 10);
		});

		$(".data").hide();
		return;
	}

	$("#arrow").hide();

	$(".graph").fadeOut(function(){
		$("#arrow").hide();
		$("." + graphState).fadeIn();
		$.each($("." + graphState).children(), function(index, val){
			$(val).fadeIn();
		});

		$.each($("." + graphState).find(".horizontalBar"), function(index, val){
			$(val).children().each(function(index, val){
				$(val).show();
			});
			$(val).animate({
				width: $(val).attr("title")
			});
		});

		$.each($("." + graphState).find(".verticalBar"), function(index, val){
			$(val).children().each(function(index, val){
				$(val).show();
			});
			$(val).animate({
				height: $(val).attr("title")
			});
		});

		$(".graph").fadeIn();
		$(".data").fadeIn();
		$("#arrow").hide();
	});
}

$(document).ready(main_);