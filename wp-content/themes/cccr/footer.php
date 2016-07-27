<?php

/**
 * The template for displaying the header
 *
 *
 * @package Charm City Coffee Roasters
 * @subpackage Charm City Coffee Roasters
 * @since 2016
 */

 ?>

<footer id="footer" class="site-footer">
</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		var $blur;
		$('#main-navigation ul').slicknav({
			label: '',
			prependTo: '#main-navigation-location',
			duration: '1000',
			easingOpen: "swing",
			easingClose: "swing",
			closeOnClick:true,
			init: function() {
        $blur = $('#primary');
				$header = $('.site-header');
				$heading = $('.site-motto');
    	},
			beforeOpen: function(){
					$blur.addClass("blurred");
					$header.addClass("blurred");
					$heading.addClass("hidden");
			},
			afterClose: function(){
					$blur.removeClass("blurred");
					$header.removeClass("blurred");
					$heading.removeClass("hidden");
			},
		});
	});

  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});


</script>



<?php wp_footer(); ?>
</body>
</html>
