<?php
/**
 * The template part for top header
 *
 * @package Vcard CV Resume
 * @subpackage vcard-cv-resume
 * @since vcard-cv-resume 1.0
 */
?>

<div class="main-header py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 align-self-center">
        <div class="logo text-center text-md-start py-3 py-md-0">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <?php if( get_theme_mod('vcard_cv_resume_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php else : ?>
                <?php if( get_theme_mod('vcard_cv_resume_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <?php if( get_theme_mod('vcard_cv_resume_tagline_hide_show',false) == 1){ ?>
              <p class="site-description mb-0">
                <?php echo esc_html($description); ?>
              </p>
            <?php } ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-5 col-md-2 align-self-center">
        <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
      <div class="col-lg-2 col-md-3 align-self-center text-center">
        <?php dynamic_sidebar('social-links'); ?>
      </div>
      <div class="col-lg-2 col-md-3 align-self-center">
        <div class="topbar_btn text-center text-md-end py-3 py-md-0">
          <?php if( get_theme_mod('vcard_cv_resume_topbar_btn_link') != '' || get_theme_mod('vcard_cv_resume_topbar_btn_text') != '' ){ ?>
            <a href="<?php echo esc_url(get_theme_mod('vcard_cv_resume_topbar_btn_link',''));?>" class="px-3 py-2"><?php echo esc_html(get_theme_mod('vcard_cv_resume_topbar_btn_text',''));?></a>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>

