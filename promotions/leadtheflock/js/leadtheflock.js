// URL parameter parsing
function getUrlVars() {
	var vars = {};
	var pair;

	// Split URI string into value and key pairs
	var pairs = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

	// Assign the value to the key in the 'vars' object
	if (pairs[0] !== window.location.href) { // insure more than the base URI has been returned
		for (var i = 0, pairs_length = pairs.length; i < pairs_length; i++) {
			pair = pairs[i].split('=');
			vars[pair[0]] = (pair.length > 1) ? decodeURIComponent(pair[1].replace(/\+/g, " ")) : null;
		}
	} else {
		vars = null;
	}
	return vars;
}

function getUrlVar(param) {
	var vars = getUrlVars();
	if (vars !== null) {
		return vars[param];
	} else {
		return '';
	}
}