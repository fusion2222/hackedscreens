var App = {

	CLASS_COPY_BTN: 'js-script-list--copylink',
	CLASS_SCRIPT_ITEM: 'js-script-list--item',
	CLASS_SCRIPT_LINK: 'js-script-list--link',

	isIE: (
		navigator.userAgent.toLowerCase().indexOf("msie") != -1 
		|| navigator.userAgent.toLowerCase().indexOf("trident") != -1
	),

	init: function(){
		var copy_buttons = document.getElementsByClassName(this.CLASS_COPY_BTN);
		for (var i = copy_buttons.length - 1; i >= 0; i--) {
			copy_buttons[i].onclick = function(e){

				if(App.isIe){
					// TODO: Finish this or drop IE support..
				    window.clipboardData.setData('Text', textToPutOnClipboard);    
				}else{
					this.closest('.' + App.CLASS_SCRIPT_ITEM).getElementsByClassName(App.CLASS_SCRIPT_LINK)[0].select();
					document.execCommand('copy');
				}
			}
		}
	}
}

App.init();
