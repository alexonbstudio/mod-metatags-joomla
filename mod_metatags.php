<?php
/**
 * @package	Module for Joomla!
 * @subpackage  mod_metatags
 * @version	4.3.1
 * @author	Alexon Balangue
 * @copyright	(C) 2012-2020 Alexonbstudio. All rights reserved.
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
#use Joomla\Component\Finder\Administrator\Indexer\Query;
#use Joomla\Utilities\ArrayHelper;

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

# Get params XML
$robots = $params->get('robots');
$logo = $params->get('logo');

#Twitter Card
$twitter_card = $params->get('twitter-card');
$twitter_user = $params->get('twitter-user');

# Open Graph
$fb_admins = $params->get('fb-admins');
$fb_app_id = $params->get('fb-app-id');
$fb_profils_id = $params->get('fb-profils-id');
$og_type = $params->get('og-type');

# Analystic & Marketing 
$g_tagmanger = $params->get('g-tagmanger');
$g_analytics = $params->get('g-analytics');
$g_adsense = $params->get('g-adsense');
$yx_analytics = $params->get('yx-analytics');
$m_33across = $params->get('m-33across');
$m_awin = $params->get('m-awin');
$m_uiz = $params->get('m-uiz');
$m_quantcast = $params->get('m-quantcast');

# Shares buttin
$s_shareaholic = $params->get('m-shareaholic');
$s_addthis = $params->get('s-addthis');

# Add more script
$head_script_frontend = $params->get('head-script-frontend');
$footer_script_frontend = $params->get('footer-script-frontend');

# Chatbot
$crisp = $params->get('crisp');
$tidio = $params->get('tidio');

# Json-LD
$jld_type = $params->get('jld-type');

require ModuleHelper::getLayoutPath('mod_metatags', $params->get('layout', 'default'));
