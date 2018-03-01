<?php
/**
 * Extensions For Grifus WordPress plugin.
 *
 * @author    Josantonius <hello@josantonius.com>
 * @package   josantonius/extensions-for-grifus
 * @copyright 2017 - 2018 (c) Josantonius - Extensions For Grifus
 * @license   GPL-2.0+
 * @link      https://github.com/josantonius/extensions-for-grifus.git
 * @since     1.0.0
 */

use Eliasis\Framework\App;

$public_url = App::PUBLIC_URL();

return [

	'url' => [

		'js'    => $public_url . 'js/',
		'css'   => $public_url . 'css/',
		'icons' => $public_url . 'images/icons/',
	],
];
