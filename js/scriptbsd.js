$(document).ready(function() {

	$("#uplo").change(function(){
		var ext = $('#uplo').val().split('.').pop().toLowerCase();
 		if ($.inArray(ext,['png']) == 0 || $.inArray(ext,['jpg']) == 0 || $.inArray(ext,['jpeg']) == 0) {
 			var $namepic = $(this).val().split('\\');
			$("#txtpic").val($namepic[2]);
 		}else{
 			$("#uplo").val("");
 			$("#txtpic").val("");
 			var uplofile =true; 
 			$.post("notify.php",{uplofile},function(Drunk){$("#divnotify").html(Drunk);});
 		};
		
	});


});