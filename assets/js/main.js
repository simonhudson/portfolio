// Add hs-js class to page
const hasJs = () => document.querySelector('html').classList.add('has-js');
hasJs();

// Check JS
const checkJs = () => document.querySelector('html').classList.contains('has-js');

// Set scrolled state
const isScrolled = () => {
	const html = document.querySelector('html');
	const method = (window.scrollY > 0) ? 'add' : 'remove';
	html.classList[method]('is-scrolled');
};
window.addEventListener('scroll', isScrolled);
