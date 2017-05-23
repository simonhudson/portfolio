const headerScroll = () => {
	const header = document.querySelector('.js-header');
	const headerHeight = header.offsetHeight;
	const method = (window.scrollY >= headerHeight) ? 'add' : 'remove';
	header.classList[method]('is-scrolled');
};
window.addEventListener('scroll', headerScroll);
