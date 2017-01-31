<!DOCTYPE html>
<html lang="en" ng-app="BlurAdmin">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Description" CONTENT="Free angular bootstrap admin dashboard template. World first blur panel dashboard.">
  <meta name="keywords" content="admin,dashboard,template,angular,bootstrap,blur,panel,html,css,javascript">
  <title>Blur Admin</title>

  <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"1c5fdb7217cbc3ed35b3152db1b07393",petok:"54c3a768be2f72f3569e124dc1eaa4c68dab9d35-1485326749-1800",zone:"akveo.com",rocket:"0",apps:{"ga_key":{"ua":"UA-61945105-1","ga_bs":"2"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900&subset=latin,greek,greek-ext,vietnamese,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">

  <link rel="stylesheet" href="styles/vendor-2cae343ef1.css">

  <link rel="stylesheet" href="styles/app-bce21c2366.css">
<script type="text/javascript">
/* <![CDATA[ */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-61945105-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);
/* ]]> */
</script>
</head>
<body>
<div class="body-bg"></div>
<main ng-if="$pageFinishedLoading" ng-class="{ 'menu-collapsed': $baSidebarService.isMenuCollapsed() }">

  <ba-sidebar></ba-sidebar>
  <page-top></page-top>

  <div class="al-main">
    <div class="al-content">
      <content-top></content-top>
      <div ui-view autoscroll="true" autoscroll-body-top></div>
    </div>
  </div>

  <footer class="al-footer clearfix">
    <div class="al-footer-right">Created with <i class="ion-heart"></i></div>
    <div class="al-footer-main clearfix">
      <div class="al-copy">© <a href="http://akveo.com" target="_blank">Akveo</a> 2016</div>
      <ul class="al-share clearfix">
        <li><a href="https://www.facebook.com/akveo" target="_blank"><i class="socicon socicon-facebook"></i></a></li>
        <li><a href="https://twitter.com/akveo_inc" target="_blank"><i class="socicon socicon-twitter"></i></a></li>
        <li><a href="/cdn-cgi/l/email-protection#cdaea2a3b9acaeb98daca6bba8a2e3aea2a0"><i class="socicon socicon-google"></i></a></li>
        <li><a href="https://github.com/akveo" target="_blank"><i class="socicon socicon-github"></i></a></li>
      </ul>
    </div>
  </footer>

  <back-top></back-top>
</main>

<div id="preloader" ng-show="!$pageFinishedLoading">
  <div></div>
</div>

<script src="scripts/vendor-cd23f96791.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>

<script src="scripts/app-5759b218b3.js"></script>

<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>
</html>
