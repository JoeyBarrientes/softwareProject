'use strict';

(function ($) {

	/*------------------
		Preloader
	--------------------*/
	function loader() {
		$(window).on('load', function () {
			$(".loader").fadeOut();
			$("#preloder").delay(400).fadeOut("slow");
		});
	}

	/*------------------
		Product Search Filter
	--------------------*/
	function productSearch() {
		const searchInput = document.querySelector(".search-bar input");
		const productItems = document.querySelectorAll(".product-item");

		if (searchInput && productItems.length > 0) {
			searchInput.addEventListener("input", () => {
				const filter = searchInput.value.toLowerCase();
				productItems.forEach((item) => {
					const title = item.querySelector(".product-brand")?.textContent.toLowerCase() || "";
					item.style.display = title.includes(filter) ? "block" : "none";
				});
			});
		}
	}

	/*------------------
		Cart Functionality
	--------------------*/
	function cartSystem() {
		let cart = [];
		let cartCount = 0;

		const cartCounter = document.getElementById("cartCounter");
		const cartItemsContainer = document.getElementById("cartItems");
		const cartTotalElement = document.getElementById("cartTotal");
		const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

		function updateCartDisplay() {
			if (!cartItemsContainer || !cartTotalElement) return;

			cartItemsContainer.innerHTML = "";

			if (cart.length === 0) {
				cartItemsContainer.innerHTML = "<p>Your cart is empty.</p>";
				cartTotalElement.textContent = "0.00";
				return;
			}

			let total = 0;

			cart.forEach((item) => {
				const itemTotal = item.price * item.quantity;
				total += itemTotal;

				const cartItem = document.createElement("div");
				cartItem.classList.add("cart-item");
				cartItem.innerHTML = `
					<p>${item.title} - $${item.price.toFixed(2)} x ${item.quantity} = $${itemTotal.toFixed(2)}</p>
					<button class="remove-from-cart-btn" data-id="${item.id}">Remove</button>
				`;
				cartItemsContainer.appendChild(cartItem);
			});

			cartTotalElement.textContent = total.toFixed(2);

			// Bind remove buttons
			const removeButtons = cartItemsContainer.querySelectorAll(".remove-from-cart-btn");
			removeButtons.forEach(button => {
				button.addEventListener("click", function () {
					const productId = this.getAttribute("data-id");
					cart = cart.filter(item => item.id !== productId);
					updateCartDisplay();
					updateCartCount();
				});
			});
		}

		function updateCartCount() {
			cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);
			if (cartCounter) {
				cartCounter.textContent = `(${cartCount})`;
			}
		}

		addToCartButtons.forEach((button) => {
			button.addEventListener("click", function () {
				const productId = this.getAttribute("data-id");
				const productTitle = this.getAttribute("data-title");
				const productPrice = parseFloat(this.getAttribute("data-price"));

				const existingProduct = cart.find(item => item.id === productId);
				if (existingProduct) {
					existingProduct.quantity++;
				} else {
					cart.push({
						id: productId,
						title: productTitle,
						price: productPrice,
						quantity: 1
					});
				}

				updateCartDisplay();
				updateCartCount();
				alert(`${productTitle} added to cart!`);
			});
		});
	}

	/*------------------
		Responsive Menu
	--------------------*/
	function responsiveMenu() {
		$('.responsive').on('click', function (event) {
			$('.menu-list').slideToggle(400);
			event.preventDefault();
		});
	}

	/*------------------
		Hero Section
	--------------------*/
	function heroSection() {
		$('.hero-item').each(function () {
			const image = $(this).data('bg');
			$(this).css({
				'background-image': `url(${image})`,
				'background-size': 'cover',
				'background-repeat': 'no-repeat',
				'background-position': 'center bottom'
			});
		});

		const slide_item = () => {
			const bh = $('body').height();
			$('.hero-item').height(bh);
		};

		setInterval(slide_item, 1);
		slide_item();

		let time = 7, $progressBar, $bar, isPause = false, tick, percentTime = 0;

		$('#hero-slider').owlCarousel({
			loop: true,
			nav: true,
			items: 1,
			autoHeight: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
			onInitialized: progressBar,
			onTranslated: moved,
			onDrag: () => isPause = true
		});

		function buildProgressBar() {
			$progressBar = $("<div>", { id: "progressBar" });
			$bar = $("<div>", { id: "bar" });
			$progressBar.append($bar).prependTo($("#hero-slider"));
		}

		function progressBar() {
			buildProgressBar();
			start();
		}

		function start() {
			percentTime = 0;
			isPause = false;
			tick = setInterval(interval, 10);
		}

		function interval() {
			if (!isPause) {
				percentTime += 1 / time;
				$bar.css({ width: percentTime + "%" });
				if (percentTime >= 100) {
					$("#hero-slider").trigger("next.owl.carousel");
					percentTime = 0;
				}
			}
		}

		function moved() {
			clearInterval(tick);
			start();
		}
	}

	/*------------------
		Video Popup
	--------------------*/
	function videoPopup() {
		$('.video-popup').magnificPopup({
			type: 'iframe',
			autoplay: true
		});
	}

	/*------------------
		Testimonial
	--------------------*/
	function testimonial() {
		$('#testimonial-slide').owlCarousel({
			loop: true,
			autoplay: true,
			margin: 30,
			nav: false,
			dots: true,
			responsive: {
				0: { items: 1 },
				600: { items: 2 },
				800: { items: 2 },
				1000: { items: 2 }
			}
		});
	}

	/*------------------
		Progress Bar
	--------------------*/
	function progressBarFill() {
		$('.progress-bar-style').each(function () {
			const progress = $(this).data("progress");
			const clamped = Math.min(progress, 100);
			$(this).append(`<div class="bar-inner" style="width:${clamped}%"><span>${clamped}%</span></div>`);
		});
	}

	/*------------------
		Accordions
	--------------------*/
	function accordions() {
		$('.panel').on('click', function (e) {
			$('.panel').removeClass('active');
			if (!$(this).hasClass('active')) {
				$(this).addClass('active');
			}
			e.preventDefault();
		});
	}

	/*------------------
		Progress Circles
	--------------------*/
	function progressCircles() {
		[1, 2, 3, 4].forEach(i => {
			$(`#progress${i}`).circleProgress({
				value: [0.75, 0.83, 0.25, 0.95][i - 1],
				size: 175,
				thickness: 5,
				fill: "#2be6ab",
				emptyFill: "rgba(0, 0, 0, 0)"
			});
		});
	}

	// Init all
	loader();
	responsiveMenu();
	heroSection();
	testimonial();
	progressBarFill();
	videoPopup();
	accordions();
	progressCircles();
	productSearch();
	cartSystem();

})(jQuery);
