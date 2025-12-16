(function($) {
	'use strict';

	let currentPage = 1;
	let isLoading = false;
	let hasMorePosts = true;
	let currentCategory = '';
	let perPage = 3;

	// Intersection Observer для виявлення коли користувач скролить вниз
	function initIntersectionObserver() {
		const loadMoreTrigger = document.getElementById('load-more-trigger');
		
		if (!loadMoreTrigger) return;

		const initialPage = parseInt(loadMoreTrigger.dataset.page || '1', 10);
		const triggerCategory = loadMoreTrigger.dataset.cat || '';
		const triggerPerPage = parseInt(loadMoreTrigger.dataset.perPage || (lazyLoadPosts.postsPerPage || '3'), 10);
		currentPage = isNaN(initialPage) ? 1 : initialPage;
		currentCategory = triggerCategory;
		perPage = isNaN(triggerPerPage) ? 3 : triggerPerPage;

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
				nonce: lazyLoadPosts.nonce,
				per_page: perPage,
				cat: currentCategory
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
		loader.innerHTML = '<span class="sr-only">Loading</span><svg class="animate-bounce h-8 w-8 text-light-gold" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="Interface / Loading"><g id="Vector"><path d="M5 14C5 14.5523 5.44772 15 6 15C6.55228 15 7 14.5523 7 14C7 13.4477 6.55228 13 6 13C5.44772 13 5 13.4477 5 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 10C17 10.5523 17.4477 11 18 11C18.5523 11 19 10.5523 19 10C19 9.44772 18.5523 9 18 9C17.4477 9 17 9.44772 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g></g></svg>';
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
