(function($) {
	'use strict';

	let currentPage = 1;
	let isLoading = false;
	let hasMorePosts = true;

	// Intersection Observer для виявлення коли користувач скролить вниз
	function initIntersectionObserver() {
		const loadMoreTrigger = document.getElementById('load-more-trigger');
		
		if (!loadMoreTrigger) return;

		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting && !isLoading && hasMorePosts) {
					loadMorePosts();
				}
			});
		}, {
			rootMargin: '100px'
		});

		observer.observe(loadMoreTrigger);
	}

	// Функція для завантаження додаткових постів
	function loadMorePosts() {
		if (isLoading || !hasMorePosts) return;

		isLoading = true;
		currentPage++;

		showLoader();

		$.ajax({
			url: lazyLoadPosts.ajaxUrl,
			type: 'POST',
			data: {
				action: 'load_more_posts',
				page: currentPage,
				nonce: lazyLoadPosts.nonce
			},
			success: function(response) {
				if (response === 'no_more_posts') {
					hasMorePosts = false;
					showEndMessage();
				} else {
					// Додаємо нові пости до сітки
					const blogGrid = document.querySelector('.blog-grid');
					if (blogGrid) {
						blogGrid.insertAdjacentHTML('beforeend', response);
					}
				}
			},
			error: function() {
				hasMorePosts = false;
			},
			complete: function() {
				isLoading = false;
				hideLoader();
			}
		});
	}

	// Показуємо повідомлення коли немає більше постів
	function showEndMessage() {
		const blogGrid = document.querySelector('.blog-grid');
		if (blogGrid) {
			const endMessage = document.createElement('div');
			endMessage.className = 'col-span-full text-center py-10';
			// endMessage.innerHTML = '<p class="text-gray-600">No more posts to load.</p>';
			blogGrid.appendChild(endMessage);
		}
	}

	function showLoader() {
		const blogGrid = document.querySelector('.blog-grid');
		if (!blogGrid) return;
		if (document.getElementById('lazy-loader')) return;
		const loader = document.createElement('div');
		loader.id = 'lazy-loader';
		loader.className = 'col-span-full flex items-center justify-center py-6';
		loader.innerHTML = '<span class="sr-only">Loading</span><svg class="animate-spin h-6 w-6 text-light-gold" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>';
		blogGrid.appendChild(loader);
	}

	function hideLoader() {
		const loader = document.getElementById('lazy-loader');
		if (loader) loader.remove();
	}

	// Альтернативна опція: кнопка "Load More"
	function initLoadMoreButton() {
		const loadMoreBtn = document.getElementById('load-more-btn');
		if (loadMoreBtn) {
			loadMoreBtn.addEventListener('click', function(e) {
				e.preventDefault();
				loadMorePosts();
			});
		}
	}

	// Ініціалізація при завантаженні сторінки
	document.addEventListener('DOMContentLoaded', function() {
		// Використовуємо Intersection Observer для автоматичного завантаження
		initIntersectionObserver();
		
		// Якщо є кнопка, активуємо її
		initLoadMoreButton();
	});

})(jQuery);
