

( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'logo_img_ID', function( value ) {
		value.bind( function( newval ) {
			$( '#logo' ).html( newval );
		} );
	} );

	wp.customize( 'logo_alt_ID', function( value ) {
		value.bind( function( newval ) {
			$( '#logo' ).html( newval );
		} );
	} );

} )( jQuery );
