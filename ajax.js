$(document).ready(function() {
	$('#submit').on('click', function() {
		$("#submit").attr("disabled", "disabled");
		const artikl = $('#artikl').val();
		const io = $('#io').val();
		const nio = $('#nio').val();
		const name = $('#name').val();
  		if(artikl!="" && io!="" && nio!="" && name!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					artikl: artikl,
					io: io,
					nio: nio,
					name: name				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#submit").removeAttr("disabled");
						$('#forma').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
				}
            });
		}
		else{
			alert('Please fill all the field !');
		}
	});
});