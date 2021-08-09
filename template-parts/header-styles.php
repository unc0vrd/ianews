<!-- header styles -->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom_fonts.css" media="screen" type="text/css" />
<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>

<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 89px;
}
.u-header .u-image-1 {
  width: 50px;
  height: 50px;
  margin: 25px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -43px 0 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
  font-weight: 700;
}
.u-block-1131-21 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-block-1131-22 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-text-1 {
  font-size: 2.25rem;
  font-weight: 700;
  margin: -47px auto 11px 70px;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    width: auto;
  }
  .u-header .u-text-1 {
    margin-top: -47px;
    margin-left: 70px;
  }
}</style>
