document.addEventListener( 'DOMContentLoaded', function() {
	const $ = jQuery;
	let posX             = document.querySelector( '.product-wrapper' );
	let homeProductItems = document.querySelectorAll( '.product-items' );
	let searchButton     = document.querySelector( '.search-icon' );
	let searchForm       = document.querySelector( '.header-search__wrapper' );
	let sliders          = document.querySelectorAll( '.gallery-product' );
	let productSlider    = document.querySelectorAll( '.product-slider' );
	let partner          = document.querySelector( '.partners' );

	let header = document.getElementById( 'masthead' );

	const fixHeader = () => {
		header.classList.add( 'fixed' );

		const body = document.querySelector( 'body' );
		body.style.paddingTop = header.offsetHeight + 'px';
	}

	const homeProductAdjust = () => {
		homeProductItems.forEach( e => {
			e.style.width = window.innerWidth - ( window.innerWidth - posX.offsetWidth )/2 + 30 + 'px';
		});
	}

	const productSliderAdjust = () => {
		productSlider.forEach( e => {
			e.style.width = window.innerWidth - ( window.innerWidth - posX.offsetWidth )/2 + 30 + 'px';
		});
	}

	const searhFormHandler = () => {
		searchButton.addEventListener( 'click', function() {
			if ( searchForm.classList.contains( 'active' ) ) {
				searchForm.classList.remove( 'active' );
			} else {
				searchForm.classList.add( 'active' );
			}
		} )
	}

	const sliderHandler = () => {
		$( '.product-slider' ).slick( {
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			nextArrow: '<div class="next"><span><svg width="33" height="24" viewBox="0 0 33 24" fill="#000000" xmlns="http://www.w3.org/2000/svg">'
						+ '<path class="svg-arrow" d="M32.0607 13.0607C32.6464 12.4749 32.6464 11.5251 32.0607 10.9393L22.5147 1.3934C21.9289 0.807611 20.9792 0.807611 20.3934 1.3934C19.8076 1.97919 19.8076 2.92893 20.3934 3.51472L28.8787 12L20.3934 20.4853C19.8076 21.0711 19.8076 22.0208 20.3934 22.6066C20.9792 23.1924 21.9289 23.1924 22.5147 22.6066L32.0607 13.0607ZM0 13.5H31V10.5H0V13.5Z" fill="#000000"/>'
						+ '</svg></span></div>'
		} )
	}

	const partnerSliderHandler = () => {
		$( '.partners' ).slick( {
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			infinite: true,
			arrows: false
		} )
	}

	// active function
	ScrollOut({
		offset: 0
	});

	if ( window.innerWidth > 992 ) {
		fixHeader();
		homeProductAdjust();
		productSliderAdjust();
	}

	searhFormHandler();

	if ( sliders || productSlider ) {
		sliderHandler();
	}

	if ( partner ) {
		partnerSliderHandler();
	}
});