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
 * Table tl_imageslider_elements 
 */
$GLOBALS['TL_DCA']['tl_imageslider_elements'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ptable'                      => 'tl_imageslider',
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 4,
			'flag'                    => 11,
			'fields'                  => array('sorting'),
			'headerFields'            => array('title','imageslider_size','rotation_interval', 'rotation_sequence', 'effect_duration','controls'),
			'panelLayout'             => 'filter;search,limit',
			'child_record_callback'   => array('tl_imageslider_elements', 'listElements')
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'cut' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['cut'],
				'href'                => 'act=paste&amp;mode=cut',
				'icon'                => 'cut.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'	=>	array('img', 'url'),
		'default'       => '{title_legend},alt;{src_legend},src,img;{url_legend},url,'
										 
	),

	// Subpalettes
	'subpalettes' => array (
		'img'			=>	'img_size',
		'url'			=>	'url_link,url_title,url_window,url_fullsize',
	),
	// Fields
	'fields' => array
	(
	
	//-- Alt
		'alt' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['alt'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255)
			/*
			'save_callback' => array
			(
				array('tl_imageslider_elements', 'generateAlt')
			)*/
		),


	//-- Image Settings
		'src' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['src'],
			'exclude'                 => true,
			'inputType'               => 'fileTree',
			'eval'                    => array('mandatory'=>true, 'files'=>true, 'fieldType'=>'radio')
		),
        
		'img' => array
		(
			'label'					=>	&$GLOBALS['TL_LANG']['tl_imageslider_elements']['img'],
			'exclude'				=>	true,
			'inputType'				=>	'checkbox',
			'eval'					=>	array('submitOnChange'=>true)
		),

			'img_size' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['img_size'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array('multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true)
			),

	//-- Link
		'url' => array(
			'label'				=>	&$GLOBALS['TL_LANG']['tl_imageslider_elements']['url'],
			'exclude'			=>	true,
			'inputType'			=>	'checkbox',
			'eval'				=>	array('submitOnChange'=>true)
			),
			
			'url_link' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_link'],
				'exclude'                 => true,
				'search'                  => true,
				'inputType'               => 'text',
				'eval'                    => array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
				'wizard' => array
				(
					array('tl_imageslider_elements', 'pagePicker')
				)
			),
			'url_title' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_title'],
				'exclude'                 => true,
				'inputType'               => 'text',
				'eval'                    => array('maxlength'=>255)
			),
			'url_window' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_window'],
				'exclude'                 => true,
				'inputType'				  => 'checkbox',

			),
			'url_fullsize' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider_elements']['url_fullsize'],
				'exclude'                 => true,
				'inputType'               => 'checkbox',
			)


	) //-- End field configuration
);


/**
 * Class tl_imageslider_elements
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Die Kommunikationsabteilung - Fauth und Gundlach GmbH - 2009 
 * @author     Sabri Karadayi <karadayi@kommunikationsabteilung.de> 
 * @package    Imageslider 
 */
class tl_imageslider_elements extends Backend
{
	
	/**
	 * Autogenerate alt Tag
	 * @param mixed
	 * @param object
	 * @return string
	 
	public function generateAlt($varValue, DataContainer $dc)
	{
		// Generate alias if there is none
		if (!strlen($varValue))
		{
			$objTitle = $this->Database->prepare("SELECT alt FROM tl_imageslider_elements WHERE pid=? ORDER by sorting ASC")
									   ->limit(1)
									   ->execute($dc->id);

			$varValue = standardize($objTitle->title);
		}

		$objAlias = $this->Database->prepare("SELECT id FROM tl_article WHERE id=? OR alias=?")
								   ->execute($dc->id, $varValue);
		return $varValue;
	}
	*/
	
	/**
	 * Return the link picker wizard
	 * @param object
	 * @return string
	 */
	public function pagePicker(DataContainer $dc)
	{
		$strField = 'ctrl_' . $dc->field . (($this->Input->get('act') == 'editAll') ? '_' . $dc->id : '');
		return ' ' . $this->generateImage('pickpage.gif', $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top; cursor:pointer;" onclick="Backend.pickPage(\'' . $strField . '\')"');
	}	
	
	
	/**
	 * List Imageslider Elements
	 * @param array
	 * @return string
	 */
	public function listElements($arrRow)
	{

	// Directory
	if (is_dir(TL_ROOT . '/' . $arrRow['src']))
	{
		$subfiles = scan(TL_ROOT . '/' . $arrRow['src']);

		$type = $GLOBALS['TL_LANG']['tl_imageslider_elements']['label_folder'];
		$typeCSS = 'folder';
		$display = '<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">';
		
		foreach ($subfiles as $subfile)
		{
			if (strncmp($subfile, '.', 1) === 0 || is_dir(TL_ROOT . '/' . $arrRow['src'] . '/' . $subfile))
			{
				continue;
			}

			$objFile = new File($arrRow['src'] . '/' . $subfile);

			if ($objFile->isGdImage)
			{
				$thumbnail = $this->getImage($arrRow['src'] . '/' . $subfile, 170, 70);
				$arrImageSize 	= getimagesize(TL_ROOT . '/' . $arrRow['src'] . '/' . $subfile);
				
				$element .= '<div class="img_container">
								<img title="' . $arrRow['alt'] . '" alt="' . $arrRow['alt'] . '" src="' . $thumbnail . '" />
							</div>	
							<div class="info_container">
								<p class="description">' . $arrRow['alt'] . '</p>
								<p class="filename">' . $arrRow['src'] . '/' . $subfile . '</p>
								<p class="imgsize">' . $arrImageSize[0] . 'x'. $arrImageSize[1] .' px</p>
								<p class="title">' . $arrRow['url_link'] . ' ' . $arrRow['url_title'] . '</p>
							</div>
							<div style="clear:left"></div>
							';
	
			}
				
		}

	}
	else
	{
		$thumbnail = $this->getImage($arrRow['src'], 170, 70);
		$arrImageSize = getimagesize(TL_ROOT . '/' . $arrRow['src']);
		
		$type = $GLOBALS['TL_LANG']['tl_imageslider_elements']['label_file'];
		$typeCSS = 'file';
		$display = '<div class="content">';
		
		$element = '<div class="img_container">
						<img title="' . $arrRow['alt'] . '" alt="' . $arrRow['alt'] . '" src="' . $thumbnail . '" />
					</div>		
					<div class="info_container">
						<p class="description">' . $arrRow['alt'] . '</p>
						<p class="filename">' . $arrRow['src'] . '</p>
						<p class="imgsize">' . $arrImageSize[0] . 'x'. $arrImageSize[1] .' px</p>
						<p class="title">' . $arrRow['url_link'] . ' ' . $arrRow['url_title'] . '</p>
					</div>
					<div style="clear:left"></div>
					';
	}
	
		
		return '
<div class="be_imageslider_elements">
' . $display . '
<p class="'. $typeCSS . '">'. $type . ' </p>
'. $element . '
</div></div>' . "\n";
	}
}
?>