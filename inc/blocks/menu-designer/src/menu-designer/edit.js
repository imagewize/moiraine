/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __, sprintf } from '@wordpress/i18n';
import {
	InspectorControls,
	RichText,
	useBlockProps,
} from '@wordpress/block-editor';
import { useEntityRecords } from '@wordpress/core-data';
import { useSelect } from '@wordpress/data';
import { createInterpolateElement } from '@wordpress/element';
import {
	ComboboxControl,
	PanelBody,
	TextControl,
	ColorPalette,
	__experimentalHStack as HStack,
	__experimentalToggleGroupControl as ToggleGroupControl,
	__experimentalToggleGroupControlOptionIcon as ToggleGroupControlOptionIcon
} from '@wordpress/components';
import {
	alignNone,
	justifyLeft,
	justifyCenter,
	justifyRight,
	stretchWide,
	stretchFullWidth,
} from '@wordpress/icons';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const {
		label,
		labelColor,
		description,
		menuSlug,
		justifyMenu,
		width
	} = attributes;

	const layout = useSelect( (select) => select('core/editor').getEditorSettings()?.__experimentalFeatures?.layout );

	const siteUrl = useSelect( (select) => select('core').getSite().url );
	const menuTemplateUrl = siteUrl ? siteUrl + '/wp-admin/site-editor.php?path%2Fpatterns&categoryType=wp_template_part&categoryId=menu' : '';

	const { hasResolved, records } = useEntityRecords (
		'postType',
		'wp_template_part',
		{
			per_page: -1,
		}
	);

	let menuOptions = [];

	if( hasResolved ) {
		menuOptions = records.filter( ( item ) => item.area === 'menu' ).map( ( item ) => ( {
			label: item.title.rendered,
			value: item.slug
		} ) );
	}

	const hasMenus = menuOptions.length > 0;

	const blockProps = useBlockProps( {
		className: 'wp-block-navigation-item wp-block-moiraine-menu-designer__toggle',
		style: { color: labelColor || 'inherit' },
		}
	);

	const justificationOptions = [
		{
			value: 'left',
			icon: justifyLeft,
			label: __( 'Justify menu left', 'moiraine' ),
		},
		{
			value: 'center',
			icon: justifyCenter,
			label: __( 'Justify menu center', 'moiraine' ),
		},
		{
			value: 'right',
			icon: justifyRight,
			label: __( 'Justify menu right', 'moiraine' ),
		},
	];

	const widthOptions = [
		{
			value: 'content',
			icon: alignNone,
			label: sprintf(
				// translators: %s: container size (i.e. 600px etc)
				__( 'Content width (%s wide)', 'moiraine' ),
				layout?.contentSize || '1200px'
			),
		},
		{
			value: 'wide',
			icon: stretchWide,
			label: sprintf(
				// translators: %s: container size (i.e. 600px etc)
				__( 'Wide width (%s wide)', 'moiraine' ),
				layout?.wideSize || '1600px'
			),
		},
		{
			value: 'full',
			icon: stretchFullWidth,
			label: __( 'Full width', 'moiraine' ),
		},
	];

	return(
		<>
		<InspectorControls group="settings">
				<PanelBody
					className="menu-designer__settings-panel"
					title={ __( 'Settings', 'moiraine' ) }
					initialOpen={true}
				>
					<TextControl
						label={ __( 'Label', 'moiraine' ) }
						type="text"
						value={ label }
						onChange={ ( value ) =>
							setAttributes( { label: value } )
						}
						autoComplete="off"
					/>
					<TextControl
						label={ __( 'Description', 'moiraine' ) }
						type="text"
						value={ description }
						onChange={ ( value ) =>
							setAttributes( { description: value } )
						}
						help={ __( 'Optional description for accessibility', 'moiraine' ) }
						autoComplete="off"
					/>
					 <ColorPalette
                        label={ __( 'Label Color', 'moiraine' ) }
                        value={ labelColor }
                        onChange={ ( colorValue ) => setAttributes( { labelColor: colorValue } ) }
                        clearable={ true }
                    />
					<ComboboxControl
						label={ __( 'Menu Template', 'moiraine' ) }
						value={ menuSlug }
						options={ menuOptions }
						onChange={ ( value ) =>
							setAttributes( { menuSlug: value } )
						}
						help={
							hasMenus &&
							createInterpolateElement(
								__(
									'Create and modify menu templates in the <a>Site Editor</a>.',
									'moiraine'
								),
								{
									a: (
										<a
											href={ menuTemplateUrl }
											target="_blank"
											rel="noreferrer"
										/>
									),
								}
							)
						}
					/>
				</PanelBody>
				<PanelBody
					className="menu-designer__layout-panel"
					title={ __( 'Layout', 'moiraine' ) }
					initialOpen={ true }
				>
					<HStack alignment="top" justify="space-between">
						<ToggleGroupControl
							className="block-editor-hooks__flex-layout-justification-controls"
							label={ __( 'Justification', 'moiraine' ) }
							value={ justifyMenu }
							onChange={ ( justificationValue ) => {
								setAttributes( {
									justifyMenu: justificationValue,
								} );
							} }
							isDeselectable={ true }
						>
							{ justificationOptions.map(
								( { value, icon, label: iconLabel } ) => {
									return (
										<ToggleGroupControlOptionIcon
											key={ value }
											value={ value}
											icon={ icon }
											label={ iconLabel }
										/>
									);
								}
							)}
						</ToggleGroupControl>
						<ToggleGroupControl
							className="block-editor-hooks__flex-layout-justification-controls"
							label={ __( 'Width', 'moiraine' ) }
							value={ width || 'content' }
							onChange={ ( widthValue ) => {
								setAttributes( {
									width: widthValue,
								} );
							} }
							__nextHasNoMarginBottom
						>
							{ widthOptions.map(
								( { value, icon, label: iconLabel } ) => {
									return (
										<ToggleGroupControlOptionIcon
											key={ value }
											value={ value }
											icon={ icon }
											label={ iconLabel }
										/>
									);
								}
							)}
						</ToggleGroupControl>
					</HStack>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps}>
				<button className="wp-block-navigation-item__content wp-block-moiraine-menu-designer__toggle">
					<RichText
						identifier='label'
						className='wp-block-navigation-item__label'
						value={ label }
						onChange={ ( labelValue ) => {
							setAttributes( {
								label: labelValue
							} )
						} }
						placeholder={ __( 'Add label...', 'moiraine' ) }
						allowedFormats={ [
							'core/bold',
							'core/italic',
							'core/image',
							'core/strikethrough',
						] }
					/>
					<span>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="12"
							height="12"
							viewBox="0 0 12 12"
							fill="currentColor"
							aria-hidden="true"
							focusable="false"
						>
							<path
								d="M1.50002 4L6.00002 8L10.5 4"
								strokeWidth="1.5"
								stroke="currentColor"
								fill="none"
							></path>
						</svg>
					</span>
				</button>
			</div>
		</>
	);
}
