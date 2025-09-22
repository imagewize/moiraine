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
			return Object.values( context.menuOpenedBy || {} ).filter( Boolean ).length > 0;
		},
	},

	actions: {
		toggleMenuOnClick() {
			const context = getContext();
			const { ref } = getElement();

			if ( context.menuOpenedBy.click || context.menuOpenedBy.focus ) {
				actions.closeMenuOnClick();
			} else {
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
			const context = getContext();
			context.menuOpenedBy[ menuOpenedOn ] = true;
		},

		closeMenu( menuClosedOn = 'click' ) {
			const context = getContext();
			context.menuOpenedBy[ menuClosedOn ] = false;

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
