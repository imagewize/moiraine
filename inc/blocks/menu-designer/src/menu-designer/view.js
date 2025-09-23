/**
 * WordPress Interactivity API for Menu Designer Block
 * Based on Human Made Mega Menu Block implementation
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/
 * @see https://github.com/humanmade/hm-mega-menu-block
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state, actions } = store( 'moiraine/menu-designer', {
	state: {
		get isMenuOpen() {
			return Object.values( state.menuOpenedBy ).filter( Boolean ).length > 0;
		},

		get menuOpenedBy() {
			const context = getContext();
			return context.menuOpenedBy || {};
		},

		get menuPosition() {
			const context = getContext();
			return context.menuPosition || 'left';
		},
	},

	actions: {
		toggleMenuOnClick() {
			const context = getContext();
			const { ref } = getElement();

			if ( state.menuOpenedBy.click || state.menuOpenedBy.focus ) {
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
			if ( state.menuOpenedBy.click ) {
				// If Escape close the menu.
				if ( event?.key === 'Escape' ) {
					actions.closeMenuOnClick();
				}
			}
		},

		handleOutsideClick( event ) {
			const context = getContext();
			const megaMenu = context?.megaMenu;

			if ( ! megaMenu || megaMenu.contains( event.target ) ) {
				return;
			}

			actions.closeMenuOnClick();
		},

		openMenu( menuOpenedOn = 'click' ) {
			actions.calculateMenuPosition();
			state.menuOpenedBy[ menuOpenedOn ] = true;
		},

		calculateMenuPosition() {
			const context = getContext();
			const { ref } = getElement();

			// Find the menu button and container
			const button = ref.querySelector('.wp-block-moiraine-menu-designer__toggle');
			const menuContainer = ref.querySelector('.moiraine-menu-designer, .wp-block-moiraine-menu-designer__menu-container');

			if (!button || !menuContainer) {
				return;
			}

			const buttonRect = button.getBoundingClientRect();
			const viewportWidth = window.innerWidth;
			const menuWidth = menuContainer.offsetWidth || 400; // fallback width

			// Calculate available space on both sides
			const spaceToLeft = buttonRect.left;
			const spaceToRight = viewportWidth - buttonRect.right;
			const buttonCenter = buttonRect.left + (buttonRect.width / 2);
			const viewportCenter = viewportWidth / 2;

			let position = 'left';

			// Check if we're near the right edge and don't have enough space
			if (spaceToRight < menuWidth && spaceToLeft > menuWidth) {
				position = 'right';
			}
			// If we're in the center area and have space, try to center
			else if (Math.abs(buttonCenter - viewportCenter) < 100 &&
					 spaceToLeft > menuWidth / 2 &&
					 spaceToRight > menuWidth / 2) {
				position = 'center';
			}
			// For very wide menus, prefer right alignment if button is past center
			else if (menuWidth > viewportWidth * 0.6 && buttonCenter > viewportCenter) {
				position = 'right';
			}

			context.menuPosition = position;
		},

		closeMenu( menuClosedOn = 'click' ) {
			const context = getContext();
			state.menuOpenedBy[ menuClosedOn ] = false;

			// Reset the menu reference and button focus when closed.
			if ( ! state.isMenuOpen ) {
				if ( context.megaMenu?.contains( window.document.activeElement ) ) {
					context.previousFocus?.focus();
				}
				context.previousFocus = null;
				context.megaMenu = null;
			}
		},
	},

	callbacks: {
		initMenu() {
			const context = getContext();
			const { ref } = getElement();

			// Set the menu reference when initialized.
			if ( state.isMenuOpen ) {
				context.megaMenu = ref;
			}

			// Add window resize listener for viewport changes
			if ( ! context.resizeListenerAdded ) {
				context.resizeListenerAdded = true;
				window.addEventListener('resize', () => {
					if ( state.isMenuOpen ) {
						actions.calculateMenuPosition();
					}
				});
			}
		},
	},
} );
