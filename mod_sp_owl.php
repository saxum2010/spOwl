<?php
/**
* @title		SP owl
* @website		http://www.joomshaper.com
* @copyright	Copyright (C) 2010 - 2014 JoomShaper.com. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
$document 			= JFactory::getDocument();
$uniqid				= $module->id;
$style				= $params->get('custom_css', "");
$styles 			= 'img.owl_gallery {' . $style . '}'; 
$thumbwidth			= $params->get('thumbwidth', "100");
$items				= $params->get('items', "4");
$autoplayTimeout	= $params->get('autoplayTimeout', "5000");
$slideSpeed			= $params->get('slideSpeed', "300");
$margin				= $params->get('margin', "0");
$loop				= $params->get('loop', "false");
$nav				= $params->get('nav', "false");
$autoPlay			= $params->get('autoPlay', "false");
$autoWidth			= $params->get('autoWidth', "false");
$colorbox			= $params->get('colorbox', "false");

$document->addStyleSheet(JURI::base(true) . '/modules/mod_sp_owl/scripts/owl2all.css');
$document->addStyleSheet(JURI::base(true) . '/modules/mod_sp_owl/scripts/colorbox.css');
if (JVERSION>3) {
	JHtml::_('jquery.framework');
}
$document->addScript(JURI::base(true) . '/modules/mod_sp_owl/scripts/owl2all.min.js');
$document->addScript(JURI::base(true) . '/modules/mod_sp_owl/scripts/jquery.colorbox-min.js');
$document->addStyleDeclaration( $styles );

require_once (dirname(__FILE__).'/helper.php');
$list = modSPowlHelper::getimgList($params);
require(JModuleHelper::getLayoutPath('mod_sp_owl'));