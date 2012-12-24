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
$GLOBALS['TL_LANG']['tl_imageslider_elements']['alt']   			= array('Alternativer Text', 'Eine barrierefreie Webseite sollte immer einen alternativen Text für Bilder mit einer kurzen Beschreibung deren Inhalts enthalten.');

$GLOBALS['TL_LANG']['tl_imageslider_elements']['src']     			= array('Bildauswahl', 'Sie können ein Bild oder einen Ordner auswählen.');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['img']     			= array('Bildgr&ouml;&szlig;e anpassen', 'Breite und H&ouml;he k&ouml;nnen ver&auml;ndert werden');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['img_size']  		= array('Bildbreite und Bildh&ouml;he', 'Geben Sie die Bildbreite und/oder die Bildh&ouml;he in Pixel ein.');

$GLOBALS['TL_LANG']['tl_imageslider_elements']['url']      			= array('Rotation verlinken', 'Einen Link hinzufügen');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_link']  		= array('Link-Adresse', 'Eine eigene Link-Adresse überschreibt den Lightbox-Link, so dass das Bild nicht mehr in der Großansicht dargestellt werden kann.');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_title']  		= array('Titel', 'Wird beim Mouseover auf dem Link angezeigt');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_window']  		= array('Neues Fenster', 'Der Link wird XHTML-konform mittels Javascript im neuen Fenster ge&ouml;ffnet');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_fullsize']     	= array('Großansicht', 'Einen Lightbox-Link zur Großansicht des Bildes hinzufügen.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['title_legend']  = 'Titel';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['src_legend']    = 'Bildauswahl';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_legend']    = 'Verlinkung';


/**
 * Label
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['label_file'] = 'Datei';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['label_folder'] = 'Verzeichnis';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['new']    = array('Neues Element', 'Eine neues Element anlegen');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['edit']   = array('Element editieren', 'Element ID %s editieren');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['copy']   = array('Element kopieren', 'Element ID %s kopieren');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['delete'] = array('Element l&ouml;schen', 'Element ID %s l&ouml;schen');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['show']   = array('Element Details', 'Zeige Details des Element ID %s');

?>