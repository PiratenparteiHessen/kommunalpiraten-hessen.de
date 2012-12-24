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
 * Table tl_cds
 */
$GLOBALS['TL_DCA']['tl_kopopi_fraktionen'] = array
(

    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'ctable'                      => array('tl_kopopi_fraktionen_mitglieder'),
        'enableVersioning'            => true,
        'switchToEdit'                => true,
    ),

    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('title'),
            'flag'                    => 1,
            'panelLayout'             => 'search,limit'
        ),
        'label' => array
        (
            'fields'                  => array('title', 'parlament_id:tl_kopopi_parlamente.title'),
            'format'                  => '%s <span style="color:#b3b3b3; padding-left:3px;">[%s]</span>'
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
                'label'               => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['edit'],
                'href'                => 'act=edit',
                'icon'                => 'edit.gif'
            ),
            'member' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['edit'],
                'href'                => 'table=tl_kopopi_fraktionen_mitglieder',
                'icon'                => 'member.gif'
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif'
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),

    // Palettes
    'palettes' => array
    (
        'default'                     => '{allgemein},title,parlament_id;{address},street,postal,city;{contact},phone,fax,email,website,twitter,facebook;{logo},avatar;',
    ),


    // Fields
    'fields' => array
    (
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'parlament_id' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'select',
            'foreignKey'              => 'tl_kopopi_parlamente.title',
            'search'                  => true,
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'street' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255)
        ),
        'postal' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'city' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'phone' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'fax' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'email' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'website' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'twitter' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'facebook' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_shop_mengeneinheit']['title'],
            'inputType'               => 'text',
            'search'                  => true,
            'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50')
        ),
        'avatar' => array
        (
        	'label'                   => &$GLOBALS['TL_LANG']['tl_member']['avatar'],
        	'exclude'                 => true,
        	'search'                  => true,
        	'sorting'                 => false,
        	'flag'                    => 1,
        	'inputType'               => 'fileTree',
        	'eval'                    => array('mandatory'=>false,'fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true,'extensions'=>'jpg,png,gif')
        )        
    )
);

?>