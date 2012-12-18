
$(function(){
	$(".claims-edit-status").on("click",function(){
		$(this).focus().select();
	});
	$(".claims-edit-status").on("blur",function(){		
		if ($(this).val()==='') { $(this).val("-"); }
	});
	$(".claims-edit-status").on("keyup",function(){
		var claim_id=$(this).data("claim-id");
		var claim_value=$(this).val();
		$.ajax({
			url:'index.php',
			async:true,						
			cache:false,
			type:'GET',
			data:{
				action:'editStatus',
				id:claim_id,
				message:claim_value
			},
			dataType:'text',
			timeout:10000,
			success:function(s){
				/*alert(s);*/
			},
			error:function(XMLHttpRequest,textStatus,error){ alert(error); }
		});
	});

});
