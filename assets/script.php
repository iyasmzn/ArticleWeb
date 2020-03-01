<!-- Bootstrap4 & jQuery library -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Slick -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<!-- Animate Scroll Js -->
<script type="text/javascript" src="./assets/animatescroll.js"></script>
<!-- OwlCarousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- MyScript -->
<script type="text/javascript">
	$(document).ready(function() {
		$('.archive-list-1').click(function() {
			$('.chepron-right-1').toggle({transform:'scale(2)'});
			$('.chepron-down-1').toggle({transform:'rotate(90deg)'});
		});
		$('.archive-list-2').click(function() {
			$('.chepron-right-2').toggle({transform:'scale(2)'});
			$('.chepron-down-2').toggle({transform:'rotate(90deg)'});
		});
		$('.owl-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout: 5*1000,
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
})
		$('.cover-bg').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 10000,
		  fade: true,
		  dots: true,
		});
		$('.slicky').slick();
	});
</script>