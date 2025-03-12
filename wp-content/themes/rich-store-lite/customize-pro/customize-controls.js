( function( api ) {
	// Extends our custom "rich-store-lite" section.
	api.sectionConstructor['rich-store-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );