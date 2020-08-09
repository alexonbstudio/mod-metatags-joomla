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
#news solution jSon-ld

/*

    <script type="application/ld+json">

<?php ##########	OWNER	########## ?>
[{
    "@context": "https://schema.org",
	"@type": "WebPage",
	"@id": "#webpage",
	"url": "<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($description); ?>",
    "headline": "<?php echo htmlentities($title); ?>"<?php if(!empty($imgs)){ ?>,
	"inLanguage":"<?php echo $meta_langs; ?>",
    "image": [
      "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>"
     ],<?php } ?>
     "speakable":
     {
      "@type": "SpeakableSpecification",
      "xpath": [
        "/html/head/title",
        "/html/head/meta[@name='description']/@content"
        ]
      },
	"potentialAction":[
		{
			"@type":"ReadAction",
			"target":[
				"<?php echo $protocols.'://'.$domainTLD.'/'.$urls; ?>"
			]
		}
	]
	
},
{
      "@type": "VideoObject",
      "@id": "#video",
      "name": "#alexonbstudio Presentation V2",
      "duration": "P2M",
      "uploadDate": "2020-07-30",
      "datePublished": "2020-08-04",
      "thumbnailUrl": "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$imgs; ?>",
      "description": "<?php echo htmlentities($description); ?>",
      "contentUrl": "<?php echo $protocols.'://'.$general['index']['sitemap']['video']; ?>",
      "embedUrl": "<?php echo $protocols.'://'.$general['index']['sitemap']['video']; ?>",
      "hasPart": [<?php if(!empty($vdos)){ ?>{
        "@type": "Clip",
        "name": "<?php echo htmlentities($general['pages']['full']['header']['counter']['intro']); ?>",
        "url": "<?php echo $protocols.'://'.$vdos; ?>"
      },<?php } ?>
      {
        "@type": "Clip",
        "name": "<?php echo htmlentities($about['index']['title']); ?>",
        "url": "<?php echo $protocols.'://'.$about['index']['sitemap']['video']; ?>"
      },
	  {
        "@type": "Clip",
        "name": "<?php echo htmlentities($general['project']['title']); ?>",
        "url": "<?php echo $protocols.'://'.$general['project']['sitemap']['video']; ?>"
      },
	  {
        "@type": "Clip",
        "name": "<?php echo htmlentities($general['php-website-project-wp']['title']); ?>",
        "url": "<?php echo $protocols.'://'.$general['php-website-project-wp']['sitemap']['video']; ?>"
      }]
	
}, 
{
	"@type":"WebSite",
	"@id":"#website",
	"url":"<?php echo $protocols.'://'.$domainTLD.'/'; ?>",
	"name":"<?php echo htmlentities($sites['name']); ?>",
	"description":"<?php echo htmlentities($general['index']['description']); ?>",
	"inLanguage":"<?php echo $meta_langs; ?>"<?php /*,
	"potentialAction": {
		"@type": "SearchAction",
		"target": "<?php echo $protocols.'://pool.'.$domainTLD.'pages/search_results?q={search_term}'; ?>",
		"query-input": "required name=search_term"
	} / ?>
},
{
	"@type":"ImageObject",
	"@id":"#primaryimage",
	"inLanguage":"<?php echo $meta_langs; ?>",
	"url":"<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs; ?>",
	"width":718,
	"height":403,
	"caption":"<?php echo $title; ?>"
}<?php if(!empty($private['name'])){ ?>,
  {
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "<?php echo htmlentities($private['name']); ?>"<?php if(!empty($private['mobile']['number'])){ ?>,
  "telephone": "<?php echo $private['mobile']['code']; ?><?php echo $private['mobile']['number']; ?>"<?php } ?>,
  "url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($private['name'])){ ?>,
  "sameAs":[
		<?php if(!empty($social['linkedin']['name'])){ echo '"'.$social['linkedin']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['name'])){ echo '"'.$social['viadeo']['url'].'",'; } ?>
		"<?php echo htmlentities($private['name']);  ?>",
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>
<?php ##########	BUSINESS PAGE | You need Absolute CHANGE for Adapt your Business Local categories	########## ?>
<?php if(!empty($business['local']['name'])){ ?>,
{
	"@context": "https://schema.org",
	"@type": "Organization",
	"url": "<?php echo $protocols.'://'.$domainTLD; ?>"<?php if(!empty($business['local']['phone']['number'])){ ?>,
	"telephone": "<?php echo $business['local']['phone']['code']; ?><?php echo $business['local']['phone']['number']; ?>"<?php } ?>,
	"logo": "<?php echo $protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$images['manager']['logo']['normal']; ?>",
	"name": "<?php echo htmlentities($business['local']['name']); ?>",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "<?php echo htmlentities($business['local']['address']); ?>",
		"addressLocality": "<?php echo htmlentities($business['local']['city']); ?>",
		<?php if(!empty($business['local']['region'])){ ?>"addressRegion": "<?php echo htmlentities($business['local']['region']).','; ?>"<?php } ?>
		"postalCode": "<?php echo $business['local']['postal']; ?>",
		"addressCountry": "<?php echo htmlentities($business['local']['contry']); ?>"
	},
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": <?php echo $business['local']['geo']['latitude']; ?>,
		"longitude": <?php echo $business['local']['geo']['longitude']; ?>
	}<?php if(!empty($private['name'])){ ?>,
	"sameAs":[
		<?php if(!empty($social['twitter']['name'])){ echo '"'.$social['twitter']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['facebook']['url'].'",'; } ?>
		<?php if(!empty($social['facebook']['name'])){ echo '"'.$social['instagram']['url'].'",'; } ?> 
		<?php if(!empty($social['linkedin']['team']['name'])){ echo '"'.$social['linkedin']['team']['url'].'",'; } ?>
		<?php if(!empty($social['youtube']['name'])){ echo '"'.$social['youtube']['url'].'",'; } ?>
		<?php if(!empty($social['twitch']['name'])){ echo '"'.$social['twitch']['url'].'",'; } ?>
		<?php if(!empty($social['github']['name'])){ echo '"'.$social['github']['url'].'",'; } ?>
		<?php if(!empty($social['discord']['name'])){ echo '"'.$social['discord']['url'].'",'; } ?>
		<?php if(!empty($social['viadeo']['team']['name'])){ echo '"'.$social['viadeo']['team']['url'].'",'; } ?>
		<?php if(!empty($social['mixcloud']['name'])){ echo '"'.$social['mixcloud']['url'].'",'; } ?>
		<?php if(!empty($social['dailymotion']['name'])){ echo '"'.$social['dailymotion']['url'].'",'; } ?>
		<?php if(!empty($private['name'])){ echo '"'.htmlentities($private['name']).'",'; } ?>
		"<?php echo htmlentities($sites['name']); ?>"
	]<?php } ?>
}<?php } ?>]

    </script>
*/

#old solution
/*********************[ JSON LD ]************************/
/*
if($jsonLD_type == 'json-ld-person'){
$docs->addScriptDeclaration('{
		"@context": "http://schema.org",
		"@type": "Person",
		"honorificPrefix": "'.$JsonLD_person_honorificPrefix.'",
		"name": "'.$JsonLD_person_name.'",
		"birthDate": "'.$JsonLD_person_birthDate.'",
		"faxNumber": "'.$JsonLD_person_faxNumber.'",
		"gender": "'.$JsonLD_person_gender.'",
		"telephone": "'.$JsonLD_person_telephone.'",
		"description": "'.$desciption.'",
		"image": "'.$JsonLD_person_mediaimage.'",
		"url": "'.JURI::base().'",
		"address": {
			"@type": "PostalAddress",
			"streetAddress": "'.$CoB_StreetAddress.'",
			"addressLocality": "'.$CoB_City.'",
			"postalCode": "'.$CoB_Zipcode.'",
			"addressContry": "'.$CoB_Country.'"
		}
	}', 'application/ld+json');
}

if ($DJsonLDs == '1'){ $DJson = '"Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '2'){ $DJson = '"Monday"'; }
elseif ($DJsonLDs == '3'){ $DJson = '"Monday", "Tuesday"'; }
elseif ($DJsonLDs == '4'){ $DJson = '"Monday", "Tuesday", "Wednesday"'; }
elseif ($DJsonLDs == '5'){ $DJson = '"Monday", "Tuesday", "Wednesday", "Friday"'; }
elseif ($DJsonLDs == '6'){ $DJson = '"Monday", "Tuesday", "Wednesday", "Friday", "Saturday"'; }
elseif ($DJsonLDs == '7'){ $DJson = '"Monday", "Tuesday", "Wednesday", "Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '8'){ $DJson = '"Tuesday"'; }
elseif ($DJsonLDs == '9'){ $DJson = '"Tuesday", "Wednesday"'; }
elseif ($DJsonLDs == '10'){ $DJson = '"Tuesday", "Wednesday", "Thursday"'; }
elseif ($DJsonLDs == '11'){ $DJson = '"Tuesday", "Wednesday", "Thursday", "Friday"'; }
elseif ($DJsonLDs == '12'){ $DJson = '"Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"'; }
elseif ($DJsonLDs == '13'){ $DJson = '"Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '14'){ $DJson = '"Wednesday"'; }
elseif ($DJsonLDs == '15'){ $DJson = '"Wednesday", "Thursday"'; }
elseif ($DJsonLDs == '16'){ $DJson = '"Wednesday", "Thursday", "Friday"'; }
elseif ($DJsonLDs == '17'){ $DJson = '"Wednesday", "Thursday", "Friday", "Saturday"'; }
elseif ($DJsonLDs == '18'){ $DJson = '"Wednesday", "Thursday", "Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '19'){ $DJson = '"Thursday"'; }
elseif ($DJsonLDs == '20'){ $DJson = '"Thursday", "Friday"'; }
elseif ($DJsonLDs == '21'){ $DJson = '"Thursday", "Friday", "Saturday"'; }
elseif ($DJsonLDs == '22'){ $DJson = '"Thursday", "Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '23'){ $DJson = '"Friday"'; }
elseif ($DJsonLDs == '24'){ $DJson = '"Friday", "Saturday"'; }
elseif ($DJsonLDs == '25'){ $DJson = '"Friday", "Saturday", "Sunday"'; }
elseif ($DJsonLDs == '26'){ $DJson = '"Saturday"'; }
elseif ($DJsonLDs == '27'){ $DJson = '"Saturday", "Sunday"'; }
elseif ($DJsonLDs == '28'){ $DJson = '"Sunday"'; }


		if(!empty($JsonLD_opens)){$JopenLD = '"opens": "'.$JsonLD_opens.'",'; } 
		if(!empty($JsonLD_close)){$JcloseLD = '"close": "'.$JsonLD_close.'"'; }

	
if($jsonLD_type == 'json-ld-organisation'){

$docs->addScriptDeclaration('{
	"@context": "http://schema.org",
	"@type": "Organization",
	"brand": "'.$sitename.'",
	"legalName": "'.$JsonLD_organisation_legalName.'",
	"founder": "'.$JsonLD_organisation_founder.'",
	"foundingDate": "'.$JsonLD_organisation_foundingDate.'",
	"logo": "'.$JsonLD_organisation_medialogo.'",
	"faxNumber": "'.$JsonLD_organisation_fax.'",
	"taxID": "'.$JsonLD_organisation_taxID.'",
	"vatID": "'.$JsonLD_organisation_vatID.'",
	"telephone": "'.$JsonLD_organisation_telephone.'",
	"description": "'.$desciption.'",
	"image": "'.$JsonLD_organisation_medialogo.'",
	"url": "'.JURI::base().'",
	"address": { 
		"@type": "PostalAddress",
		"streetAddress": "'.$CoB_StreetAddress.'",
		"addressLocality": "'.$CoB_City.'",
		"postalCode": "'.$CoB_Zipcode.'",
		"addressContry": "'.$CoB_Country.'" 
	},
	"numberOfEmployees": { 
		"@type": "QuantitativeValue",
		"minValue": "'.$JsonLD_organisation_minValue.'",
		"maxValue": "'.$JsonLD_organisation_maxValue.'"
	},
	"openingHoursSpecification": [ { 
		"@type": "OpeningHoursSpecification",
		"dayOfWeek": [
			'.$DJson.'
		],
		'.$JopenLD.'
		'.$JcloseLD.' 
	}],
	"contactPoint": [{ 
		"@type": "ContactPoint", 
		"telephone": "'.$JsonLD_organisation_telephone.'",
		"contactType": "customer service",
		"contactOption": "TollFree",
		"areaServed": "'.$language.'" 
	}]
}', 'application/ld+json');}
if($jsonLD_type == 'json-ld-custom'){
	$docs->addScriptDeclaration($jsonLD_custom, 'application/ld+json');
}
	$docs->addScriptDeclaration('{"@context": "http://schema.org","@type": "WebSite", "url": "'.$site_base.'", "potentialAction": {"@type": "SearchAction","target": "'.JUri::root(true).'/index.php?option=com_finder&view=search&lang='.$language.'?q={search_term_string}","query-input": "required name=search_term_string"}}', 'application/ld+json');
*/
/*********************[ META-TAGS SEO BASIC/ADVANCE ]************************/
if(!empty($shareaholicsite_analytics)){ 
	$docs->addCustomTag(  '<!-- BEGIN SHAREAHOLIC CODE -->
<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />
<meta name="shareaholic:site_id" content="'.$seo['shareaholic']['key'].'" />
<meta name="shareaholic:title" content="'.$titles.'" />
<meta name="shareaholic:site_name" content="'.$sitename.' '.$titles.'" />
<meta name="shareaholic:image" content="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs.'" />
<meta name="shareaholic:keywords" content="'.$Keyword.'" />
<meta name="shareaholic:language" content="'.$language.'" />
<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
<!-- END SHAREAHOLIC CODE -->');
}
		
		if(!empty($robots)){
			$docs->setMetaData('robots', $robots);
			$docs->setMetaData('googlebot', $robots.', max-snippet:-1, max-image-preview:large, max-video-preview:-1');
			$docs->setMetaData('bingbot', $robots.', max-snippet:-1, max-image-preview:large, max-video-preview:-1');
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

/*********************[ META-TAGS TWITTER CARD ]************************/
/*
if(!empty($social['twitter']['name'])){
	echo '
	<meta name="twitter:site" content="@'.$social['twitter']['name'].'">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="'.htmlentities($title).'">
<meta name="twitter:domain" content="'.$domainTLD.'">
<meta name="twitter:image:src" content="'.$protocols.'://'.$CDNdomainTLD.'/'.$images['dir'].'/'.$imgs.'">
<meta name="twitter:description" content="'.htmlentities($description).'">';
}
*/
		if(!empty($twittercards)){
			$docs->setMetaData('twitter:card', $twittercards);
		}
		
		if($twittercards == 'summary'){
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);

		}
		if($twittercards == 'summary_large_image'){
	
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename.' '.$titles);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);

		
		}
		if($twittercards == 'product'){
			
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename.' '.$titles);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:data1', $Twprd_data1);
		$docs->setMetaData('twitter:label1', $Twprd_label1);
		$docs->setMetaData('twitter:data2', $Twprd_data2);
		$docs->setMetaData('twitter:label2', $Twprd_label2);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		}
		if($twittercards == 'photo'){
			
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename.' '.$titles);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:image:src:width', $tw_pix_width);
		$docs->setMetaData('twitter:image:src:height', $tw_pix_height);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		}
		
		if($twittercards == 'gallery'){
			
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
	
		$docs->setMetaData('twitter:card', $twittercards);
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename.' '.$titles);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image0:src', $Tw_imgsrc0);
		$docs->setMetaData('twitter:image1:src', $Tw_imgsrc1);
		$docs->setMetaData('twitter:image2:src', $Tw_imgsrc2);
		$docs->setMetaData('twitter:image3:src', $Tw_imgsrc3);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		}
		if($twittercards == 'player'){
			
		$docs->setMetaData('twitter:widgets:theme', $Twitterwidgettheme);	
		$docs->setMetaData('twitter:widgets:link-color', $TwitterWthemelink);	
		$docs->setMetaData('twitter:widgets:border-color', $TwitterWthemeborder);	
		$docs->setMetaData('twitter:widgets:autoload', $Twitterautoload);	
		$docs->setMetaData('twitter:dnt', $Twitterdnt);	
		$docs->setMetaData('twitter:widgets:csp', $Twittercsp);	
		
		$docs->setMetaData('twitter:card', $twittercards);	
		$docs->setMetaData('twitter:site', '@'.$Twittersite);
		$docs->setMetaData('twitter:creator', '@'.$TwitterCreate);
		$docs->setMetaData('twitter:title', $sitename);
		$docs->setMetaData('twitter:description', $desciption);
		$docs->setMetaData('twitter:image:src', $tw_pix);
		$docs->setMetaData('twitter:player', $tw_movie);
		$docs->setMetaData('twitter:player:width', $tw_movie_width);
		$docs->setMetaData('witter:player:height', $tw_movie_height);
		$docs->setMetaData('twitter:domain', $_SERVER['SERVER_NAME']);
		
		}

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


if(!empty($opensearch_url)){
	$docs->addCustomTag('<link rel="search" type="application/opensearchdescription+xml" title="'.$sitename.'" href="'.$opensearch_url.'">');
}
if(!empty($sitemap_url)){
	$docs->addCustomTag('<link rel="sitemap" type="application/xml" title="'.$sitename.'" href="'.$sitemap_url.'">');
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
?>
