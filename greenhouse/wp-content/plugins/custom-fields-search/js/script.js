(function($) {
	$(document).ready( function() {
		$( '#cstmfldssrch_settings_form input' ).bind( "change click select", function() {
			if ( $( this ).attr( 'type' ) != 'submit' ) {
				$( '.updated.fade' ).css( 'display', 'none' );
				$( '#cstmfldssrch_settings_notice' ).css( 'display', 'block' );
			};
		});
	});
})(jQuery);
