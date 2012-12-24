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
$GLOBALS['TL_LANG']['tl_imageslider_elements']['alt']   			= array('Alternate text', 'An accessible website should always provide an alternate text for images with a short description of their content.');

$GLOBALS['TL_LANG']['tl_imageslider_elements']['src']     			= array('Imageselection', 'You can select a file or a folder');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['img']     			= array('Change imagesize', 'Width and height can be adjusted');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['img_size']  		= array('Imagewidth and imageheight', 'Set width or/and height in pixels');

$GLOBALS['TL_LANG']['tl_imageslider_elements']['url']      			= array('Link rotation', 'Add a link');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_link']  		= array('Link target', 'A custom link target will override the lightbox link, so the image cannot be viewed fullsize anymore.');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_title']  		= array('Title', 'Will be show when the cursor is over the link');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_window']  		= array('New window', 'Link will be opened in a new window using Javascript to create a valid XHTML code');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_fullsize']     	= array('Full-size view', 'Add a lightbox link to view the full-size image.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['title_legend']  = 'Title';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['src_legend']    = 'Images';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_legend']    = 'Link';

/**
 * Label
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['label_file'] = 'File';
$GLOBALS['TL_LANG']['tl_imageslider_elements']['label_folder'] = 'Folder';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_imageslider_elements']['new']    = array('New element', 'Create a new element');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['edit']   = array('Edit element', 'Edit element ID %s');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['copy']   = array('Copy element', 'Copy element ID %s');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['delete'] = array('Delete element', 'Delete element ID %s');
$GLOBALS['TL_LANG']['tl_imageslider_elements']['show']   = array('Details element', 'Show details for element ID %s');

?>