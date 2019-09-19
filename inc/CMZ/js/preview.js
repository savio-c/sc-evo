

( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'CMZ_Footer__logo_img_ID', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_logo' ).html( newval );
		} );
	} );

	//Update the site description in real time...
	wp.customize( 'CMZ_Footer__description_ID', function( value ) {
		value.bind( function( newval ) {
			$( '#footer_description' ).html( newval );
		} );
	} );


} )( jQuery );
