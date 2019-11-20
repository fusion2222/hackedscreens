@include('scripts.base')

if(HckdScrns === undefined){
	var HckdScrns = {
		APPEAR_TIME: 800,
		data: @json($data),

		CSS_WRAPPER: {
	        'position': 'fixed',
	        'top': '0',
	        'left': '0',
	        'z-index': '99999999',
	        'width': '100%',
	        'height': '100%',
	        'box-shadow': 'inset 0 0 120px 50px rgba(0, 0, 0, 1)',
	        'background-color': 'rgba(0, 0, 0, 0.9)',
	        'fill': '#94d56b',
	        'color': '#94d56b',
	        'font-family': "'Courier New', Courier, monospace",
	        'font-weight': 'bold',
	        'transition': 'opacity linear 1s',
	        'opacity': '0',
	        'text-align': 'center'
		},
	
		CSS_INNER_WRAPPER: {'position': 'relative', 'height': '100%'},
	
		CSS_CONTENT_WRAPPER: {
	    	'position': 'absolute',
	    	'bottom': '50%',
	    	'right': '50%',
	    	'left': '0',
	    	'transform': 'translate(50%, 50%)'
		},
		makeBodyUnscrollable: function(){
			var html_element = document.getElementsByTagName('html')[0];
			HckdTools.applyCSS(
				html_element, {'height': '100%', 'max-height': '100%', 'overflow': 'hidden'}
			);
		},
		makeDOM: function(){
			var doc = document;
	
			// Create main wrapper
			var wrapper = doc.createElement('div');
			this.wrapper_id = Math.random().toString(36).substring(7);
			wrapper.id = this.wrapper_id;
	
			HckdTools.applyCSS(wrapper, this.CSS_WRAPPER);
	
			// Create and append inner wrapper
			var inner_wrapper = doc.createElement('div');
			HckdTools.applyCSS(inner_wrapper, this.CSS_INNER_WRAPPER);
			wrapper.appendChild(inner_wrapper);
	
			// Create and append content wrapper
			var content_wrapper = doc.createElement('div');
			HckdTools.applyCSS(content_wrapper, this.CSS_CONTENT_WRAPPER);
			inner_wrapper.appendChild(content_wrapper);
	
			// SVG logo
			var svg_logo = HckdTools.createSkullSVGElement();
			content_wrapper.appendChild(svg_logo);
	
			// Create and append title
			var title_text = this.data['title'];
			if(title_text === undefined){
				title_text = 'You have been hacked!';
			}
	
			var title = doc.createElement('div');
			HckdTools.applyCSS(title, {'font-size': '42px'});
			title.innerHTML = title_text;
			content_wrapper.appendChild(title);
	
			// Create and append description
			var description_text = this.data['desc'];
			if(description_text === undefined){
				description_text = 'All your data have been stolen';
			}
	
			var description = doc.createElement('div');
			HckdTools.applyCSS(description, {'font-size': '24px'});
			description.innerHTML = description_text;
			content_wrapper.appendChild(description);
	
			doc.body.appendChild(wrapper);
		},
		appear: function(){
			setTimeout(function(){
				document.getElementById(HckdScrns.wrapper_id).style.opacity = 1;
			}, this.APPEAR_TIME);
		},
		init: function(){
			this.makeBodyUnscrollable();
			this.makeDOM();
			this.appear();
		}
	};
	
	HckdScrns.init();
}
