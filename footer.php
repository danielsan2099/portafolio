<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage delish
 * @since delish 1.0
 */
?>
	</div><!-- #main -->
    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="copyright col-md-12 col-sm-8">
            <p class="col-md-6 alignleft"><?php if(get_theme_mod('delish_footer_cr_left')){
                echo esc_html(get_theme_mod( 'delish_footer_cr_left' )); 
                }?>
				</p><p class="col-md-6 alignright2">
				
                <?php if(get_theme_mod('delish_footer_top')){
                    echo esc_html(get_theme_mod( 'delish_footer_top' )); 
                }?> <br/>
					
        </div>
    	
    </footer><!-- #colophon -->
</div>
	<?php wp_footer(); ?>   

</body>
</html>