(function($){

	var methods={
		init:function(options)
		{
			if ($("#claims").html()!=="")	{
				$(this).snTriggers('table');
			}
			if ($("#signin").html()!=="")	{
				$(this).snTriggers('signin');
			}
		},
		signin:function()
		{
			th=$(this);
			$("#fSignin").on("submit",function(e){
				e.preventDefault();
				th.snEvents({'href':'#signin'});
			});
		},
		table:function()
		{
			th=$(this);
			$(".status").on("keyup",function(){
				th.snAjax('sendRequest',{'action':'edit','id':$(this).data('id'),'message':$(this).val(),'debug':false});
			});
			$(".status").on("blur",function(){
				th.snAjax('sendRequest',{'action':'edit','id':$(this).data('id'),'message':$(this).val(),'debug':false});
			});
		}
	};

	$.fn.snTriggers=function(sn){
		if (!sn) { sn={}; }
		if ( methods[sn]) {
			return methods[sn].apply(this,Array.prototype.slice.call(arguments,1));
		} else if (typeof sn==='object' || !sn) {
			return methods.init.apply(this,arguments);
		} else {
			$.error('Метод '+sn+' не существует');
		}
		
	};
})(jQuery);
