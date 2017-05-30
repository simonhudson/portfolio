// Add hs-js class to page
const hasJs = () => document.querySelector('html').classList.add('has-js');
hasJs();

// Check JS
const checkJs = () => document.querySelector('html').classList.contains('has-js');

// Set scrolled header
const headerScroll = () => {
	const header = document.querySelector('.js-header');
	if (!header || !checkJs()) return;
	const headerHeight = header.offsetHeight;
	const method = (window.scrollY >= headerHeight) ? 'add' : 'remove';
	header.classList[method]('is-scrolled');
};
window.addEventListener('scroll', headerScroll);
