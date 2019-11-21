{{--
// TODO: Decide backward-compatibility depth

// TODO: Be ultra cautious for browser compatibility.
// TODO: Consider possible injecting polyfills before the script. 
--}}

if(HckdTools === undefined){
	// Collision prevention - We dont want any potential crashes.
	var HckdTools = {
		// TODO: Make this a separate part of every script.
		GREEN: '#94d56b',

		SVG_NAMESPACE: 'http://www.w3.org/2000/svg',
	
		CSS_PREFIXES: {
			'o': '-o-',
			'f': '-moz-',
			'w': '-chrome-',
			'm': '-ms-',
		},
	
		CSS_PROPS_PREFIXES: {
			'box-shadow': 'wf',
			'box-sizing': 'wm',
			'transform': 'mwof'
		},
		applyAttrs: function(element, attrs){
			// Apply `attrs` object literal as html parameters.
			for(var attr_name in attrs){
				element.setAttribute(attr_name, attrs[attr_name]);
			}
		},
		applyCSS: function(element, css){
			// Apply CSS object literal into inline styles including automatic
			// prefixing of certain css properties to ensure backward compatibility.
			// `css` should be object literal.
			for(var prop_name in css){
				var prefix_shortcuts = this.CSS_PROPS_PREFIXES[prop_name];
				element.style[prop_name] = css[prop_name];
	
				if(prefix_shortcuts === undefined){
					continue;
				}
				
				for(var x in prefix_shortcuts){
					element.style[this.CSS_PREFIXES[prefix_shortcuts[x]] + prop_name] = css[prop_name];
				}
			}
		},
		addSkullPart: function(skull, part_name, part_attr){
			var new_skull_part = document.createElementNS(this.SVG_NAMESPACE, part_name);
			this.applyAttrs(new_skull_part, part_attr);
			skull.appendChild(new_skull_part);
		},
		createSkullSVGElement: function(){
			// Returns SVG element
			var svg = document.createElementNS(this.SVG_NAMESPACE, 'svg');
			this.applyAttrs(svg, {x: '0px', y: '0px', width: '189px', height: '154px', viewBox: '0 0 189 154'});
	
			// Top left bone
			this.addSkullPart(svg, 'polygon', {points: '16,28 28,28 28,16 40,16 40,40 16,40 '});
			this.addSkullPart(svg, 'rect', {x: '40', y: '40', width: '12', height: '12'});
	
			// Top right bone
			this.addSkullPart(svg, 'polygon', {points: '160,16 160,28 172,28 172,40 148,40 148,16 '});
			this.addSkullPart(svg, 'rect', {x: '136', y: '40', width: '12', height: '12'});
	
			// Bottom left bone
			this.addSkullPart(svg, 'polygon', {points: '16,112 40,112 40,136 28,136 28,124 16,124 '});
			this.addSkullPart(svg, 'rect', {x: '40', y: '100', width: '12', height: '12'});
	
			// Bottom right bone
			this.addSkullPart(svg, 'polygon', {points: '148,112 172,112 172,124 160,124 160,136 148,136 '});
			this.addSkullPart(svg, 'rect', {x: '136', y: '100', width: '12', height: '12'});
	
			// Top part of skull
			this.addSkullPart(svg, 'polygon', {points: '64,40 124,40 124,52 136,52 136,100 124,100 124,64 100,64 100,76 112,76 112,88 76,88 76,76 88,76 88,64 64,64 64,100 52,100 52,52 64,52 '});
	
			// Bottom part of skull
			this.addSkullPart(svg, 'polygon', {points: '64,88 88,88 88,100 100,100 100,88 124,88 124,124 112,124 112,112 100,112 100,124 88,124 88,112 76,112 76,124 64,124 '});

			return svg;
		}
	};
}
