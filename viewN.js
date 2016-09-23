$(document).ready(function(){
	
	//var $h3Z=$(this).text();
	
	$('#abutN1').click(function(){
		//$('.text').hide();
		$.ajax({
			type:"GET",
			url:"viewN.php",
			success:function(data){
				$('.textN').html(data);
			}
		});
	});
});