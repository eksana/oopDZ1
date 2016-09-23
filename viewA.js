$(document).ready(function(){
	
	//var $h3Z=$(this).text();
	
	$('#abutA1').click(function(){
		//$('.text').hide();
		$.ajax({
			type:"GET",
			url:"viewA.php",
			success:function(data){
				$('.text').html(data);
			}
		});
	});
});