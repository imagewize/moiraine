/**
 * WordPress Interactivity API for Menu Designer Block
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/
 */
import { store, getContext, getElement } from '@wordpress/interactivity';


console.log('🔥 Menu Designer view.js loaded');

const { state, actions } = store( 'moiraine/menu-designer', {
	state: {
		get isMenuOpen() {
			const context = getContext();
			return Object.values( context.menuOpenedBy || {} ).filter( Boolean ).length > 0;
		},
	},

	actions: {
		toggleMenuOnClick() {
			console.log('🔥 toggleMenuOnClick called');
			const context = getContext();
			const { ref } = getElement();

			console.log('🔥 context:', context);
			console.log('🔥 context.menuOpenedBy:', context.menuOpenedBy);
			console.log('🔥 state.isMenuOpen:', state.isMenuOpen);

			if ( context.menuOpenedBy?.click || context.menuOpenedBy?.focus ) {
				console.log('🔥 Closing menu');
				actions.closeMenuOnClick();
			} else {
				console.log('🔥 Opening menu');
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
			console.log('🔥 openMenu called with:', menuOpenedOn);
			const context = getContext();

			// Ensure menuOpenedBy exists and is an object
			if (!context.menuOpenedBy || typeof context.menuOpenedBy !== 'object') {
				console.log('🔥 Initializing context.menuOpenedBy');
				context.menuOpenedBy = {};
			}

			context.menuOpenedBy[ menuOpenedOn ] = true;
			console.log('🔥 After setting, context.menuOpenedBy:', context.menuOpenedBy);
			console.log('🔥 state.isMenuOpen after open:', state.isMenuOpen);
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
