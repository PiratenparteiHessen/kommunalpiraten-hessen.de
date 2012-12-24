<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
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
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Registration
 * @license    LGPL
 * @filesource
 */


/**
 * Class ModulePassword
 *
 * Front end module "lost password".
 * @copyright  Leo Feyer 2005-2012
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Controller
 */
class ModuleMyPetition extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_mypetition';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### MY PETITION ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
        if($this->Input->Post('FORM_SUBMIT') == 'tl_kopopi_antraege') {
        
        }
        
        $objParlamente = $this->Database->prepare("SELECT * FROM tl_kopopi_parlamente ORDER BY title ASC")->execute();
        if (FE_USER_LOGGED_IN) {
            $this->import('FrontendUser', 'User');
            $objParlamente = $this->Database->prepare("SELECT * FROM tl_kopopi_parlamente WHERE id IN(?) ORDER BY title ASC")->execute(implode(",", $this->User->parlamente));
        }    

        while($objParlamente->next()) {
            $arrParlamente[] = (object) $objParlamente->row();
        }
        
        $this->Template->Parlamente = $arrParlamente;
        
	}
}

?>