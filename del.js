$(document).ready(function(){
	
	
	
	$('#abutRDel').click(function(){
		//$('.text').hide();
		$.ajax({
			type:"GET",
		url:"viewDel2.php",
			//url:"contrDel2.php",
				//url:"delet.php",
				//url:"controllerDel.php",
			success:function(data){
				$('.textDel2').html(data);
				
			}
		});
	});
});