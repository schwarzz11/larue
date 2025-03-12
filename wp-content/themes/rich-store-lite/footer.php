<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Rich Store Lite
 */
?>

<div class="sitefooter"> 
           <div class="copyrightwrap">
              <div class="container">               
				    <?php bloginfo('name'); ?> | <?php esc_html_e('Theme by Grace Themes','rich-store-lite'); ?>             
            </div><!--end .container-->  
         </div><!--end .copyrightwrap-->     
                                 
     </div><!--end #sitefooter-->
</div><!--#end sitelayout_options-->

<?php wp_footer(); ?>
</body>
</html>