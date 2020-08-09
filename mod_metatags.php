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

//webutation-site-verification
	$app = JFactory::getApplication();
	$docs = JFactory::getDocument();
	$gconfigs = JFactory::getConfig();
	$docs->setGenerator(null);//remove generator
		$sitename = $gconfigs->get('sitename');
		$titles = htmlspecialchars($docs->getTitle(), ENT_COMPAT, 'UTF-8');
		$site_url = JURI::current();
		$Keyword = htmlspecialchars($gconfigs->get('MetaKeys'), ENT_COMPAT, 'UTF-8');
		$auteur = $params->get('author-userid-website'); //$app->getCfg('MetaAuthor');
		$desciption = htmlspecialchars($docs->getDescription(), ENT_COMPAT, 'UTF-8');
	
		$language  = substr($docs->language, 0, 2); #JFactory::getLanguage()->getTag()
		$site_root = JURI::root();
		$site_base = JURI::base();

		$custom_link_jsonjd_search  = $params->get('jsonjd-search');

		$DJsonLDs   = $params->get('date-jsonld');
		$JsonLD_opens   = $params->get('JsonLD-opens');
		$JsonLD_close   = $params->get('JsonLD-close');

		$robots   = $params->get('robots');
		$CSP   = $params->get('Content-Security-Policy');
		$urlgooglechrome_webapps   = $params->get('urlgooglechrome-webapps');

		$expires   = $params->get('expires');
		$logoimg   = $site_root.$params->get('logoimg');
		$twittercards   = $params->get('choosetwitter_card');
		
		$backlinks_frontendh   = $params->get('backlinks-frontendh');
		$backlinks_frontendf   = $params->get('backlinks-frontendf');
		$jsonLD_type   = $params->get('json-ld-TYPE');
		$jsonLD_custom   = $params->get('schema_custom');

		$Twittersite   = $params->get('websitetwitter');
		$TwitterCreate   = $params->get('creatortwitter');
		$TwitterDev  = $params->get('developpertwitter');
		$show_mobile   = $params->get('show_mobile');

		/**For twitter Cards META-Tags**/
		$tw_pix = $site_root.$params->get('photo_twitter');
		$tw_movie = $site_root.$params->get('video_twitter');
		$tw_pix_width = $params->get('photo_twitterwidth');
		$tw_pix_height = $params->get('photo_twitterheight');
		$tw_movie_width = $params->get('video_twitterwidth');
		$tw_movie_height = $params->get('video_twitterheight');
		$langsapps = $params->get('langsapps');
		
		$Twprd_label1 = $params->get('twitterprod_label1');
		$Twprd_label2 = $params->get('twitterprod_label2');
		$Twprd_data1 = $params->get('twitterprod_data1');
		$Twprd_data2 = $params->get('twitterprod_data2');
		
		$Tw_imgsrc0 = $site_root.$params->get('twitterimg_src0');
		$Tw_imgsrc1 = $site_root.$params->get('twitterimg_src1');
		$Tw_imgsrc2 = $site_root.$params->get('twitterimg_src2');
		$Tw_imgsrc3 = $site_root.$params->get('twitterimg_src3');
		$shareaholicsite_idAPI = $params->get('shareaholicsite_idAPI');
		
		/**Facebook/ogp**/
		$ogtypes = $params->get('ogtype');
		$ogpimages = $site_root.$params->get('ogpgraph_img');
		$fbapp_idopgme = $params->get('fbappid');
		$fbapp_admin = $params->get('fbadmins');
		$fb_profils = $params->get('fbprofils_id');
		/**autres**/
		$gganalystic_UA = $params->get('analyse-UA');
		
		/**json LD ordganisation***/
		$JsonLD_organisation_legalName = $params->get('JsonLD-organisation-legalName');	
		$JsonLD_organisation_founder = $params->get('JsonLD-organisation-founder');	
		$JsonLD_organisation_foundingDate = $params->get('JsonLD-organisation-foundingDate');	
		$JsonLD_organisation_medialogo = $site_root.$params->get('JsonLD-organisation-medialogo');
		$JsonLD_organisation_fax = $params->get('JsonLD-organisation-fax');	
		$JsonLD_organisation_taxID = $params->get('JsonLD-organisation-taxID');	
		$JsonLD_organisation_vatID = $params->get('JsonLD-organisation-vatID');	
		$JsonLD_organisation_telephone = $params->get('JsonLD-organisation-telephone');	
		$JsonLD_organisation_minValue = $params->get('JsonLD-organisation-minValue');	
		$JsonLD_organisation_maxValue = $params->get('JsonLD-organisation-maxValue');		
		/**json LD person***/
		$JsonLD_person_honorificPrefix = $params->get('JsonLD-person-honorificPrefix');	
		$JsonLD_person_name = $params->get('JsonLD-person-name');	
		$JsonLD_person_mediaimage = $site_root.$params->get('JsonLD-person-mediaimage');	
		$JsonLD_person_birthDate = $params->get('JsonLD-person-birthDate');	
		$JsonLD_person_faxNumber = $params->get('JsonLD-person-faxNumber');	
		$JsonLD_person_telephone = $params->get('JsonLD-person-telephone');	
		$JsonLD_person_gender = $params->get('JsonLD-person-gender');	
		/*Twitter theme*/
		$Twitterwidgettheme  = $params->get('twitterwidgettheme');
		$TwitterWthemelink  = $params->get('twitterwidgetthemelink');
		$TwitterWthemeborder  = $params->get('twitterwidgetthemeborder');
		$Twitterautoload  = $params->get('witterautoload');
		$Twitterdnt  = $params->get('witterdnt');
		$Twittercsp  = $params->get('wittercsp');
		
		/*Business*/
		$gtagsmanager  = $params->get('gtagsmanager');
		
		
require JModuleHelper::getLayoutPath('mod_metatags', $params->get('layout', 'default'));
