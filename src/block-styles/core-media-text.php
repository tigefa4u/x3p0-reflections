<?php
/**
 * Registers media & text block styles.
 *
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright 2022 Justin Tadlock
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://github.com/x3p0-dev/x3p0-profile
 */

register_block_style( 'core/media-text', [
	'name' => 'full-height',
	'label' => __( 'Full Height', 'x3p0-profile' )
] );