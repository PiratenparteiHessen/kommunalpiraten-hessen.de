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
 * @package    News
 * @license    LGPL
 * @filesource
 */


/**
 * Back end modules
 */
$GLOBALS['BE_MOD']['kopo'] = array(
    'kopoParlamente' => array
    (
        'tables'     => array('tl_kopopi_parlamente'),
        'icon'       => 'system/modules/acquistoShop/html/icons/cog.png',
    ),
    'kopoFraktionen' => array
    (
        'tables'     => array('tl_kopopi_fraktionen', 'tl_kopopi_fraktionen_mitglieder'),
        'icon'       => 'system/modules/acquistoShop/html/icons/cog.png',
    ),
    'kopoAntraege' => array
    (
        'tables'     => array('tl_kopopi_antraege'),
        'icon'       => 'system/modules/acquistoShop/html/icons/cog.png',
    ),               
);


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
	'user' => array
	(
		'userlist'       => 'ModuleUserList',
		'userreader'     => 'ModuleUserReader',
		'fractionlist'   => 'ModuleFractionList',
		'fractionreader' => 'ModuleFractionReader',
		'openquestions'  => 'ModuleOpenQuestions',
        'mypetition'     => 'ModuleMyPetition',
	)
));

$GLOBALS['BE_MOD']['accounts']['member']['tables'][] = 'tl_member_questions';
/**
 * Cron jobs
 */


/**
 * Register hook to add news items to the indexer
 */


/**
 * Add permissions
 */

?>