<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Vcard CV Resume
 */
?>

<h2 class="entry-title"><?php esc_html_e( 'Nothing Found', 'vcard-cv-resume' ); ?></h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'vcard-cv-resume' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('vcard_cv_resume_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','vcard-cv-resume')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'vcard-cv-resume' ); ?></p><br />
	<div class="error-btn">
		<a href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Back to Home Page', 'vcard-cv-resume' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page','vcard-cv-resume' );?></span></a>
	</div>
<?php endif; ?>