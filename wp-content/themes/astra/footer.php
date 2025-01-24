<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});

	
	function toggleCardContent(event, cardId) {
  event.stopPropagation(); // Prevent propagation
  const card = document.getElementById(cardId).closest(".custom-card");
  card.classList.toggle("active");
}

// Add event listener to remove the content on card click
document.querySelectorAll(".custom-card").forEach((card) => {
  card.addEventListener("click", () => {
    card.classList.remove("active");
  });
});

/////////////////////
function toggleText(cardNumber) {
  const cardText = document.getElementById(`card-text-${cardNumber}`);
  
  // Toggle visibility
 if (cardText.style.display === "block") {
    cardText.style.display = "none";
  } else {
    cardText.style.display = "block";
  }
}



</script>

	</body>
</html>
