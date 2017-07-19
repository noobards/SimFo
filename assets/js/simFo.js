simFo.makeAjax = function(ajax_url, ajax_data, successhandler, errorhandler){
	$.ajax({
		type:'post',
		url: simFo.siteUrl+'/'+ajax_url,
		data: ajax_data,
		dataType: 'json',
		success: function(response)
		{
			successhandler(response);
		},
		error: function(x, m, t)
		{
			errorhandler(t);
		}
	});
};

simFo.alert = function(msg){
	alert(msg);
};