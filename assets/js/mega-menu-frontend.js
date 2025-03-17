/**
 * Mega menu frontend functionality
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
});
