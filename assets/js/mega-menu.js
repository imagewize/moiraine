/**
 * Mega menu functionality
 */

document.addEventListener('DOMContentLoaded', function() {
    // Find all mega menu triggers
    const megaMenuTriggers = document.querySelectorAll('.has-mega-menu-trigger');
    const megaMenuContents = document.querySelectorAll('.mega-menu-content');
    
    // Add event listeners to each trigger
    megaMenuTriggers.forEach(trigger => {
        // Get the megaMenuId from the navigation link
        const menuId = trigger.getAttribute('data-mega-menu-id');
        
        trigger.addEventListener('mouseenter', function() {
            // Hide all mega menus first
            megaMenuContents.forEach(content => {
                content.style.display = 'none';
            });
            
            // Show the corresponding mega menu
            const targetMenu = document.querySelector(`.mega-menu-content[data-mega-menu-id="${menuId}"]`);
            if (targetMenu) {
                targetMenu.style.display = 'block';
            }
        });
    });
    
    // Hide all mega menus when mouse leaves the header
    document.querySelector('header').addEventListener('mouseleave', function() {
        megaMenuContents.forEach(content => {
            content.style.display = 'none';
        });
    });

    // Transfer data attributes from block attributes to DOM elements if needed
    if (window.wpBlockAttributes) {
        document.querySelectorAll('.has-mega-menu-trigger').forEach(trigger => {
            const blockClasses = trigger.className.split(' ');
            let blockId = '';
            
            for (const className of blockClasses) {
                if (className.startsWith('wp-element-')) {
                    blockId = className;
                    break;
                }
            }
            
            if (blockId && window.wpBlockAttributes[blockId]) {
                const attrs = window.wpBlockAttributes[blockId];
                if (attrs.megaMenuId) {
                    trigger.setAttribute('data-mega-menu-id', attrs.megaMenuId);
                }
            }
        });

        document.querySelectorAll('.mega-menu-content').forEach(content => {
            const blockClasses = content.className.split(' ');
            let blockId = '';
            
            for (const className of blockClasses) {
                if (className.startsWith('wp-element-')) {
                    blockId = className;
                    break;
                }
            }
            
            if (blockId && window.wpBlockAttributes[blockId]) {
                const attrs = window.wpBlockAttributes[blockId];
                if (attrs.megaMenuId) {
                    content.setAttribute('data-mega-menu-id', attrs.megaMenuId);
                }
            }
        });
    }
});
