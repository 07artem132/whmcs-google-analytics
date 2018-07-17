<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.07.2018
 * Time: 17:07
 */

use  WHMCS\Module\Addon\GoogleAnalytics\ConfigController;

add_hook( 'ClientAreaFooterOutput', 1, function ( $vars ) {
	$Config = new ConfigController();

	$return = '<!-- Global site tag (gtag.js) - Google Analytics -->';
	$return .= '<script async src="https://www.googletagmanager.com/gtag/js?id=' . $Config['id'] . '"></script>';
	$return .= '<script>';
	$return .= '  window.dataLayer = window.dataLayer || [];';
	$return .= '  function gtag(){dataLayer.push(arguments);}';
	$return .= '  gtag(\'js\', new Date());';
	$return .= '  gtag(\'config\', \'' . $Config['id'] . '\');';
	$return .= '</script>';
	$return .= '<!-- /Global site tag (gtag.js) - Google Analytics -->';

	return $return;
} );