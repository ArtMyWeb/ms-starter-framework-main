console.log('accordion.js loaded');

document.addEventListener('DOMContentLoaded', function () {
	const accordion = document.querySelector('.accordion');
	console.log(accordion);


	if (accordion) {
		const accordionItems = accordion.querySelectorAll('.accordion-item');
		accordionItems.forEach(item => {
			item.addEventListener('click', () => {
				const isActive = item.classList.contains('active-accordion');

				// Close all items first
				accordionItems.forEach(i => i.classList.remove('active-accordion'));

				// If the clicked item wasn't active, open it
				if (!isActive) {
					item.classList.add('active-accordion');

				}
			});
		});
	}
});
