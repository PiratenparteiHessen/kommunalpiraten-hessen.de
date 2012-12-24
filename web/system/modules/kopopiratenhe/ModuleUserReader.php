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
class ModuleUserReader extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_userreader';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### USER READER ###';
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
        $objUser = $this->Database->prepare("SELECT * FROM tl_member WHERE id=?;")->execute($this->Input->Get('user'));

        if($this->Input->Post('FORM_SUBMIT') == 'tl_member_questions') {
            $this->Database->prepare("INSERT INTO tl_member_questions (pid, tstamp, name, email, question) VALUES(" . $this->Input->Get('user') . ", " . time() . ", '" . $this->Input->Post('name') . "', '" . $this->Input->Post('email') . "', '" . $this->Input->Post('question') . "')")->execute();

            $objEmail = new Email();
            $objEmail->from = 'kommunalpolitik@piratenpartei-hessen.de';
            $objEmail->fromName = 'KoPoPiratenHE';
            $objEmail->subject = 'Eine neue Frage für Dich!';

            $objEmail->text = 'Ahoi ' . $objUser->firstname . ', auf unserem Portal gibt es eine neue Frage für Dich!';
#            $objEmail->html = $mailTemplate->parse();

            $objEmail->sendTo(array($objUser->email));
        }
       
        $objPage = $this->Database->prepare("SELECT id, alias FROM tl_page WHERE id=?")->limit(1)->execute($this->jumpTo);
        $strUrl  = $this->generateFrontendUrl($objPage->fetchAssoc(), '/fraction/%s');

        $arrUser = $objUser->row();       
        $arrUser['parlamente'] = unserialize($objUser->parlamente);
        
        if(is_array($arrUser['parlamente'])) {
            foreach($arrUser['parlamente'] as $parlamentID) {
                $objParlament = $this->Database->prepare("SELECT id,title FROM tl_kopopi_parlamente WHERE id=?")->execute($parlamentID);
                $arrParlament = $objParlament->row();
                
                $objFraction = $this->Database->prepare("SELECT * FROM tl_kopopi_fraktionen WHERE parlament_id=?")->limit(1)->execute($objParlament->id);
                if($objFraction->id) {
                    $arrParlament['fraktion'] = (object) $objFraction->row();
                    $arrParlament['fraktion']->url = sprintf($strUrl, $objFraction->id);
                }
                
                $arrParlamente[] = (object) $arrParlament;
            }
            
            $arrUser['parlamente'] = $arrParlamente;
            $arrParlamente = null;                
        }

        
        if(!$arrUser['avatar']) {
            $arrUser['avatar'] = 'tl_files/redaktion/mandatstraeger/blank_avatar.png';            
        }                

        $objImage = new stdClass();
        $this->addImageToTemplate($objImage, array (
            'addImage'    => 1,
            'singleSRC'   => $arrUser['avatar'],
            'alt'         => null,
            'size'        => $this->kopo_imageSize,
            'imagemargin' => $this->kopo_imageMargin,
            'imageUrl'    => $Produkt->url,
            'caption'     => null,
            'floating'    => $this->kopo_imageFloating,
            'fullsize'    => null
            )
        );
    
        $objQuestions = $this->Database->prepare("SELECT * FROM tl_member_questions WHERE pid=? ORDER BY tstamp DESC")->execute($this->Input->Get('user'));
        while($objQuestions->next()) {
            $intCounter++;
            $arrQuestion = $objQuestions->row();
            
            $arrQuestion['css'] = 'odd';
            if(($intCounter % 2) == 1) {
                $arrQuestion['css'] = 'even';
            }
            
            $arrQuestions[] = (object) $arrQuestion;
        }
         
        $arrUser['questions'] = $arrQuestions;
        $arrUser['avatar']    = $objImage;
        $arrUser['about']     = nl2br($arrUser['about']);
        
        $this->Template->User = (object) $arrUser; 
	}
}

?>