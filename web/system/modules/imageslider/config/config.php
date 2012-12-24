<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Die Kommunikationsabteilung - Fauth und Gundlach GmbH - 2009 
 * @author     Sabri Karadayi <karadayi@kommunikationsabteilung.de> 
 * @package    Imageslider 
 * @license    LGPL 
 * @filesource
 */


/**
 * Backend module
 */
$GLOBALS['BE_MOD']['content']['imageslider'] = array
(
	'tables'     => array('tl_imageslider', 'tl_imageslider_elements'),
	'icon'       => 'system/modules/imageslider/html/icon.png',
	'stylesheet' => 'system/modules/imageslider/html/style.css'
);

/**
 * Frontend module
 */
array_insert($GLOBALS['FE_MOD']['miscellaneous'], 0, array
(
	'imageslider' => 'ModuleImageslider')
);

/**
 * Content Element
 */
$GLOBALS['TL_CTE']['images']['imageslider'] = 'ContentImageslider';

?>