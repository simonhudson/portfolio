function headerScroll(e) {
	var header = document.querySelector('.js-header');
	var headerHeight = header.offsetHeight;
	var method = (window.scrollY >= headerHeight) ? 'add' : 'remove';
	header.classList[method]('is-scrolled');
}
window.addEventListener('scroll', headerScroll);
