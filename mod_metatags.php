<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_metatags
 * @version	4.3
 * @author	AlexonBalangue.me
 * @copyright	(C) 2012-2019 Alexon Balangue. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

#USING
use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\Document;
use Joomla\CMS\Uri\Uri;
use Joomla\CMS\Language;
use Joomla\CMS\User;

#GET LIBS

$apps = Factory::getApplication();
$docs = Factory::getDocument();
$configs = Factory::getConfig();
$langs = Factory::getLanguage();
#$langs = Factory::getLanguage(); #LanguageHelper::exists($lang)
$users = Factory::getUser();
$roots = Uri::root();
$base = Uri::base();
$current = Uri::current();
	
# Get function	
$docs->setGenerator(null);//remove generator ->getGenerator()
$sitename = $configs->get('sitename');
$auteur = $apps->get('MetaAuthor'); 
$title = htmlspecialchars($docs->getTitle(), ENT_COMPAT, 'UTF-8');
$Keyword = htmlspecialchars($configs->get('MetaKeys'), ENT_COMPAT, 'UTF-8');
$desciption = htmlspecialchars($docs->getDescription(), ENT_COMPAT, 'UTF-8');
$language  = $langs->getTag(); #$language_FULL  = $docs->language; 

#More function
$language_DOWN  = substr($language_FULL, 0, 2); 
$language_UP  = substr($language_FULL, 3, 4); 

# Get params XML
$robots   = $params->get('robots');
$logo   = $params->get('logo');
$twitter_card   = $params->get('twitter-card');
$twitter_user   = $params->get('twitter-user');


		
		
require ModuleHelper::getLayoutPath('mod_metatags', $params->get('layout', 'default'));
