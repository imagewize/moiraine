/**
 * WordPress Interactivity API for Menu Designer Block
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state, actions } = store( 'moiraine/menu-designer', {
	state: {
		get isMenuOpen() {
			const context = getContext();
			const result = Object.values( context.menuOpenedBy || {} ).filter( Boolean ).length > 0;
			console.log( '🔥 MENU DESIGNER: isMenuOpen getter called' );
			console.log( '🔥 MENU DESIGNER: context.menuOpenedBy =', context.menuOpenedBy );
			console.log( '🔥 MENU DESIGNER: isMenuOpen result =', result );
			return result;
		},
	},

	actions: {
		toggleMenuOnClick() {
			console.log( '🔥 MENU DESIGNER: toggleMenuOnClick called' );
			const context = getContext();
			const { ref } = getElement();

			console.log( '🔥 MENU DESIGNER: context =', context );
			console.log( '🔥 MENU DESIGNER: context.menuOpenedBy =', context.menuOpenedBy );
			console.log( '🔥 MENU DESIGNER: ref =', ref );

			if ( context.menuOpenedBy.click || context.menuOpenedBy.focus ) {
				console.log( '🔥 MENU DESIGNER: Closing menu' );
				actions.closeMenuOnClick();
			} else {
				console.log( '🔥 MENU DESIGNER: Opening menu' );
				context.previousFocus = ref;
				actions.openMenu( 'click' );
			}
		},

		closeMenuOnClick() {
			actions.closeMenu( 'click' );
			actions.closeMenu( 'focus' );
		},

		handleMenuKeydown( event ) {
			const context = getContext();
			if ( context.menuOpenedBy.click ) {
				// If Escape close the menu.
				if ( event?.key === 'Escape' ) {
					actions.closeMenuOnClick();
				}
			}
		},

		handleOutsideClick( event ) {
			const { ref } = getElement();
			const megaMenu = ref.querySelector('.moiraine-menu-designer');

			if ( ! megaMenu || megaMenu.contains( event.target ) ) {
				return;
			}

			actions.closeMenuOnClick();
		},

		openMenu( menuOpenedOn = 'click' ) {
			console.log( '🔥 MENU DESIGNER: openMenu called with', menuOpenedOn );
			const context = getContext();
			context.menuOpenedBy[ menuOpenedOn ] = true;
			console.log( '🔥 MENU DESIGNER: After setting, context.menuOpenedBy =', context.menuOpenedBy );
			console.log( '🔥 MENU DESIGNER: state.isMenuOpen =', state.isMenuOpen );
		},

		closeMenu( menuClosedOn = 'click' ) {
			console.log( '🔥 MENU DESIGNER: closeMenu called with', menuClosedOn );
			const context = getContext();
			context.menuOpenedBy[ menuClosedOn ] = false;
			console.log( '🔥 MENU DESIGNER: After closing, context.menuOpenedBy =', context.menuOpenedBy );
			console.log( '🔥 MENU DESIGNER: state.isMenuOpen =', state.isMenuOpen );

			// Reset the button focus when closed.
			if ( ! state.isMenuOpen ) {
				if ( context.previousFocus ) {
					context.previousFocus.focus();
				}
				context.previousFocus = null;
			}
		},
	},
} );
