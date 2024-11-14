<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'vcard_cv_resume_before_slider' ); ?>

  <?php if( get_theme_mod( 'vcard_cv_resume_slider_arrows', false) == 1 || get_theme_mod( 'vcard_cv_resume_resp_slider_hide_show', true) == 1) { ?>
    <?php if(get_theme_mod('vcard_cv_resume_slider_type', 'Default slider') == 'Default slider' ){ ?>
      <section id="slider">
         <div id="carouselExampleCaptions" class="carousel carousel-fade" data-bs-ride="carousel">
          <?php $vcard_cv_resume_pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'vcard_cv_resume_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $vcard_cv_resume_pages[] = $mod;
              }
            }
            if( !empty($vcard_cv_resume_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $vcard_cv_resume_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>
          <div class="carousel-inner" role="listbox">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <div class="slide-box">
                  <div class="row">
                    <div class="col-lg-7 col-md-7 order-box1">
                      <div class="carousel-caption">
                        <?php if( get_theme_mod('vcard_cv_resume_slider_title') != '' || get_theme_mod('vcard_cv_resume_slider_title_name') != '' ){ ?>
                          <div class="small-text-section d-flex gap-2 mb-3">
                            <p class="new-arrival-slider"><?php echo esc_html(get_theme_mod('vcard_cv_resume_slider_title',''));?></p>
                            <span class="new-arrival-slider-name"><?php echo esc_html(get_theme_mod('vcard_cv_resume_slider_title_name',''));?></span>
                          </div>
                        <?php }?>
                        <?php if( get_theme_mod('vcard_cv_resume_slider_title_hide_show',true) == 1){ ?>
                          <h1 class="mb-0 pt-0 wow bounce" data-wow-duration="1.5s"><?php the_title(); ?></h1>
                        <?php } ?>
                        <?php if( get_theme_mod('vcard_cv_resume_slider_content_hide_show',true) == 1){ ?>
                          <p class="para-text mt-2 wow bounce" data-wow-duration="1.5s"><?php $vcard_cv_resume_excerpt = get_the_excerpt(); echo esc_html( vcard_cv_resume_string_limit_words( $vcard_cv_resume_excerpt, esc_attr(get_theme_mod('vcard_cv_resume_slider_excerpt_number','30')))); ?></p>
                        <?php } ?>
                          <?php
                            $vcard_cv_resume_button_text = get_theme_mod('vcard_cv_resume_slider_button_text', 'Read More');
                            $vcard_cv_resume_button_link = get_theme_mod('vcard_cv_resume_top_button_url', '');
                            if (empty($vcard_cv_resume_button_link)) {
                              $vcard_cv_resume_button_link = get_permalink();
                            }
                            if ($vcard_cv_resume_button_text || !empty($vcard_cv_resume_button_link)) { ?>
                              <div class ="more-btn my-3 my-lg-2 my-md-4 wow bounce" data-wow-duration="1.5s">
                                <?php if( get_theme_mod('vcard_cv_resume_slider_button_text','Read More') != ''){ ?>
                                  <a href="<?php echo esc_url($vcard_cv_resume_button_link); ?>" class="button redmor">
                                  <?php echo esc_html($vcard_cv_resume_button_text); ?>
                                    <span class="screen-reader-text"><?php echo esc_html($vcard_cv_resume_button_text); ?></span><i class="<?php echo esc_attr(get_theme_mod('vcard_cv_resume_slider_button_icon','fas fa-angle-right')); ?>"></i>
                                  </a>
                                <?php } ?>
                              </div>
                          <?php } ?>
                      </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-box2">
                      <div class="slider-box">
                      <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                      } else{?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/slider-img.png" alt="" />
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <?php if(get_theme_mod('vcard_cv_resume_slider_arrow_hide_show', true)){?>
            <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
              <span class="carousel-control-prev-icon py-2 px-3 w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('vcard_cv_resume_slider_prev_icon','fas fa-chevron-left')); ?>"></i></span>
              <span class="screen-reader-text"><?php esc_html_e( 'Previous','vcard-cv-resume' );?></span>
            </a>
            <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
              <span class="carousel-control-next-icon py-2 px-3 w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('vcard_cv_resume_slider_next_icon','fas fa-chevron-right')); ?>"></i></span>
              <span class="screen-reader-text"><?php esc_html_e( 'Next','vcard-cv-resume' );?></span>
            </a>
          <?php }?>
        </div>
        <div class="clearfix"></div>
      </section>
    <?php } else if(get_theme_mod('vcard_cv_resume_slider_type', 'Advance slider') == 'Advance slider'){?>
      <?php echo do_shortcode(get_theme_mod('vcard_cv_resume_advance_slider_shortcode')); ?>
    <?php } ?>
  <?php }?>

  <?php do_action( 'vcard_cv_resume_after_slider' ); ?>

  <?php if( get_theme_mod( 'vcard_cv_resume_services_heading') || get_theme_mod( 'vcard_cv_resume_services_text') || get_theme_mod( 'vcard_cv_resume_services_category')) { ?>
    <section id="services-sec" class="py-5 wow zoomInUp delay-1000" data-wow-duration="2s">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-8 col-md-8 align-self-center">
            <?php if( get_theme_mod('vcard_cv_resume_services_heading') != '' ){ ?>
              <h3 class="text-center text-md-start"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_heading',''));?></h3>
            <?php }?>
            <?php if( get_theme_mod('vcard_cv_resume_services_text') != '' ){ ?>
              <p class="text-center text-md-start"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_text',''));?></p>
            <?php }?>
          </div>
          <div class="col-lg-4 col-md-4 align-self-center">
            <?php if( get_theme_mod('vcard_cv_resume_services_viewbtn_link') != '' || get_theme_mod('vcard_cv_resume_services_viewbtn_text') != '' ){ ?>
              <div class="view-all-btn text-center text-md-end">
                <a href="<?php echo esc_html(get_theme_mod('vcard_cv_resume_services_viewbtn_link',''));?>" class="px-5 py-3"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_viewbtn_text',''));?></a>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="row">
          <?php
          $vcard_cv_resume_catData = get_theme_mod('vcard_cv_resume_services_category');
          if($vcard_cv_resume_catData){
          $page_query = new WP_Query(array( 'category_name' => esc_html( $vcard_cv_resume_catData ,'vcard-cv-resume'))); ?>
          <?php $blog_i = 0;
            while( $page_query->have_posts() ) : $page_query->the_post(); if(($blog_i % 2) == 0 ){ ?>
              <div class="col-lg-6 col-md-6">
                <div class="odd-service-box mb-4">
                  <div class="row">
                    <?php if(has_post_thumbnail()) {?>
                      <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php }?>
                    <div class="<?php if(has_post_thumbnail()) { ?> col-lg-6 col-md-12 col-sm-12 align-self-center <?php }else{ ?> col-lg-12 col-md-12 ps-md-4<?php } ?>">
                      <div class="box-content text-center text-lg-start py-3 py-md-3">
                        <?php if(get_theme_mod('vcard_cv_resume_toggle_postdate',true)==1){ ?>
                          <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vcard_cv_resume_archive_year, $vcard_cv_resume_archive_month, $vcard_cv_resume_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                        <?php } ?>
                        <h4 class="title mt-2"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></h4>
                        <p class="mt-2"><?php $vcard_cv_resume_excerpt = get_the_excerpt(); echo esc_html( vcard_cv_resume_string_limit_words( $vcard_cv_resume_excerpt, esc_attr(get_theme_mod('vcard_cv_resume_services_excerpt_number','15')))); ?></p>
                        <?php if( get_theme_mod('vcard_cv_resume_services_button_text','Read More') != ''){ ?>
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_button_text',__('Read More','vcard-cv-resume')));?><i class="fas fa-long-arrow-alt-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_button_text',__('Read More','vcard-cv-resume')));?></span></a>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } else { ?>
              <div class="col-lg-6 col-md-6">
                <div class="even-service-box mb-4">
                  <div class="row">
                    <div class="<?php if(has_post_thumbnail()) { ?> col-lg-6 col-md-12 col-sm-12 align-self-center even-order1 <?php }else{ ?> col-lg-12 col-md-12<?php } ?>">
                      <div class="box-content ps-md-3 text-center text-lg-start py-3 py-md-3">
                        <?php if(get_theme_mod('vcard_cv_resume_toggle_postdate',true)==1){ ?>
                          <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vcard_cv_resume_archive_year, $vcard_cv_resume_archive_month, $vcard_cv_resume_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
                        <?php } ?>
                        <h4 class="mt-2"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></h4>
                        <p class="mt-2"><?php $vcard_cv_resume_excerpt = get_the_excerpt(); echo esc_html( vcard_cv_resume_string_limit_words( $vcard_cv_resume_excerpt, esc_attr(get_theme_mod('vcard_cv_resume_services_excerpt_number','15')))); ?></p>
                        <?php if( get_theme_mod('vcard_cv_resume_services_button_text','Read More') != ''){ ?>
                          <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_button_text',__('Read More','vcard-cv-resume')));?><i class="fas fa-long-arrow-alt-right ms-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vcard_cv_resume_services_button_text',__('Read More','vcard-cv-resume')));?></span></a>
                        <?php } ?>
                      </div>
                    </div>
                    <?php if(has_post_thumbnail()) {?>
                      <div class="col-lg-6 col-md-12 col-sm-12 align-self-center even-order2">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </div>
            <?php }
            $blog_i++;
            endwhile;
            wp_reset_postdata(); }
          ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'vcard_cv_resume_after_service' ); ?>

  <div id="content-vw" class="py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>