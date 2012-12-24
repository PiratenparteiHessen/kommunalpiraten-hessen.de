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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_imageslider']['title']				= array('Name of the imagerotation', 'Only viewable in the backend');
$GLOBALS['TL_LANG']['tl_imageslider']['imageslider_size']	= array('Slidewidth and -height', 'Slide will be shown in this region');

$GLOBALS['TL_LANG']['tl_imageslider']['rotation_interval']  = array('Rotation interval', 'Value in milliseconds.');
$GLOBALS['TL_LANG']['tl_imageslider']['rotation_sequence']  = array('Order', 'Define the order of the images');

$GLOBALS['TL_LANG']['tl_imageslider']['effect_type']     	= array('Effect type', 'Multiple effects are possible');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_duration'] 	= array('Effect duration', 'Value in milliseconds.');

$GLOBALS['TL_LANG']['tl_imageslider']['effects_extended']   = array('Extended Effects', 'Based on the mootools Fx.Transitions library');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_transition']  = array('Effect transition', 'see http://demos111.mootools.net/Fx.Transitions for examples');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_ease']  		= array('Ease', 'For a natural tweening');

$GLOBALS['TL_LANG']['tl_imageslider']['controls']     		= array('Activate controls', 'Gives the user the ability to control the slides');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type']     	= array('Button type', 'Define the type of controls');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_autoplay']  = array('Deactivate Autoplay', 'Deactivates the autoplay so the user has to use to buttons to slide the images.');

$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_play']     	= array('Play', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_stop']     	= array('Stop', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_previous']  	= array('Previous', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_next']  		= array('Next', '');

/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type_ref'][1]		= 'A - play stop';
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type_ref'][2]		= 'B - prev next';

$GLOBALS['TL_LANG']['tl_imageslider']['sequence'][1]	= 'normal';
$GLOBALS['TL_LANG']['tl_imageslider']['sequence'][2]	= 'random';

/**
 * misc
 */
$GLOBALS['TL_LANG']['tl_imageslider']['misc_images'] = 'images';
$GLOBALS['TL_LANG']['tl_imageslider']['no_images'] = 'There are no images selected yet.';

$GLOBALS['TL_LANG']['tl_imageslider']['button_previous'] = '&lt;&lt; Previous';
$GLOBALS['TL_LANG']['tl_imageslider']['button_next'] = 'Next &gt;&gt;';

$GLOBALS['TL_LANG']['tl_imageslider']['button_play'] = 'Play &gt;';
$GLOBALS['TL_LANG']['tl_imageslider']['button_stop'] = 'Stop';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_imageslider']['new']    = array('New imagerotation', 'Create a new imagerotation');
$GLOBALS['TL_LANG']['tl_imageslider']['edit']   = array('Edit imagerotation', 'Edit imagerotation ID %s');
$GLOBALS['TL_LANG']['tl_imageslider']['copy']   = array('Copy imagerotation', 'Copy imagerotation ID %s');
$GLOBALS['TL_LANG']['tl_imageslider']['delete'] = array('Delete imagerotation', 'Delete imagerotation ID %s');
$GLOBALS['TL_LANG']['tl_imageslider']['show']   = array('Details imagerotation', 'Show deatils for imagerotation ID %s');

?>