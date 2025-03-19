/**
 * Plugin Manager JS.
 */
(function ($) {
	'use strict';

	$( document ).ready(
		function () {
			$( '.moiraine-plugin-card .install-plugin, .moiraine-plugin-card .activate-plugin' ).on(
				'click',
				function (e) {
					e.preventDefault();

					const $button = $( this );
					const $card   = $button.closest( '.moiraine-plugin-card' );
					const plugin  = $card.data( 'plugin' );
					const action  = $button.data( 'action' );

					if ( $button.hasClass( 'installing' ) ) {
						return;
					}

					$button.addClass( 'installing' ).text( MoirainePluginManager.i18n.installing );

					$.ajax(
						{
							url: MoirainePluginManager.ajaxUrl,
							type: 'POST',
							data: {
								action: 'moiraine_install_plugin',
								plugin: plugin,
								pluginAction: action,
								nonce: MoirainePluginManager.nonce
							},
							success: function (response) {
								if ( response.success ) {
									$button.removeClass( 'installing' )
										.addClass( 'button-disabled' )
										.prop( 'disabled', true )
										.text( MoirainePluginManager.i18n.activated );
								} else {
									$button.removeClass( 'installing' ).text( MoirainePluginManager.i18n.error );
									alert( response.data.message || 'Unknown error occurred' );
								}
							},
							error: function () {
								$button.removeClass( 'installing' ).text( MoirainePluginManager.i18n.error );
								alert( 'An error occurred while processing your request.' );
							}
						}
					);
				}
			);
		}
	);
})( jQuery );
