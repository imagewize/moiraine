/**
 * Moiraine Mega Menu Block registration and editor interface.
 *
 * @package Moiraine
 */

import { registerBlockType } from '@wordpress/blocks';

import './style.scss';
import './view.scss';
import './editor.scss';

import Edit from './edit';
import metadata from './block.json';

registerBlockType(
	metadata.name,
	{
		edit: Edit,
	}
);