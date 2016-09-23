$(document).ready(function(){
	
	//var $h3Z=$(this).text();
	
	$('#abutR1').click(function(){
		//$('.text').hide();
		$.ajax({
			type:"GET",
			url:"viewR.php",
			success:function(data){
				$('.textR').html(data);
			}
		});
	});
});