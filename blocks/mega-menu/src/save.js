/**
 * Since this block uses server-side rendering via render.php,
 * the save function returns null to indicate that the block
 * should be rendered on the server.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {null} Returns null for server-side rendering.
 */
export default function save() {
	return null;
}
