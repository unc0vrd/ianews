<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-354a">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1">This website is being used to showcase the upcoming Internal News which is being built by Internal Archive, if you're an unauthorised viewer, please leave now. If you are an Internal Archive employee, you can stay.<br>
      <br>CONFIDENTIAL &amp; PROPRIETARY<br>
      <br>Protected By Internal Archive 
    </p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="https://nicepage.com/WordPress Themes" target="_blank">
        <span>wordpress-themes</span>
            </a>
        <p class="u-text"><span>created with</span></p>
        <a class="u-link" href="https://nicepage.com/wordpress-website-builder" target="_blank"><span>WordPress Website Builder</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
