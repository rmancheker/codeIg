$(document).ready(function(){
	$(".btn_add").click(function() {
		
		$.ajax({
			type:"POST",
			url:path+"crud/userdata",
			data:$("#user_form").serialize(),

			success:function(val){
				if(val==1)
				{
					window.location.href=path+"crud/showrecords"
				}
				else
				{	
					$(".error").html(val);
				}
				
			}
		})

	});

	$(".btn_update").click(function() {
		
		$.ajax({
			type:"POST",
			url:path+"crud/updatedata",
			data:$("#user_form").serialize(),

			success:function(val){
				if(val==1)
				{
					window.location.href=path+"crud/showrecords"
				}
				else
				{	
					$(".error").html(val);
				}
				
			}
		})

	});


	$(".del").click(function(val){
		var currenttr = $(this);
		val.preventDefault();
		//alert($(this).attr("for"));
		$.ajax({
			type:"POST",
			url:path+"crud/delData",
			data:"val="+$(this).attr("for"),
			success:function(val){
				//alert(val);
				if(val == 1){
					currenttr.parent().parent().fadeOut();
				}
				
			}
		})
	});

	$(".edit").click(function(val){
		var currenttr = $(this);
		val.preventDefault();
		var id = $(this).attr("for");
		//alert($(this).attr("for"));
		$.ajax({
			type:"POST",
			url:path+"crud/editData",
			data:"val="+$(this).attr("for"),
			success:function(val){
				//alert(val);
				var result = val.split("#");
				$("#mobile").val(result[1]);
				$("#Name").val(result[0]);
				$("#id").val(id);
			}
		})
	});


});