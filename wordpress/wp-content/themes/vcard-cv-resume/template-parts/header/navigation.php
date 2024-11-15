<?php
/**
 * The template part for header
 *
 * @package Vcard CV Resume 
 * @subpackage vcard-cv-resume
 * @since vcard-cv-resume 1.0
 */
?>

<div id="header">
  <?php ?>
    <div class="toggle-nav mobile-menu text-center mb-3 mb-md-0">
      <button role="tab" onclick="vcard_cv_resume_menu_open_nav()" class="responsivetoggle"><i class="py-2 px-3 <?php echo esc_attr(get_theme_mod('vcard_cv_resume_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vcard-cv-resume'); ?></span></button>
    </div>
  <?php  ?>
  <div id="mySidenav" class="nav sidenav">
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vcard-cv-resume' ); ?>">
      <?php 
        wp_nav_menu( array( 
          'theme_location' => 'primary',
          'container_class' => 'main-menu clearfix' ,
          'menu_class' => 'clearfix',
          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
          'fallback_cb' => 'wp_page_menu',
        ) );
      ?>
      <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vcard_cv_resume_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vcard_cv_resume_res_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vcard-cv-resume'); ?></span></a>
    </nav>
  </div>
</div>