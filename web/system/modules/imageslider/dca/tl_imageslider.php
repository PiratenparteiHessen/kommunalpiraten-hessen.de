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
 * Table tl_imageslider 
 */
$GLOBALS['TL_DCA']['tl_imageslider'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_imageslider_elements'),
		'switchToEdit'                => true,
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;search,limit'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s',
			'label_callback'	      => array('tl_imageslider', 'createLabel')
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
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider']['edit'],
				'href'                => 'table=tl_imageslider_elements',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_imageslider']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'__selector__'	=>	array('controls', 'effects_extended'),
		'default'       => '{title_legend},title,imageslider_size;
							{rotation_legend},rotation_sequence,rotation_interval;
							{effects_legend},effect_type,effect_duration,effects_extended;
							{controls_legend:hide},controls;
							{template_legend:hide},template_css,template_js;
							'
	),

	// Subpalettes
	'subpalettes' => array (
		'controls'				=>	'controls_autoplay,controls_type,controls_button_play,controls_button_stop,controls_button_previous,controls_button_next',
		'effects_extended'		=>	'effect_transition,effect_ease',
	),

	// Fields
	'fields' => array
	(
	
	//-- Title, Slidesize
		
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
		'imageslider_size' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['imageslider_size'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true)
		),
	
	//-- Rotation		
    
		'rotation_sequence' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['rotation_sequence'],
			'default'                 => '1',
			'inputType'               => 'radio',
			'options'                 => array('1', '2'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_imageslider']['sequence'],
			'eval'                    => array('tl_class'=>'w50')
		),
      	'rotation_interval' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['rotation_interval'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'w50')
		),
			
	//-- Effects
	
      	'effect_type' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_type'],
			'inputType'               => 'checkbox',
			'options'                 => array('top','right','bottom','left','alpha'),
			'eval'                    => array('mandatory'=>true,'multiple'=>true, 'tl_class'=>'clr')
		),
        
        'effect_duration' => array
        (
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_duration'],
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'mandatory'=>true,'nospace'=>true)
        ),	
	    
	    'effect_transition' => array
	    (
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_transition'],
			'inputType'               => 'select',
			'options'                 => array('Quad', 'Cubic', 'Quart', 'Quint', 'Sine', 'Expo', 'Circ', 'Bounce', 'Back', 'Elastic'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_transition'],
			'eval'                    => array('tl_class'=>'w50')
	    ),        
		
	//-- Effects
	
		'effects_extended' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_imageslider']['effects_extended'],
			'exclude'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('submitOnChange'=>true)
		),
			
			'effect_ease' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_ease'],
				'default'                 => '1',
				'inputType'               => 'radio',
				'options'                 => array('easeIn', 'easeOut', 'easeInOut'),
				'reference'               => &$GLOBALS['TL_LANG']['tl_imageslider']['effect_ease'],
				'eval'                    => array('tl_class'=>'w50')
			),
			
	//-- Controls
	
		'controls' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_imageslider']['controls'],
			'exclude'			=> true,
			'inputType'			=> 'checkbox',
			'eval'				=> array('submitOnChange'=>true)
		),
			'controls_autoplay' => array
			(
				'label'				=> &$GLOBALS['TL_LANG']['tl_imageslider']['controls_autoplay'],
				'exclude'			=> true,
				'inputType'			=> 'checkbox',
				'eval'              => array('tl_class'=>'clr')
			),

	      	'controls_type' => array
			(
				'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_type'],
				'default'                 => '1',
				'inputType'               => 'radio',
				'options'                 => array('1', '2'),
				'reference'               => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_type_ref'],
				'eval'              => array('tl_class'=>'clr')
			),

	//-- Control Labels
			
		'controls_button_play' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_play'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),

		'controls_button_stop' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_stop'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),

		'controls_button_previous' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_previous'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),
		
		'controls_button_next' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_imageslider']['controls_button_next'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('maxlength'=>255, 'tl_class'=>'w50')
		),	
		
	//-- templates
		
		'template_css' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_imageslider']['template_css'],
			'default'           => 'imageslider_css',
			'exclude'           => true,
			'inputType'         => 'select',
			'options'           => $this->getTemplateGroup('imageslider_css'),
			'eval'              => array('tl_class'=>'w50')
		),
		
		'template_js' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_imageslider']['template_js'],
			'default'           => 'imageslider_js',
			'exclude'           => true,
			'inputType'         => 'select',
			'options'           => $this->getTemplateGroup('imageslider_js'),
			'eval'              => array('tl_class'=>'w50')
		),					
					
	)
);


/**
 * Class tl_imageslider
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  Die Kommunikationsabteilung - Fauth und Gundlach GmbH - 2009 
 * @author     Sabri Karadayi 
 * @package    Controller
 */
class tl_imageslider extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

/*----- label_callback  -----------------------------------------------------------------*/

	/**
	 * List a particular record
	 * @param array
	 * @return string
	 */
	
	public function createLabel($arrRow, $strLabel)
	{
		$objElements = $this->Database->prepare("SELECT * FROM tl_imageslider_elements WHERE pid=? ORDER by sorting ASC")
					   ->execute($arrRow['id']);
					   
					   
		if ($objElements->numRows > 0)
		{
			while ($objElements->next())
			{
				if (strncmp($objElements->src, '.', 1) === 0)
				{
					continue;
				}
	
				// Directory
				if (is_dir(TL_ROOT . '/' . $objElements->src))
				{
					$subfiles = scan(TL_ROOT . '/' . $objElements->src);
					foreach ($subfiles as $subfile)
					{
						if (strncmp($subfile, '.', 1) === 0 || is_dir(TL_ROOT . '/' . $objElements->src . '/' . $subfile))
						{
							continue;
						}
		
						$objFile = new File($objElements->src . '/' . $subfile);
						if ($objFile->isGdImage)
						{
							$arrElements[$x]['src'] = $this->getImage($objElements->src . '/' . $subfile, 100, 50);
							$x++;
						}
					}
					continue;
				}
		
				// File
				if (is_file(TL_ROOT . '/' . $objElements->src))
				{
					$objFile = new File($objElements->src);
					if ($objFile->isGdImage)
					{
						$arrElements[$x]['src'] = $this->getImage($objElements->src, 100, 50);
						$x++;
					}
				}
	
			}			   
			
			foreach ($arrElements as $element)
			{
				$OutputImages .= '<img src="' . $element['src'] . '" alt="' . $element['alt'] . '" />';
			}
		}
		else
		{
			$OutputImages = $GLOBALS['TL_LANG']['tl_imageslider']['misc_noimages'];
		}
					   
		return '<div class="labelbox">
		<div class="heading">' . $arrRow['title'] . ' (' . count($arrElements) . ' ' . $GLOBALS['TL_LANG']['tl_imageslider']['misc_images'] . ')</div>
		<div class="limit_height' . (!$GLOBALS['TL_CONFIG']['doNotCollapse'] ? ' h64' : '') . ' block">
			' . $OutputImages . '
		</div>
		</div>';
	}
	
}

?>