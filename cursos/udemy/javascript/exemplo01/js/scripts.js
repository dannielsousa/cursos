$(document).ready(function(){

	function teste() {
		$(".slide ul").cycle({
			fx: 'fade',
			speed: 2000,
			timeout: 3000,
			next: '#proximo',
			prev: '#anterior',
			pager: '#pager',
		});
	};

	teste();
});