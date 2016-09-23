$(document).ready(function(){
	
	
	
	$('#abutRDel').click(function(){
		//$('.text').hide();
		$.ajax({
			type:"GET",
			url:"viewDel.php",
			//url:"controllerDel.php",
			success:function(){
				$('.textDel').html(data);
				
			}
		});
	});
});