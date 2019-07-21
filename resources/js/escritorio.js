window.EscritorioSlider=function(){

$('.slider-area').slick({
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 4,
			autoplay: true,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 1200,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						dots: false
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
}