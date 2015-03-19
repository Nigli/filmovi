//spinner function
( function( window ){
	var inProgress = false;

	Array.prototype.slice.call( document.querySelectorAll( '#popcorn' ) ).forEach( function( el, i ) {
		var anim = el.getAttribute( 'data-anim' ),
			animEl = document.querySelector( '.' + anim );

		el.addEventListener( 'click', function() {
			if( inProgress ) return false;
			inProgress = true;
			classie.add( animEl, 'animate' );
                        var shade = document.getElementById('shade');
                        classie.add( shade, 'visible' );
		} );
	} );
})( window );