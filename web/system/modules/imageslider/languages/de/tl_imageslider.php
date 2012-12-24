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
$GLOBALS['TL_LANG']['tl_imageslider']['title']				= array('Name der Bildrotation', 'Ist nur im Backend sichtbar');
$GLOBALS['TL_LANG']['tl_imageslider']['imageslider_size']	= array('Slidebreite und -h&ouml;he', 'Innerhalb dieser Größe wird der Slide angezeigt');

$GLOBALS['TL_LANG']['tl_imageslider']['rotation_interval']  = array('Einblendungsdauer', 'Angabe in Millisekunden.');
$GLOBALS['TL_LANG']['tl_imageslider']['rotation_sequence']  = array('Reihenfolge', 'Legt die Reihenfolge der Bilder fest');

$GLOBALS['TL_LANG']['tl_imageslider']['effect_type']     	= array('Effekt Art', 'Mehrfachauswahl möglich');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_duration'] 	= array('Effektdauer', 'Angabe in Millisekunden.');

$GLOBALS['TL_LANG']['tl_imageslider']['effects_extended']   = array('Erweiterte Effekt Einstellungen', 'Basierend auf der Mootools Fx.Transitions Library');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_transition']  = array('&Uuml;bergangsart', 'siehe http://demos111.mootools.net/Fx.Transitions f&uuml;r Beispiele');
$GLOBALS['TL_LANG']['tl_imageslider']['effect_ease']  		= array('Ease', 'Damit kann die Bewegung natürlicher dargestellt');

$GLOBALS['TL_LANG']['tl_imageslider']['controls']     		= array('Buttons aktivieren', 'Ermöglicht dem Nutzer die Rotation zu steuern');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type']     	= array('Button Typ', 'Legt den Typ der Buttons fest');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_autoplay']  = array('Autoplay deaktivieren', 'Deaktiviert das automatische Abspielen wenn Buttons vorhanden sind.');

$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_play']     	= array('Abspielen', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_stop']     	= array('Stop', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_previous']  	= array('Zurück', '');
$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_next']  		= array('Vor', '');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_imageslider']['title_legend']     	= 'Titel und Größe';
$GLOBALS['TL_LANG']['tl_imageslider']['rotation_legend']    = 'Rotation';
$GLOBALS['TL_LANG']['tl_imageslider']['effects_legend']     = 'Effekte';
$GLOBALS['TL_LANG']['tl_imageslider']['controls_legend']    = 'Buttons';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type_ref'][1]		= 'A - play stop';
$GLOBALS['TL_LANG']['tl_imageslider']['controls_type_ref'][2]		= 'B - prev next';

$GLOBALS['TL_LANG']['tl_imageslider']['sequence'][1]				= 'hintereinander';
$GLOBALS['TL_LANG']['tl_imageslider']['sequence'][2]				= 'zuf&auml;llig';


/**
 * misc
 */
$GLOBALS['TL_LANG']['tl_imageslider']['misc_images'] = 'Bilder';
$GLOBALS['TL_LANG']['tl_imageslider']['no_images'] = 'Es wurden noch keine Bilder ausgewählt.';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_imageslider']['new']    = array('Neue Bildrotation', 'Eine neue Bildrotation anlegen');
$GLOBALS['TL_LANG']['tl_imageslider']['edit']   = array('Bildrotation editieren', 'Bildrotation ID %s editieren');
$GLOBALS['TL_LANG']['tl_imageslider']['copy']   = array('Bildrotation kopieren', 'Bildrotation ID %s kopieren');
$GLOBALS['TL_LANG']['tl_imageslider']['delete'] = array('Bildrotation l&ouml;schen', 'Bildrotation ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_imageslider']['show']   = array('Bildrotation Details', 'Zeige Details der Bildrotation ID %s');

?>