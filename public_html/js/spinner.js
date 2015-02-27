//spinner function
( function( window ){
	var inProgress = false;

	Array.prototype.slice.call( document.querySelectorAll( '#popcorn>a' ) ).forEach( function( el, i ) {
		var anim = el.getAttribute( 'data-anim' ),
			animEl = document.querySelector( '.' + anim );

		el.addEventListener( 'click', function() {
			if( inProgress ) return false;
			inProgress = true;
			classie.add( animEl, 'animate' );
		} );
	} );
})( window );