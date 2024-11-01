function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}

addLoadEvent(
	function() {
		if(!document.getElementsByTagName) return false;
		var links = document.getElementsByTagName("a");
		for(var i=0; i<links.length; i++) {
			if(links[i].getAttribute("rel") == "trackback") {
				links[i].onclick = function() {
					window.open(popupURL+'?'+pageType+'='+theID, 'trackback', 'height='+windowHeight+',width='+windowWidth+',toolbar=no,menubar=no,statusbar=no');
					return false;
				}
			}
		}
	}
);