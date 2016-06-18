$(document).ready(function(){
	var cvb;
	var birincieded=null;
	var minus=null;
	var ikincieded=null;
	var multiply=null;
	var division=null;


	


	$("a").click(function(){
		$("#screen").val($("#screen").val()+$(this).text());
	})

	// $("#plus").click(function(){
	// 	birincieded=parseInt($("input").val());
	// 	$("input").val("");

	// })
	// 	$("#minus").click(function(){
	// 	minus=parseInt($("input").val());
	// 	$("input").val("");

	// })
	// 	$("#multiply").click(function(){
	// 	multiply=parseInt($("input").val());
	// 	$("input").val("");

	// })
		
	// 	$("#division").click(function(){
	// 	division=parseInt($("input").val());
	// 	$("input").val("");

	// })
		
		$("#clear").click(function(){
			$("#screen").val("");
		})

	// 	$("#equal").click(function(){
	// 	ikincieded=parseInt($("input").val());
	// 	if(birincieded!=null){
	// 		cvb=birincieded+ikincieded;
	// 		birincieded=null
	// 	}
	// 	else if(minus!=null){
	// 		cvb=minus-ikincieded;
	// 		minus=null
	// 	}
	// 	else if(multiply!=null){
	// 		cvb=multiply*ikincieded;
	// 		multiply=null
	// 	}
	// 	else if(division!=null){
	// 		cvb=division/ikincieded;
	// 		division=null
	// 	}


		// $("input").val(cvb)
	// })


			$("#clearOne").click(function(){
		var string = $("#screen").val();
	   var str = string.substring(0, string.length - 1);
	   $("#screen").val(str)
	})
})
