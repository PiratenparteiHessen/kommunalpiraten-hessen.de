<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
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
 * @copyright  Leo Feyer 2005-2011
 * @author     Leo Feyer <http://www.contao.org>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


/**
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['userlist']       = '{title_legend},name,type;{config_legend},kopo_imageSize,kopo_imageMargin,kopo_imageFloating,kopo_imageFullsize,jumpTo;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['userreader']     = '{title_legend},name,type;{config_legend},kopo_imageSize,kopo_imageMargin,kopo_imageFloating,kopo_imageFullsize,jumpTo;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['fractionlist']   = '{title_legend},name,type;{config_legend},kopo_imageSize,kopo_imageMargin,kopo_imageFloating,kopo_imageFullsize,jumpTo;{expert_legend:hide},cssID,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['fractionreader'] = '{title_legend},name,type;{config_legend},kopo_imageSize,kopo_imageMargin,kopo_imageFloating,kopo_imageFullsize,jumpTo;{expert_legend:hide},cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['kopo_imageSize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['size'],
    'exclude'                 => true,
    'inputType'               => 'imageSize',
    'options'                 => array('crop', 'proportional', 'box'),
    'reference'               => &$GLOBALS['TL_LANG']['MSC'],
    'eval'                    => array('rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_module']['fields']['kopo_imageMargin'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['imagemargin'],
    'exclude'                 => true,
    'inputType'               => 'trbl',
    'options'                 => array('px', '%', 'em', 'pt', 'pc', 'in', 'cm', 'mm'),
    'eval'                    => array('includeBlankOption'=>true, 'tl_class'=>'w50')
);


$GLOBALS['TL_DCA']['tl_module']['fields']['kopo_imageFloating'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['floating'],
    'exclude'                 => true,
    'inputType'               => 'radioTable',
    'options'                 => array('above', 'left', 'right', 'below'),
    'eval'                    => array('cols'=>4, 'tl_class'=>'w50'),
    'reference'               => &$GLOBALS['TL_LANG']['MSC']
);

$GLOBALS['TL_DCA']['tl_module']['fields']['kopo_imageFullsize'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['kopo_imageFullsize'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50')
);
/**
 * Add fields to tl_module
 */

?>