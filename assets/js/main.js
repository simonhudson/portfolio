// Add has-js class to page
function hasJs() {
	document.querySelector('html').classList.add('has-js');
}
hasJs();

// Set scrolled state
function setScrolledState() {
	var html = document.querySelector('html');
	var top = typeof window.scrollY === 'undefined' ? window.pageYOffset : window.scrollY;
	var method = (top > 0) ? 'add' : 'remove';
	html.classList[method]('is-scrolled');
}
window.addEventListener('scroll', setScrolledState);
