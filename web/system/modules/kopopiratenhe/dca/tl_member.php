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
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_member
 */
$GLOBALS['TL_DCA']['tl_member']['fields']['avatar'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['avatar'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => false,
	'flag'                    => 1,
	'inputType'               => 'fileTree',
	'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true,'extensions'=>'jpg,png,gif')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['parlamente'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['parlamente'],
	'exclude'                 => true,
	'search'                  => true,
	'sorting'                 => false,
	'flag'                    => 1,
    'foreignKey'              => 'tl_kopopi_parlamente.title',
	'inputType'               => 'select',
	'eval'                    => array('multiple' => true, 'mandatory'=>false, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'login')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['about'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['about'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'textarea',
	'eval'                    => array('mandatory'=>false, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['twitter'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['twitter'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'mandatory'=>false, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_member']['fields']['facebook'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['facebook'],
	'exclude'                 => true,
	'search'                  => true,
	'inputType'               => 'text',
	'eval'                    => array('rgxp'=>'url', 'mandatory'=>false, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50')
);


$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('{login_legend}', '{kopo},about,parlamente,avatar;{login_legend}', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);
$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace('email,website,', 'email,website,twitter,facebook,', $GLOBALS['TL_DCA']['tl_member']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_member']['list']['operations']['questions'] = array
(
	'label'               => &$GLOBALS['TL_LANG']['tl_member']['edit'],
	'href'                => 'table=tl_member_questions',
	'icon'                => 'system/modules/kopopiratenhe/html/silkicons/comment.png'
);

$GLOBALS['TL_DCA']['tl_member']['config']['ctable'] = array('tl_member_questions');

?>