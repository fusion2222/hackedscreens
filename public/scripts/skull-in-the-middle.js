var HackScreens = {
	data: @json($data),
	init: function(){
		alert('XSS attack has been caused!');
	}
};

HackScreens.init();
