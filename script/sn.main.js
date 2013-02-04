
function main(require) {
	if (typeof(window) !== "undefined") {
		var bs, jq, standart;
		jq = require('jquery');
		standart = require('sn');
		bs = require('bootstrap');
		return $(function() {
			return $('#sn').sn();
		});
	}
}
