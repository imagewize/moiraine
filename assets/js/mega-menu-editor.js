/**
 * Mega menu editor functionality
 */

(function(wp) {
    // Editor-specific functionality to support the mega menu
    const { __ } = wp.i18n;
    const { addFilter } = wp.hooks;
    const { createHigherOrderComponent } = wp.compose;
    
    // Add custom attribute controls to navigation link blocks
    const withMegaMenuControls = createHigherOrderComponent((BlockEdit) => {
        return (props) => {
            // Only add controls to navigation-link blocks
            if (props.name !== 'core/navigation-link') {
                return <BlockEdit {...props} />;
            }
            
            // Add controls for mega menu here
            
            return <BlockEdit {...props} />;
        };
    }, 'withMegaMenuControls');
    
    addFilter(
        'editor.BlockEdit',
        'moiraine/mega-menu-controls',
        withMegaMenuControls
    );
    
    // Transfer data attributes in the editor preview
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
    }
})(window.wp);
