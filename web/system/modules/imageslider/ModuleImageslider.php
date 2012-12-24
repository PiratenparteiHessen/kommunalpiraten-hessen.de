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
 * Class ModuleImageslider
 *
 */
class ModuleImageslider extends Module
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_imageslider';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### Imageslider Module ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'typolight/main.php?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		
		if (!$this->imageslider)
		{
			return '';
		}
		
		return parent::generate();
	}
	
/**
 * ----- Compile  -----------------------------------------------------------------
 */

	/**
	 * Generate module
	 */
	protected function compile()
	{
		$this->loadLanguageFile('tl_imageslider');
		
		/**
		 * Create Data Arrays
		 */
		$objSettings 	= $this->Database->prepare("SELECT * FROM tl_imageslider WHERE id=?")
						->execute($this->imageslider);
		
		$objElements 	= $this->Database->prepare("SELECT * FROM tl_imageslider_elements WHERE pid=? ORDER by sorting ASC")
					   	->execute($this->imageslider);
		
		/**
		 * Prepare Data
		 */
		$arrImagesliderSize = unserialize($objSettings->imageslider_size);
		
	 /** --------------------------------------------------------------------
	  * Effects
	  * --------------------------------------------------------------------*/
		
		//-- Type
		$arrEffectType 		= unserialize($objSettings->effect_type);
		$EffectType = '';
		
		for ($x = 1; $x <= count($arrEffectType); $x++)
		{
			$EffectType .= "'" . $arrEffectType[$x-1] . "'";
			if ($x != count($arrEffectType)) $EffectType .= ', ';
		} 

		//-- Extended
		if ($objSettings->effects_extended)
		{
			$EffectsExtended = ', transition: Fx.Transitions.' . $objSettings->effect_transition . '.' . $objSettings->effect_ease;
		}
		
		
	 /** --------------------------------------------------------------------
	  * Controls
	  * -------------------------------------------------------------------- */
		
		//-- Autoplay active
 		$autoplay = "V" . $objSettings->id . ".play(true);";
		
		if ($objSettings->controls)
		{
			//-- Buttons
			$control = array();
			
			switch ($objSettings->controls_type)
			{
				case 1:
				$controls =	"$('play" . $objSettings->id . "').addEvent('click',V" . $objSettings->id . ".play.bind(V" . $objSettings->id . ",[false]));
$('stop" . $objSettings->id . "').addEvent('click',V" . $objSettings->id . ".stop.bind(V" . $objSettings->id . "));";
				
				$control['id']['first'] = 'play';
				$control['id']['last'] = 'stop';
				$control['label']['first'] = $objSettings->controls_button_play;
				$control['label']['last'] = $objSettings->controls_button_stop;	 
				
				break;
				
				case 2:
				$controls =	"$('prev" . $objSettings->id . "').addEvent('click',V" . $objSettings->id . ".previous.bind(V" . $objSettings->id . "));
$('next" . $objSettings->id . "').addEvent('click',V" . $objSettings->id . ".next.bind(V" . $objSettings->id . "));";
							 
				$control['id']['first'] = 'prev';
				$control['id']['last'] = 'next';
				$control['label']['first'] = $objSettings->controls_button_previous;
				$control['label']['last'] =	$objSettings->controls_button_next;
				
				break;
			}
			
			//-- Submit to template
			$addControls = true;
			$this->Template->controls = true;
			$this->Template->control = $control;

	}
		
	 /** --------------------------------------------------------------------
	  * Play
	  * -------------------------------------------------------------------- */

		// Play movie automaclly
		if ($objSettings->controls_autoplay && $objSettings->controls)
		{
			// Deactive autoplay
			$play = "";
		}
		else
		{
			// Order of images
			if($objSettings->rotation_sequence == 2)
			{
				$play = "V" . $objSettings->id . ".playRandom();";
			}
			else
			{
				$play = $autoplay;
			}
		}

		
		if($addControls == true)
		{
			$play .= $controls;
		}
		
		
 /** --------------------------------------------------------------------
  * Add CSS and JS to <head>
  * -------------------------------------------------------------------- */

	//-- CSS ----------------------------------------------------- 

	/* Create CSS Template */
	$objTplCSS = new FrontendTemplate($objSettings->template_css);
    
	$objTplCSS->id 					= $objSettings->id;
	$objTplCSS->arrImagesliderSize 	= $arrImagesliderSize;
	$objTplCSS->controls 			= $addControls;
	
	$GLOBALS['TL_HEAD'][] = $objTplCSS->parse();
		


	//-- JS ----------------------------------------------------- 

	/* Create CSS Template */
	$objTplJS = new FrontendTemplate($objSettings->template_js);
    
	$objTplJS->id 					= $objSettings->id;
	$objTplJS->arrImagesliderSize 	= $arrImagesliderSize;
	$objTplJS->EffectType 			= $EffectType;
	$objTplJS->effect_duration 		= $objSettings->effect_duration;
	$objTplJS->EffectsExtended 		= $EffectsExtended;
	$objTplJS->rotation_interval 	= $objSettings->rotation_interval;
	$objTplJS->play		 			= $play;
	
	$GLOBALS['TL_HEAD'][] = $objTplJS->parse();


	 /** --------------------------------------------------------------------
	  * Generate HTML Image Array 
	  * -------------------------------------------------------------------- */
		$x = 0;
		
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
						//-- If image resizing is activated
						if ($objElements->img)
						{
							$arrElementImgSize 	= unserialize($objElements->img_size);
							$arrElements[$x]['src'] = $this->getImage($objElements->src . '/' . $subfile, $arrElementImgSize[0], $arrElementImgSize[1]);
						}
						else
						{
							$arrElements[$x]['src'] = $objElements->src . '/' . $subfile;
						}
						
						//-- Url
						$arrElements[$x]['url'] 		 = $objElements->url;
						
						if ($objElements->url_link)
						{
							$arrElements[$x]['url_link'] 		= ($objElements->url_link);
							$arrElements[$x]['url_title']		= $objElements->url_title;
							$arrElements[$x]['url_window']		= $objElements->url_window;
							
							$arrElements[$x]['url_fullsize'] 	= false;
						}
						elseif ($objElements->url_fullsize)
						{
							$arrElements[$x]['url_link'] 		= $objElements->src . '/' . $subfile;
							$arrElements[$x]['url_title']		= $objElements->url_title;
							$arrElements[$x]['url_fullsize'] 	= true;
						}
						
						$arrElements[$x]['alt'] 		 = $objElements->alt;
						
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
					//-- If image resizing is activated
					if ($objElements->img)
					{
						$arrElementImgSize 	= unserialize($objElements->img_size);
						$arrElements[$x]['src'] = $this->getImage($objElements->src, $arrElementImgSize[0], $arrElementImgSize[1]);
					}
					else
					{
						$arrElements[$x]['src'] = $objElements->src;
					}
					
					//-- Url
					$arrElements[$x]['url'] 		 = $objElements->url;
					
					if ($objElements->url_link)
					{
						$arrElements[$x]['url_link'] 		= ($objElements->url_link);
						$arrElements[$x]['url_title']		= $objElements->url_title;
						$arrElements[$x]['url_window']		= $objElements->url_window;
						
						$arrElements[$x]['url_fullsize'] 	= false;
					}
					elseif ($objElements->url_fullsize)
					{
						$arrElements[$x]['url_link'] 		= $objElements->src;
						$arrElements[$x]['url_title']		= $objElements->url_title;
						$arrElements[$x]['url_fullsize'] 	= true;
					}
				
					$arrElements[$x]['alt'] 		 = $objElements->alt;
					
					$x++;
				}
			}

		}
		
		// Randomly sort array for first image
		if($objSettings->rotation_sequence == 2)
		{
			$arrElements = $this->custom_shuffle($arrElements);
		}

		
	 /** --------------------------------------------------------------------
	  * Generate Output
	  * -------------------------------------------------------------------- */
		$this->Template->id = $objSettings->id;
		$this->Template->elements = $arrElements;
	}


/**
 * ----- Function helper  ------------------------------------------------------
 */

	/**
	 * Return an array whose elements are shuffled in random order.
	 */
	protected function custom_shuffle($my_array = array()) 
	{
	  $copy = array();
	  
	  while (count($my_array)) 
	  {
	  	$element = array_rand($my_array); 
	    $copy[$element] = $my_array[$element]; 
	    unset($my_array[$element]); 
	  }
 
	  return $copy;
	}
	
}