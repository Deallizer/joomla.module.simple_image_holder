<?php
/**
 * @package     Deallizer.Joomla
 * @subpackage  Modules
 *
 * @author      Pavlo Cherniavskyi
 * @email       ionafan2@deallizer.com
 * @version     0.1.0
 * @copyright   Copyright (C) 2015 http://deallizer.com All rights reserved.
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

$src = $params->get('image');
$altText = $params->get('alt');
$linkCss = $params->get('link-css');
$imgCss = $params->get('img-css');

$item = JFactory::getApplication()->getMenu()->getItem($params->get('menuitem'));
$link = JRoute::_($item->link . "&Itemid=" . $item->id);

require (JModuleHelper::getLayoutPath('mod_deallizer_simple_image_holder'));