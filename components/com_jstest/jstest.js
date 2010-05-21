window.addEvent('domready', function() {
	var jsonAjax = new Ajax ('index.php?option=com_jstest&view=default&format=raw', {
		method: "get"
	});

	jsonAjax.addEvent('onComplete', function (data) {
		var json_data = JSON.parse(data);
		console.debug(json_data);
	});

	jsonAjax.request();
});