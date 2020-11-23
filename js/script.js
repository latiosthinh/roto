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

	if ( $( 'body' ).hasClass( 'tax-prod-category' ) || $( 'body' ).hasClass( 'single-product' ) ) {
		$( '#menu-item-129' ).addClass( 'current-menu-item' );
	}

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

		$( '.gallery-product' ).slick( {
			arrows: false,
			dots: false,
			asNavFor: $( '.gallery-thumbs' )
		} )

		$( '.gallery-thumbs' ).slick( {
			slidesToShow: 3,
			slidesToScroll: 1,
			arrows: false,
			dots: true,
			focusOnSelect: true,
			asNavFor: $( '.gallery-product' )
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

	if ( $( '.project-slider' ).length !== 0 ) {
		$( '.project-slider' ).slick( {
			slidesToShow: 2,
			slidesToScroll: 2,
			dots: true,
			nextArrow: '<div class="next"><span><svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">'
					+ '<path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="white"/>'
						+ '</svg></span></div>',
			prevArrow: '<div class="prev"><span><svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">'
						+ '<path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269202 4.02369 0.269202 3.82843 0.464465L0.646446 3.64644ZM21 3.5L1 3.5L1 4.5L21 4.5L21 3.5Z" fill="white"/>'
						+ '</svg></span></div>'

		} )
	}

	if ( $( '.single-project-slider' ).length !== 0 ) {
		$( '.single-project-slider' ).slick( {
			dots: true,
			nextArrow: '<div class="next"><span><svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">'
						+ '<path d="M20.3536 4.35355C20.5488 4.15829 20.5488 3.84171 20.3536 3.64645L17.1716 0.464466C16.9763 0.269204 16.6597 0.269204 16.4645 0.464466C16.2692 0.659728 16.2692 0.976311 16.4645 1.17157L19.2929 4L16.4645 6.82843C16.2692 7.02369 16.2692 7.34027 16.4645 7.53553C16.6597 7.7308 16.9763 7.7308 17.1716 7.53553L20.3536 4.35355ZM0 4.5H20V3.5H0V4.5Z" fill="white"/>'
						+ '</svg></span></div>',
			prevArrow: '<div class="prev"><span><svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">'
						+ '<path d="M0.646446 3.64644C0.451185 3.84171 0.451185 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976309 4.7308 0.659727 4.53553 0.464465C4.34027 0.269202 4.02369 0.269202 3.82843 0.464465L0.646446 3.64644ZM21 3.5L1 3.5L1 4.5L21 4.5L21 3.5Z" fill="white"/>'
						+ '</svg></span></div>'

		} )
	}

	if ( $( '.news-ttc-slider' ).length !== 0 ) {
		$( '.news-ttc-slider' ).slick({
			arrows: false,
			infinite: false,
			dots: true,
			appendDots: $( '.tin-tuc-chung .pagination' )
		})

		$( '.news-ttsp-slider' ).slick({
			arrows: false,
			infinite: false,
			dots: true,
			appendDots: $( '.tin-tuc-san-pham .pagination' )
		})
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

	let tabs = document.querySelectorAll( '.tabs' );
	if ( tabs ) {
		$( '.tab-link' ).on( 'click', function( e ) {
			e.preventDefault();

			$( '.tab-link' ).removeClass( 'active' );
			$( this ).addClass( 'active' );

			$( '.tab-panel' ).removeClass( 'active' );
			$( $( this ).attr( 'href' ) ).addClass( 'active' );
		} )

		$( '.tab-link:first-child' ).trigger( 'click' );
	}

	if ( sliders || productSlider ) {
		sliderHandler();
	}

	if ( partner ) {
		partnerSliderHandler();
	}
});