( function( api ) {

	// Extends our custom "vcard-cv-resume" section.
	api.sectionConstructor['vcard-cv-resume'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );