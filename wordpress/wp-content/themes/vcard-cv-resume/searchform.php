<?php
/**
 * The template for displaying search forms in vcard-cv-resume
 *
 * @package Vcard CV Resume
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_attr_x( 'Search for:', 'label', 'vcard-cv-resume' ); ?></span>
		<input type="search" class="search-field p-3" placeholder="<?php echo esc_attr_x( 'SEARCH', 'placeholder','vcard-cv-resume' ); ?>" value="<?php echo esc_attr( get_search_query()); ?>" name="s">
	</label>
	<input type="submit" class="search-submit p-3" value="<?php echo esc_attr_x( 'SEARCH', 'submit button','vcard-cv-resume' ); ?>">
</form>