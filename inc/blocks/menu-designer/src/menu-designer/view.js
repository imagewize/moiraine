/**
 * WordPress Interactivity API for Menu Designer Block
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/interactivity-api/
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state, actions } = store('moiraine/menu-designer', {
	state: {
		get isMenuOpen() {
			return Object.values(state.menuOpenedBy).filter(Boolean).length > 0;
		},

		get menuOpenedBy() {
			const context = getContext();
			return context.menuOpenedBy;
		},
	},

	actions: {
		toggleMenuOnClick() {
			const context = getContext();
			const { ref } = getElement();

			if (state.menuOpenedBy.click || state.menuOpenedBy.focus) {
				actions.closeMenuOnClick();
			} else {
				context.previousFocus = ref;
				actions.openMenu('click');
			}
		},

		closeMenuOnClick() {
			actions.closeMenu('click');
			actions.closeMenu('focus');
		},

		handleMenuKeydown(event) {
			if (state.menuOpenedBy.click) {
				// If Escape close the menu.
				if (event?.key === 'Escape') {
					actions.closeMenuOnClick();
				}
			}
		},

		handleOutsideClick(event) {
			const context = getContext();
			const megaMenu = context?.megaMenu;

			if (!megaMenu || megaMenu.contains(event.target)) {
				return;
			}

			actions.closeMenuOnClick();
		},

		openMenu(menuOpenedOn = 'click') {
			state.menuOpenedBy[menuOpenedOn] = true;
		},

		closeMenu(menuClosedOn = 'click') {
			const context = getContext();
			state.menuOpenedBy[menuClosedOn] = false;

			// Reset the menu reference and button focus when closed.
			if (!state.isMenuOpen) {
				if (context.megaMenu?.contains(window.document.activeElement)) {
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
			if (state.isMenuOpen) {
				context.megaMenu = ref;
			}
		},
	},
});
