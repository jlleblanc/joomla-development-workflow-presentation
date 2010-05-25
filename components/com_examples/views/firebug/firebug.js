window.addEvent('domready', function() {
	var jsonAjax = new Ajax ('index.php?option=com_examples&view=firebug&format=raw', {
		method: "get"
	});

	jsonAjax.addEvent('onComplete', function (data) {
		var json_data = JSON.parse(data);
		console.debug(json_data);

		var placeholder = $('module_info_placeholder');
		placeholder.innerHTML = 'Module: ' + json_data.module;
	});

	jsonAjax.request();
});