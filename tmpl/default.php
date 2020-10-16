<?php

/**
 * @package	Module for Joomla!
 * @subpackage  mod_metatags
 * @version	4.3.2
 * @author	Alexon Balangue
 * @copyright	(C) 2012-2020 Alexonbstudio. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
 
defined('_JEXEC') or die;

#use Joomla\CMS\Router\Route;
#use Joomla\Module\Finder\Site\Helper\FinderHelper;

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
	$docs->setMetaData('twitter:domain', preg_replace('/www./i', '', $base));
	$docs->setMetaData('twitter:image:src', $logo);
	$docs->setMetaData('twitter:description', $desciption);
}


/***************Facebook & Open Graph***********************/
$docs->setMetaData('og:site_name', $sitename, 'property');
$docs->setMetaData('og:url', $current, 'property');
$docs->setMetaData('og:title', $sitename.' - '.$title, 'property');
$docs->setMetaData('og:type', $og_type, 'property');

if($og_type == 'article'){
	
	$mod_metatags_arrays_articles = explode(' ',str_replace(',', '', $Keyword));
	foreach ($mod_metatags_arrays_articles as $ArrMTTagsArtcles) { $docs->setMetaData('article:tag', htmlentities($ArrMTTagsArtcles), 'property'); }

}
$docs->setMetaData('og:description', $desciption, 'property');
$docs->setMetaData('og:image', $logo, 'property');
$docs->setMetaData('og:locale', $language, 'property');

if(!empty($fb_admins)){
	$docs->setMetaData('og:admins', $fb_admins, 'property');
	$docs->setMetaData('fb:admins', $fb_admins, 'property');
}

if(!empty($fb_profils_id)){
	$docs->setMetaData('og:profile_id', $fb_profils_id, 'property');
	$docs->setMetaData('fb:profile_id', $fb_profils_id, 'property');
}

if(!empty($fb_app_id)){
	$docs->setMetaData('og:app_id', $fb_app_id, 'property');
	$docs->setMetaData('fb:app_id', $fb_app_id, 'property');
}

/*************** Analystic & Marketing***********************/
if(!empty($g_analytics)){
	$docs->addCustomTag('<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id='.$g_analytics.'"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag(\'js\', new Date());

		  gtag(\'config\', \''.$g_analytics.'\');
		</script>');
}

if(!empty($g_tagmanger)){
	$docs->addCustomTag('<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
	new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
	\'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,\'script\',\'dataLayer\',\''.$g_tagmanger.'\');</script>
	<!-- End Google Tag Manager -->');
	echo '<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id='.$g_tagmanger.'"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->';
}

if(!empty($yx_analytics)){
	$docs->addCustomTag('<!-- Yandex.Metrika counter --> 
	<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym"); ym('.$yx_analytics.', "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/'.$yx_analytics.'" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->');
}

if(!empty($g_adsense)){
	$docs->addCustomTag('<script data-ad-client="'.$g_adsense.'" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>');
}

if(!empty($m_33across)){
	$docs->addCustomTag('<!-- Begin 33Across RevCTRL InView -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$m_33across.'\');
		Tynt.cmd=Tynt.cmd||[];Tynt.cmd.push(function(){
		Tynt.ads.display(\'\',\'\',\'inview\');});
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/rciv.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across RevCTRL InView -->
	<!-- Begin 33Across SiteCTRL -->
		<script>
		var Tynt=Tynt||[];Tynt.push(\''.$m_33across.'\');
		(function(){var h,s=document.createElement(\'script\');
		s.src=\'https://cdn.tynt.com/ti.js\';
		h=document.getElementsByTagName(\'script\')[0];
		h.parentNode.insertBefore(s,h);})();
		</script>
	<!-- End 33Across SiteCTRL -->');
}

if(!empty($m_awin)){
	$docs->addCustomTag('<script src="https://www.dwin2.com/pub.'.$m_awin.'.min.js"></script>');
}

if(!empty($m_uiz)){
	$docs->addCustomTag( '<script type="text/javascript">
		var app_url = \'https://uiz.io/\';
		var app_api_token = \''.$m_uiz.'\';
		var app_advert = 1;
		var app_exclude_domains = ["*.'.preg_replace('/www./i', '', $_SERVER['SERVER_NAME']).'"];
	</script>
	<script src=\'//uiz.io/js/full-page-script.js\'></script>');
}

if(!empty($m_quantcast)){
	$docs->addCustomTag('<!-- Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->
<script type="text/javascript" async=true>
(function() {
  var host = window.location.hostname;
  var element = document.createElement(\'script\');
  var firstScript = document.getElementsByTagName(\'script\')[0];
  var milliseconds = new Date().getTime();
  var url = \'https://quantcast.mgr.consensu.org\'
    .concat(\'/choice/\', \''.$m_quantcast.'\', \'/\', host, \'/choice.js\')
    .concat(\'?timestamp=\', milliseconds);
  var uspTries = 0;
  var uspTriesLimit = 3;
  element.async = true;
  element.type = \'text/javascript\';
  element.src = url;

  firstScript.parentNode.insertBefore(element, firstScript);

  function makeStub() {
    var TCF_LOCATOR_NAME = \'__tcfapiLocator\';
    var queue = [];
    var win = window;
    var cmpFrame;

    function addFrame() {
      var doc = win.document;
      var otherCMP = !!(win.frames[TCF_LOCATOR_NAME]);

      if (!otherCMP) {
        if (doc.body) {
          var iframe = doc.createElement(\'iframe\');

          iframe.style.cssText = \'display:none\';
          iframe.name = TCF_LOCATOR_NAME;
          doc.body.appendChild(iframe);
        } else {
          setTimeout(addFrame, 5);
        }
      }
      return !otherCMP;
    }

    function tcfAPIHandler() {
      var gdprApplies;
      var args = arguments;

      if (!args.length) {
        return queue;
      } else if (args[0] === \'setGdprApplies\') {
        if (
          args.length > 3 &&
          args[2] === 2 &&
          typeof args[3] === \'boolean\'
        ) {
          gdprApplies = args[3];
          if (typeof args[2] === \'function\') {
            args[2](\'set\', true);
          }
        }
      } else if (args[0] === \'ping\') {
        var retr = {
          gdprApplies: gdprApplies,
          cmpLoaded: false,
          cmpStatus: \'stub\'
        };

        if (typeof args[2] === \'function\') {
          args[2](retr);
        }
      } else {
        queue.push(args);
      }
    }

    function postMessageEventHandler(event) {
      var msgIsString = typeof event.data === \'string\';
      var json = {};

      try {
        if (msgIsString) {
          json = JSON.parse(event.data);
        } else {
          json = event.data;
        }
      } catch (ignore) {}

      var payload = json.__tcfapiCall;

      if (payload) {
        window.__tcfapi(
          payload.command,
          payload.version,
          function(retValue, success) {
            var returnMsg = {
              __tcfapiReturn: {
                returnValue: retValue,
                success: success,
                callId: payload.callId
              }
            };
            if (msgIsString) {
              returnMsg = JSON.stringify(returnMsg);
            }
            event.source.postMessage(returnMsg, \'*\');
          },
          payload.parameter
        );
      }
    }

    while (win) {
      try {
        if (win.frames[TCF_LOCATOR_NAME]) {
          cmpFrame = win;
          break;
        }
      } catch (ignore) {}

      if (win === window.top) {
        break;
      }
      win = win.parent;
    }
    if (!cmpFrame) {
      addFrame();
      win.__tcfapi = tcfAPIHandler;
      win.addEventListener(\'message\', postMessageEventHandler, false);
    }
  };

  if (typeof module !== \'undefined\') {
    module.exports = makeStub;
  } else {
    makeStub();
  }

  var uspStubFunction = function() {
    var arg = arguments;
    if (typeof window.__uspapi !== uspStubFunction) {
      setTimeout(function() {
        if (typeof window.__uspapi !== \'undefined\') {
          window.__uspapi.apply(window.__uspapi, arg);
        }
      }, 500);
    }
  };

  var checkIfUspIsReady = function() {
    uspTries++;
    if (window.__uspapi === uspStubFunction && uspTries < uspTriesLimit) {
      console.warn(\'USP is not accessible\');
    } else {
      clearInterval(uspInterval);
    }
  };

  if (typeof window.__uspapi === \'undefined\') {
    window.__uspapi = uspStubFunction;
    var uspInterval = setInterval(checkIfUspIsReady, 6000);
  }
})();
</script>
<!-- End Quantcast Choice. Consent Manager Tag v2.0 (for TCF 2.0) -->');
}

/*********************[ Shares button ]************************/
if(!empty($s_shareaholic)){
	$docs->addCustomTag('<!-- BEGIN SHAREAHOLIC CODE -->
	<link rel="preload" href="https://cdn.shareaholic.net/assets/pub/shareaholic.js" as="script" />');
	$docs->setMetaData('shareaholic:site_name', $sitename);
	$docs->setMetaData('shareaholic:title', $sitename.' - '.$title);
	$docs->setMetaData('shareaholic:site_id', $s_shareaholic);
	$docs->setMetaData('shareaholic:keywords', htmlentities($Keyword));
	$docs->setMetaData('shareaholic:image', $logo);
	$docs->setMetaData('shareaholic:language', $language);
	$docs->addCustomTag('<script data-cfasync="false" async src="https://cdn.shareaholic.net/assets/pub/shareaholic.js"></script>
	<!-- END SHAREAHOLIC CODE -->');
}

if(!empty($s_addthis)){
	echo '<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid='.$s_addthis.'"></script>';
}

/*********************[ AUTRES (Front-End Output Show) ]************************/
if(!empty($head_script_frontend )){ $docs->addCustomTag($head_script_frontend); }
if(!empty($footer_script_frontend)){ echo $footer_script_frontend; }

/*********************[ Chatbot ]************************/
if(!empty($crisp)){ 
	echo '<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="'.$crisp.'";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>';
}
  
if(!empty($tidio)){ 
	echo '<script src="//code.tidio.co/'.$tidio.'.js" async></script>';
}

/*********************[ Json-LD ]************************/
$jld_socialURLs = explode(' ',str_replace(',', '', $jld_socialURL));
foreach ($jld_socialURLs as $arrayjld_socialURL) { 
		$SameAsSocial = '"'.$arrayjld_socialURL.'", ';
}
	$docs->addCustomTag('<script type="application/ld+json">
	[{
		"@context": "https://schema.org",
		"@type": "WebPage",
		"@id": "#webpage",
		"url": "'.$current.'",
		"name":"'.$sitename.'",
		"description":"'.htmlentities($description).'",
		"headline": "'.htmlentities($title).',
		"inLanguage":"'.$language.'",
		"image": [
		  "'.$logo.'"
		],
		"speakable":
		{
			"@type": "SpeakableSpecification",
			"xpath": [
				"/html/head/title",
				"/html/head/meta[@name=\'description\']/@content"
			]
		},
		"potentialAction":[
			{
				"@type":"ReadAction",
				"target":[
					"'.$current.'"
				]
			}
		]
	},
	{
		"@type":"ImageObject",
		"@id":"#primaryimage",
		"inLanguage":"'.$language.'",
		"url":"'.$current.'",
		"width":718,
		"height":403,
		"caption":"'.$title.'"
	},
	{
		"@type":"WebSite",
		"@id":"#website",
		"url":"'.$current.'",
		"name":"'.$sitename.'",
		"description":"'.htmlentities($description).'",
		"inLanguage":"'.$language.'",
		"potentialAction": {
			"@type": "SearchAction",
			"target": "'.$base.'index.php?option=com_finder&q={search_term}",
			"query-input": "required name=search_term"
		} 
	},	
	{
		"@context": "https://schema.org",
		"@type": "'.$jld_type.'",
		"url": "'.$current.',
		"logo": "'.$logo.'",
		"name": "'.$sitename.'",
		"sameAs":[
			'.$SameAsSocial.'
		]
	}]
	</script>');


?>	