<?php
/**
 * Typography control class.
 *
 * @since  1.0.0
 * @access public
 */

class Vcard_CV_Resume_Control_Typography extends WP_Customize_Control {

	/**
	 * The type of customize control being rendered.
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $type = 'vcard-cv-resume-typography';

	/**
	 * Array 
	 *
	 * @since  1.0.0
	 * @access public
	 * @var    string
	 */
	public $l10n = array();

	/**
	 * Set up our control.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @param  string  $id
	 * @param  array   $args
	 * @return void
	 */
	public function __construct( $manager, $id, $args = array() ) {

		// Let the parent class do its thing.
		parent::__construct( $manager, $id, $args );

		// Make sure we have labels.
		$this->l10n = wp_parse_args(
			$this->l10n,
			array(
				'color'       => esc_html__( 'Font Color', 'vcard-cv-resume' ),
				'family'      => esc_html__( 'Font Family', 'vcard-cv-resume' ),
				'size'        => esc_html__( 'Font Size',   'vcard-cv-resume' ),
				'weight'      => esc_html__( 'Font Weight', 'vcard-cv-resume' ),
				'style'       => esc_html__( 'Font Style',  'vcard-cv-resume' ),
				'line_height' => esc_html__( 'Line Height', 'vcard-cv-resume' ),
				'letter_spacing' => esc_html__( 'Letter Spacing', 'vcard-cv-resume' ),
			)
		);
	}

	/**
	 * Enqueue scripts/styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_script( 'vcard-cv-resume-ctypo-customize-controls' );
		wp_enqueue_style(  'vcard-cv-resume-ctypo-customize-controls' );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// Loop through each of the settings and set up the data for it.
		foreach ( $this->settings as $setting_key => $setting_id ) {

			$this->json[ $setting_key ] = array(
				'link'  => $this->get_link( $setting_key ),
				'value' => $this->value( $setting_key ),
				'label' => isset( $this->l10n[ $setting_key ] ) ? $this->l10n[ $setting_key ] : ''
			);

			if ( 'family' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_families();

			elseif ( 'weight' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_weight_choices();

			elseif ( 'style' === $setting_key )
				$this->json[ $setting_key ]['choices'] = $this->get_font_style_choices();
		}
	}

	/**
	 * Underscore JS template to handle the control's output.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function content_template() { ?>

		<# if ( data.label ) { #>
			<span class="customize-control-title">{{ data.label }}</span>
		<# } #>

		<# if ( data.description ) { #>
			<span class="description customize-control-description">{{{ data.description }}}</span>
		<# } #>

		<ul>

		<# if ( data.family && data.family.choices ) { #>

			<li class="typography-font-family">

				<# if ( data.family.label ) { #>
					<span class="customize-control-title">{{ data.family.label }}</span>
				<# } #>

				<select {{{ data.family.link }}}>

					<# _.each( data.family.choices, function( label, choice ) { #>
						<option value="{{ choice }}" <# if ( choice === data.family.value ) { #> selected="selected" <# } #>>{{ label }}</option>
					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.weight && data.weight.choices ) { #>

			<li class="typography-font-weight">

				<# if ( data.weight.label ) { #>
					<span class="customize-control-title">{{ data.weight.label }}</span>
				<# } #>

				<select {{{ data.weight.link }}}>

					<# _.each( data.weight.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.weight.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.style && data.style.choices ) { #>

			<li class="typography-font-style">

				<# if ( data.style.label ) { #>
					<span class="customize-control-title">{{ data.style.label }}</span>
				<# } #>

				<select {{{ data.style.link }}}>

					<# _.each( data.style.choices, function( label, choice ) { #>

						<option value="{{ choice }}" <# if ( choice === data.style.value ) { #> selected="selected" <# } #>>{{ label }}</option>

					<# } ) #>

				</select>
			</li>
		<# } #>

		<# if ( data.size ) { #>

			<li class="typography-font-size">

				<# if ( data.size.label ) { #>
					<span class="customize-control-title">{{ data.size.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.size.link }}} value="{{ data.size.value }}" />

			</li>
		<# } #>

		<# if ( data.line_height ) { #>

			<li class="typography-line-height">

				<# if ( data.line_height.label ) { #>
					<span class="customize-control-title">{{ data.line_height.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.line_height.link }}} value="{{ data.line_height.value }}" />

			</li>
		<# } #>

		<# if ( data.letter_spacing ) { #>

			<li class="typography-letter-spacing">

				<# if ( data.letter_spacing.label ) { #>
					<span class="customize-control-title">{{ data.letter_spacing.label }} (px)</span>
				<# } #>

				<input type="number" min="1" {{{ data.letter_spacing.link }}} value="{{ data.letter_spacing.value }}" />

			</li>
		<# } #>

		</ul>
	<?php }

	/**
	 * Returns the available fonts.  Fonts should have available weights, styles, and subsets.
	 *
	 * @todo Integrate with Google fonts.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_fonts() { return array(); }

	/**
	 * Returns the available font families.
	 *
	 * @todo Pull families from `get_fonts()`.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	function get_font_families() {

		return array(
			'' => __( 'No Fonts', 'vcard-cv-resume' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vcard-cv-resume' ),
        'Acme' => __( 'Acme', 'vcard-cv-resume' ),
        'Anton' => __( 'Anton', 'vcard-cv-resume' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vcard-cv-resume' ),
        'Arimo' => __( 'Arimo', 'vcard-cv-resume' ),
        'Arsenal' => __( 'Arsenal', 'vcard-cv-resume' ),
        'Arvo' => __( 'Arvo', 'vcard-cv-resume' ),
        'Alegreya' => __( 'Alegreya', 'vcard-cv-resume' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vcard-cv-resume' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vcard-cv-resume' ),
        'Bangers' => __( 'Bangers', 'vcard-cv-resume' ),
        'Boogaloo' => __( 'Boogaloo', 'vcard-cv-resume' ),
        'Bad Script' => __( 'Bad Script', 'vcard-cv-resume' ),
        'Bitter' => __( 'Bitter', 'vcard-cv-resume' ),
        'Bree Serif' => __( 'Bree Serif', 'vcard-cv-resume' ),
        'BenchNine' => __( 'BenchNine', 'vcard-cv-resume' ),
        'Cabin' => __( 'Cabin', 'vcard-cv-resume' ),
        'Cardo' => __( 'Cardo', 'vcard-cv-resume' ),
        'Courgette' => __( 'Courgette', 'vcard-cv-resume' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vcard-cv-resume' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vcard-cv-resume' ),
        'Crimson Text' => __( 'Crimson Text', 'vcard-cv-resume' ),
        'Cuprum' => __( 'Cuprum', 'vcard-cv-resume' ),
        'Cookie' => __( 'Cookie', 'vcard-cv-resume' ),
        'Chewy' => __( 'Chewy', 'vcard-cv-resume' )
		);
	}

	/**
	 * Returns the available font weights.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_weight_choices() {

		return array(
			'' => esc_html__( 'No Fonts weight', 'vcard-cv-resume' ),
			'100' => esc_html__( 'Thin',       'vcard-cv-resume' ),
			'300' => esc_html__( 'Light',      'vcard-cv-resume' ),
			'400' => esc_html__( 'Normal',     'vcard-cv-resume' ),
			'500' => esc_html__( 'Medium',     'vcard-cv-resume' ),
			'700' => esc_html__( 'Bold',       'vcard-cv-resume' ),
			'900' => esc_html__( 'Ultra Bold', 'vcard-cv-resume' ),
		);
	}

	/**
	 * Returns the available font styles.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array
	 */
	public function get_font_style_choices() {

		return array(
			'' => esc_html__( 'No Fonts Style', 'vcard-cv-resume' ),
			'normal'  => esc_html__( 'Normal', 'vcard-cv-resume' ),
			'italic'  => esc_html__( 'Italic', 'vcard-cv-resume' ),
			'oblique' => esc_html__( 'Oblique', 'vcard-cv-resume' )
		);
	}
}
