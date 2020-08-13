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


		
if(!empty($robots)){
	$docs->setMetaData('robots', $robots);
	$docs->setMetaData('googlebot', $robots.', max-snippet:-1, max-image-preview:large, max-video-preview:-1');
	$docs->setMetaData('bingbot', $robots.', max-snippet:-1, max-image-preview:large, max-video-preview:-1');
}	
/***************Twitter***********************/
if(!empty($twitter_user)){
	$docs->setMetaData('twitter:site', '@'.$twitter_user);
	$docs->setMetaData('twitter:card', $twitter_card);
	$docs->setMetaData('twitter:title', $sitename.' - '.$title);
	$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
	$docs->setMetaData('twitter:image:src', $logo);
	$docs->setMetaData('twitter:description', $desciption);
} else {
	$docs->setMetaData('twitter:site', '@'.$auteur);
	$docs->setMetaData('twitter:card', $twitter_card);
	$docs->setMetaData('twitter:title', $sitename.' - '.$title);
	$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
	$docs->setMetaData('twitter:image:src', $logo);
	$docs->setMetaData('twitter:description', $desciption);
}

/***************Facebook***********************/
#setMetaData($name, $content, $attribute = 'name')

$docs->setMetaData('og:site_name', $, 'property');
$docs->setMetaData('og:url', $, 'property');
$docs->setMetaData('og:title', $, 'property');
$docs->setMetaData('og:type', 'website', 'property');
$docs->setMetaData('og:description', $, 'property');
$docs->setMetaData('og:image', $, 'property');
<meta property="" content="<?php echo htmlentities($sites['name']); ?>" />
<meta property="" content="<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>" />
<meta property="" content="<?php echo htmlentities($title); ?>" />
<meta property="" content="" />
<meta property="" content="<?php echo htmlentities($description); ?>" />
<meta property="" content="<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>" />

 <meta content="<?php echo $Languages_translate.'_'.$phone_langs; ?>" property="og:locale" />
<?php 
if(!empty($social['facebook']['admins'])){
	 echo '<meta content="'.$social['facebook']['admins'].'" property="og:admins"/>
	<meta content="'.$social['facebook']['admins'].'" property="fb:admins"/>';
}


if(!empty($social['facebook']['profile-id'])){
	 echo '<meta content="'.$social['facebook']['profile-id'].'" property="og:profile_id"/>
	<meta content="'.$social['facebook']['profile-id'].'" property="fb:profile_id"/>';
}

if(!empty($social['facebook']['app-id'])){
	 echo '<meta content="'.$social['facebook']['app-id'].'" property="og:app_id"/>
	 <meta content="'.$social['facebook']['app-id'].'" property="fb:app_id"/>';
}


















#######################################################################################
		
/*********************[ META-TAGS SEO BASIC/ADVANCE ]************************/
if(!empty($shareaholicsite_analytics)){ 
	$docs->addCustomTag(  '<!-- BEGIN SHAREAHOLIC CODE -->
<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
<meta name="shareaholic:site_id" content="'.$seo['shareaholic']['key'].'" />
<meta name="shareaholic:title" content="'.$titles.'" />
<meta name="shareaholic:site_name" content="'.$sitename.' - '.$titles.'" />
<meta name="shareaholic:image" content="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs.'" />
<meta name="shareaholic:keywords" content="'.$Keyword.'" />
<meta name="shareaholic:language" content="'.$language.'" />
<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
<!-- END SHAREAHOLIC CODE -->');
}

/*********************[ FACEBOOK/OPENGRAPH OGP.ME ]*******************$logo_tld*****/
		/**Namespace URI: http://ogp.me/ns/website#**/
		$docs->addCustomTag( '<meta property="og:title" content="'.$sitename.'">
			<meta property="og:type" content="'.$ogtypes.'">
			<meta property="og:url" content="'.JURI::current().'">
			<meta property="og:image" content="'.$ogpimages.'">
			<meta property="og:locale" content="'.$language.'">
			<meta property="og:description" content="'.$desciption.'">
			<meta property="og:site_name" content="'.$sitename.' '.$titles.'">
			<meta property="og:admins" content="'.$fbapp_admin.'">
			<meta property="og:app_id" content="'.$fbapp_idopgme.'">
			<meta property="og:profile_id" content="'.$fb_profils.'">
			<meta property="fb:admins" content="'.$fbapp_admin.'">
			<meta property="fb:app_id" content="'.$fbapp_idopgme.'">' );
	

/*********************[ AUTRES/LINK ]************************/


if(!empty($fbapp_admin)){
	 $docs->addCustomTag( '<meta content="'.$fbapp_admin.'" property="og:admins"/>
	<meta content="'.$fbapp_admin.'" property="fb:admins"/>');
}


if(!empty($fb_profils)){
	 $docs->addCustomTag( '<meta content="'.$fb_profils.'" property="og:profile_id"/>
	<meta content="'.$fb_profils.'" property="fb:profile_id"/>');
}

if(!empty($fbapp_idopgme)){
	 $docs->addCustomTag( '<meta content="'.$fbapp_idopgme.'" property="og:app_id"/>
	 <meta content="'.$fbapp_idopgme.'" property="fb:app_id"/>');
}


/*********************[ AUTRES analystic ]************************/

if(!empty($gganalystic_UA)){ 
	$docs->addCustomTag('
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id='.$seo['google']['analystics'].'"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag(\'js\', new Date());

		  gtag(\'config\', \''.$gganalystic_UA.'\');
		</script>'); 
}


/*********************[ AUTRES (Front-End Output Show) ]************************/
if(!empty($backlinks_frontendh)){ $docs->addCustomTag($backlinks_frontendh);}

if(!empty($backlinks_frontendf)){ echo $backlinks_frontendf; }

/************** [ Mesure d'audiance ]************************/
if(!empty($gtagsmanager)){
	$docs->addCustomTag('<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
	new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
	\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,\'script\',\'dataLayer\',\''.$gtagsmanager.'\');</script>
	<!-- End Google Tag Manager -->');
}




/*********************[ Marketing ]************************/























/*********************[ Chatbot ]************************/




















?>
