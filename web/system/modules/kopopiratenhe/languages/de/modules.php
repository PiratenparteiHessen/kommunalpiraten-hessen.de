<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2010
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Calendar
 * @license    LGPL
 * @filesource
 */


/**
 * Back end modules
 */
$GLOBALS['TL_LANG']['MOD']['kopo']                            = 'Kommunalpolitik';
$GLOBALS['TL_LANG']['MOD']['kopoParlamente']              = array('Parlamente', 'Hersteller verwalten um diese Produkten zuzuordnen.');
$GLOBALS['TL_LANG']['MOD']['kopoFraktionen']                = array('Fraktionen', 'Produkte f&uuml; acquistoShop verwalten.');
$GLOBALS['TL_LANG']['MOD']['kopoAntraege']                = array('Antr&auml;ge', 'Produkte f&uuml; acquistoShop verwalten.');

/**
 * Front end modules
 */
$GLOBALS['TL_LANG']['FMD']['acquisto']                            = 'acquistoShop';
$GLOBALS['TL_LANG']['FMD']['acquisto_widget']                     = 'acquistoShop SidebarWidgets';

$GLOBALS['TL_LANG']['FMD']['acquistoShop_Produktdetails']         = array('Produktdetails', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Produktliste']           = array('Produktliste', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Suche']                  = array('Suchformular', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Warenkorb']              = array('Warenkorb', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_WarenkorbWidget']        = array('Warenkorb Widget', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Warengruppen']           = array('Warengruppen', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_AGB']                    = array('Allgemeine Gesch&auml;ftsbedingungen', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Suchergebnis']           = array('Suchergebnis', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Breadcrumb']             = array('Breadcrumb', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_TagCloud']               = array('TagCloud', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Versand']                = array('Versand &amp; Zahlung', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Recent']                 = array('Zuletzt angeschaut', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Gutschein']              = array('Gutschein', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Produktfiler']           = array('Produktfilter', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Filterliste']            = array('Filterliste', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Bestelldetails']         = array('Bestelldetails', '');
$GLOBALS['TL_LANG']['FMD']['acquistoShop_Bestellliste']           = array('Bestellliste', '');


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['list_settings']                 = 'Listeneinstellungen';
$GLOBALS['TL_LANG']['tl_module']['deliver']                       = 'Alternative Lieferadresse';
$GLOBALS['TL_LANG']['tl_module']['fields']                        = 'Kundenfelder';
$GLOBALS['TL_LANG']['tl_module']['list_images']                   = 'Bildeinstellungen (Liste)';
$GLOBALS['TL_LANG']['tl_module']['categorie_image']               = 'Bildeinstellungen (Kategorie)';
$GLOBALS['TL_LANG']['tl_module']['contaoShop_jumpTo']             = array('Weiterleitungsziel','');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_imageSrc']           = array('Standardbild','');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_numberOfItems']      = array('Gesamtzahl der Produkte','Hier k&ouml;nnen Sie die Gesamtzahl der Beitr&auml;ge festlegen.');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_imageFullsize']      = array('Gro&szlig;ansicht/Neues Fenster', 'Gro&szlig;ansicht des Bildes in einer Lightbox bzw. den Link in einem neuen Browserfenster &ouml;ffnen.');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_Template']           = array('Template','W&auml;hlen Sie ein Template aus.');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_levelOffset']        = array('Startlevel', '');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_showLevel']          = array('Stoplevel', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_elementsPerRow']   = array('Elemente pro Zeile', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_tags']             = array('Tags', 'Sie m&uuml;ssen die Tags komma getrennt eingeben. Bsp. Tag 1, Tag 2, Tag 3');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_zustand']          = array('Produktzustand', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_hersteller']       = array('Hersteller', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_produkttype']      = array('Produkttyp', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_markedProducts']   = array('Hervorgehobene', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_warengruppe']      = array('Warengruppe', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_listTemplate']     = array('Auflistungstemplate', 'W&auml;hlen Sie das Auflistungstemplate aus.');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_selFields']        = array('Anzeigefelder', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_mandatoryFields']  = array('Pflichtfelder', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_selDeliver']       = array('Anzeigefelder', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_mandatoryDeliver'] = array('Pflichtfelder', '');

$GLOBALS['TL_LANG']['tl_module']['socialmedia']                   = 'SocialMedia';
$GLOBALS['TL_LANG']['tl_module']['contaoShop_socialFacebook']     = array('Facebook Gef&auml;llt mir Button', '');
$GLOBALS['TL_LANG']['tl_module']['contaoShop_socialTwitter']      = array('Tweet This - Button', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_emailTemplate']    = array('E-Mail Template', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_emailTyp']         = array('E-Mail Typ', '');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_AGBFile']          = array('AGB Datei', '');

/**
 * Subplattes Fields
 */
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_allowComments']    = array('Kommentare aktivieren', 'Besuchern das Kommentieren von Nachrichtenbeiträgen erlauben.');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_commentsPerPage']  = array('Kommentare pro Seite', 'Anzahl an Kommentaren pro Seite. Geben Sie 0 ein, um den automatischen Seitenumbruch zu deaktivieren.');
$GLOBALS['TL_LANG']['tl_module']['acquistoShop_commentsNotify']   = array('Benachrichtigung an', 'Bitte legen Sie fest, wer beim Hinzufügen neuer Kommentare benachrichtigt wird.');

?>