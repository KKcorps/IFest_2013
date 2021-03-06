<?php

session_start();

?>

<!DOCTYPE html>

<html class="not-ie" lang="en-US">



<!--<![endif]-->

<head>

<meta charset="UTF-8" />

<link rel="icon" type="image/ico"  href="favicon.ico">

<!-- <meta name="viewport" content="width=device-width" /> -->

<title>iFest 2013</title>

<script>

function onsignupclick(){

	$('#ifest_register').click();

//$('.colour_link.').attr('who_we_are').trigger('click');

}

</script>

<!--<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="" />-->

<script type="text/javascript">

/* Modernizr 2.6.2 (Custom Build) | MIT & BSD

 * Build: http://modernizr.com/download/#-backgroundsize-opacity-rgba-textshadow-cssanimations-csscolumns-input-inputtypes-svg-printshiv-mq-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load

 */

;window.Modernizr=function(a,b,c){function C(a){j.cssText=a}function D(a,b){return C(n.join(a+";")+(b||""))}function E(a,b){return typeof a===b}function F(a,b){return!!~(""+a).indexOf(b)}function G(a,b){for(var d in a){var e=a[d];if(!F(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function H(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:E(f,"function")?f.bind(d||b):f}return!1}function I(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return E(b,"string")||E(b,"undefined")?G(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),H(e,b,c))}function J(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)u[c[d]]=c[d]in k;return u.list&&(u.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),u}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),t[a[d]]=!!e;return t}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"http://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b).matches;var d;return y("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},A={}.hasOwnProperty,B;!E(A,"undefined")&&!E(A.call,"undefined")?B=function(a,b){return A.call(a,b)}:B=function(a,b){return b in a&&E(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.rgba=function(){return C("background-color:rgba(150,255,150,.5)"),F(j.backgroundColor,"rgba")},s.backgroundsize=function(){return I("backgroundSize")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return D("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return I("animationName")},s.csscolumns=function(){return I("columnCount")},s.svg=function(){return!!b.createElementNS&&!!b.createElementNS(r.svg,"svg").createSVGRect};for(var K in s)B(s,K)&&(x=K.toLowerCase(),e[x]=s[K](),v.push((e[x]?"":"no-")+x));return e.input||J(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)B(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},C(""),i=k=null,e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.mq=z,e.testProp=function(a){return G([a])},e.testAllProps=I,e.testStyles=y,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}function v(a){var b,c=a.getElementsByTagName("*"),d=c.length,e=RegExp("^(?:"+l().join("|")+")$","i"),f=[];while(d--)b=c[d],e.test(b.nodeName)&&f.push(b.applyElement(w(b)));return f}function w(a){var b,c=a.attributes,d=c.length,e=a.ownerDocument.createElement(t+":"+a.nodeName);while(d--)b=c[d],b.specified&&e.setAttribute(b.nodeName,b.nodeValue);return e.style.cssText=a.style.cssText,e}function x(a){var b,c=a.split("{"),d=c.length,e=RegExp("(^|[\\s,>+~])("+l().join("|")+")(?=[[\\s,>+~#.:]|$)","gi"),f="$1"+t+"\\:$2";while(d--)b=c[d]=c[d].split("}"),b[b.length-1]=b[b.length-1].replace(e,f),c[d]=b.join("}");return c.join("{")}function y(a){var b=a.length;while(b--)a[b].removeNode()}function z(a){function g(){clearTimeout(d._removeSheetTimer),b&&b.removeNode(!0),b=null}var b,c,d=m(a),e=a.namespaces,f=a.parentWindow;return!u||a.printShived?a:(typeof e[t]=="undefined"&&e.add(t),f.attachEvent("onbeforeprint",function(){g();var d,e,f,h=a.styleSheets,i=[],j=h.length,l=Array(j);while(j--)l[j]=h[j];while(f=l.pop())if(!f.disabled&&s.test(f.media)){try{d=f.imports,e=d.length}catch(m){e=0}for(j=0;j<e;j++)l.push(d[j]);try{i.push(f.cssText)}catch(m){}}i=x(i.reverse().join("")),c=v(a),b=k(a,i)}),f.attachEvent("onafterprint",function(){y(c),clearTimeout(d._removeSheetTimer),d._removeSheetTimer=setTimeout(g,500)}),a.printShived=!0,a)}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^<|^(?:a|b|button|code|div|fieldset|form|h1|h2|h3|h4|h5|h6|i|iframe|img|input|label|li|link|ol|option|p|param|q|script|select|span|strong|style|table|tbody|td|textarea|tfoot|th|thead|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b);var s=/^$|\b(?:all|print)\b/,t="html5shiv",u=!j&&function(){var c=b.documentElement;return typeof b.namespaces!="undefined"&&typeof b.parentWindow!="undefined"&&typeof c.applyElement!="undefined"&&typeof c.removeNode!="undefined"&&typeof a.attachEvent!="undefined"}();r.type+=" print",r.shivPrint=z,z(b)}(this,document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

</script>
<script>
function success()
{
	$('#success').css({'visibility' : "hidden"});
} 
</script>
<script language="javascript">

<!-- 

var lgth=0;

///////////////////////////////////////////////////////////////////////////////

//  Follow these steps to configure this script 

//      1) Add your messages below (change a1, a2 etc to whatever text you want)

//      2) Change davesitems to reflect the number of messages you have e.g.

//               davesitems=new items(a1,a2,a3,a4,a5);  or whatever

//      3) Place this script in between your head tags

//      4) Add the "onload" command to your body tag 

//      5) Place the text box <form> ....</form> anywhere within the body tags and that's it.

///////////////////////////////////////////////////////////////////////////////





//list news items here (use as many as you need. Use quotes around each one and end each line with a semicolon)

var a1="Registrations will open soon";

var a2="Check out the events page";

var a3="Contact us for any queries";

//var a4="Download Brochure";



//Follow the format below, e.g. the next message would be a4, a5 etc.

davesitems=new items(a1,a2,a3);



// ****  Do not alter below this line *****************************************

var ini=0; var st=0; var x=davesitems[0].length;

function items() {

lgth=items.arguments.length;

for (i=0; i<lgth; i++)

this[i]=items.arguments[i];}

function newsclicker(){

var temp=davesitems[ini].substring(0,st)+"_";

document.davesnewsform.davestextbox.value=temp;

if(st++==x) { 

//Adjust timer for delay between messages

st=0; setTimeout("newsclicker()",1000); ini++;

if(ini==lgth) ini=0; x=davesitems[ini].length; 

} else

//adjust timer for "clicking speed" eg letter,letter,letter....

setTimeout("newsclicker()",20);}

//-->

</script>



<!--<script type="text/javascript" src="use.typekit.net/eyw8pza.js"></script>

<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->

<link rel='stylesheet' href='wp-content/themes/ifest/style.css' type='text/css' media='all' />

<link rel='stylesheet' href='meetcss.css' type='text/css' media='all' />

<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>

<!--<link rel="alternate" type="application/rss+xml" title="Coloured Lines &raquo; Home Comments Feed" href="http://www.colouredlines.com.au/home/feed/" />-->

<script type='text/javascript' src='wp-includes/js/comment-reply.min.js'></script>

<!--<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.colouredlines.com.au/xmlrpc.php?rsd" />

<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.colouredlines.com.au/wp-includes/wlwmanifest.xml" /> 

<link rel='prev' title='Why Choose Us' href='http://www.colouredlines.com.au/why-choose-us/' />

<link rel='next' title='Products' href='http://www.colouredlines.com.au/products/' />-->

<!--<meta name="generator" content="WordPress 3.5.1" />-->

<!--<link rel='canonical' href='www_colouredlines_com_default.html' />-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript" src="jquery/jquery-1.9.1.min.js"></script>

<!--<script type="text/javascript" src="coin-slider/jquery-1.4.2.js"></script>

<script type="text/javascript" src="coin-slider/coin-slider.min.js"></script>

<link rel="stylesheet" href="coin-slider/coin-slider-styles.css" type="text/css" />-->



<script type="text/javascript">

/* Modernizr-based polyfilling */

$(document).ready(function(){

	if ($('html').is('.no-csscolumns'))

	{

		$('head').append(unescape('%3Cscript%20src%3D%22http%3A%2F%2Fwww.colouredlines.com.au%2Fwp-content%2Fthemes%2Fcolouredlines%2Fjs%2Fcss3-multi-column.js%22%20type%3D%22text%2Fjavascript%22%3E%3C%2Fscript%3E'));

	}

	if (Modernizr.mq('only all') == false)

	{

		$('head').append(unescape('%3Cscript%20src%3D%22http%3A%2F%2Fwww.colouredlines.com.au%2Fwp-content%2Fthemes%2Fcolouredlines%2Fjs%2Frespond.min.js%22%20type%3D%22text%2Fjavascript%22%3E%3C%2Fscript%3E'));

	}

	if ($('html').is('.ie7'))

	{

		$('.home-block input[type="search"]').remove();

	}

});

</script>

<script type="text/javascript" src="wp-content/themes/ifest/js/jquery-ui-1.10.2.custom.min.js"></script>

<script src="wp-content/themes/ifest/js/jquery.history.js"></script>



</head>



<body class="home page page-id-16 page-template page-template-page-templatesfront-page-php full-width template-front-page custom-background-empty single-author tk-adelle-sans" onload="newsclicker()">

<script type="text/javascript">

$(document).ready(function() {

	window.ios = navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/);

	

	$('.colours > a > span').each(function() {

		$(this).addClass('colour').css({'background-color': $(this).attr('data-colour')});

	});

	

	var window_height = ($(window).height() > 600) ? $(window).height() : 600;

	

	$('.colours').css({'height': window_height});

	$('.colour').css('height', Math.floor((window_height-60)/6));

	$('.colour').css('margin-bottom', '10px');

	$('.colour').last().css('height', Math.floor(window_height/6) + window_height%6);

	

	$('.circle, .home-block').height($('.colours').height());

	

	$(window).resize(function() {

		var window_height = ($(window).height() > 600) ? $(window).height() : 600;

		

		$('.colour').css('height', Math.floor((window_height-60)/6));

	$('.colour').css('margin-bottom', '10px');

		$('.colour').last().css('height', Math.floor(window_height/6) + window_height%6);

		$('.colours').css({'height': window_height});

		$('.circle, .home-block').height($('.colours').height());

		

		$('.circle.png img').height(window_height);

		if ($('.colours.moved').length)

		{

			$('.content-panel').css({minHeight: Math.max($('.colours').height(), $('.content-box').outerHeight()), maxHeight: Math.max($('.content-box').outerHeight(), $('.colours').height(), $(window).height()), overflow: 'auto'});

		}

		else

		{

			$('.content-panel').css({maxHeight: $(window).height(), minHeight: 0});

		}

	});

	

	setInterval(function() { $(window).trigger('resize') }, 1000);

	

	$('.colour_link').click(function(event) {

		event.preventDefault();

		

		$('.colour_link').attr('data-current', 'false');

		$(this).attr('data-current', 'true');

		

		var this_name = $(this).children().first().attr('data-name');

		$('.content-box > h1').html($('.' + this_name + ' > h1').html());

		$('.content-box > .page_name').html($('.' + this_name + ' > .page_name').html());

		$('.content-box .paragraphs').first().html($('.' + this_name + ' .paragraphs').first().html());

		$('.content-box .paragraphs.second-block').first().html($('.' + this_name + ' .paragraphs.second-block').first().html());

		

/* 		$('.content-box .quick-links').first().html($('.' + this_name + ' .quick-links').first().html()); */

		$('.content-box .quick-links a').first().attr('data-url', $('.' + this_name + ' .quick-links a').first().attr('data-url'));

		$('.content-box .quick-links a').first().text($('.' + this_name + ' .quick-links a').first().text());

		

		$('.content-panel').css({minHeight: $('.content-box').outerHeight(), overflow: 'auto'});

		

		if ($('.' + this_name + ' .paragraphs').is('.no-columns'))

		{

			$('.content-box .paragraphs').addClass('no-columns');

		}

		else

		{

			$('.content-box .paragraphs').removeClass('no-columns');

		}

		

		$('.content-box').attr('data-page', this_name);

		

		if ($('.colours').is('.moved') == false)

		{

			$('.colours').addClass('moving').delay(500).addClass('moved', 500) //.removeClass('moving');

			$('#home_wrapper').stop().animate({'right': '100%'}, 1000, function() {

				$('.content-box').addClass('moved');

				$('.ifesticon').fadeIn();

			});



			$('.content-panel, .content-box, body').stop().css({'background-color': $(this).find('span').attr('data-colour')}, 1000);

			$('#home_wrapper').addClass('moved');

		}

		else

		{

			$('.content-panel, .content-box, body').stop().animate({'background-color': $(this).find('span').attr('data-colour')}, 500);

		}

		

		/*if (History.enabled)

		{

			window.manualStateChange = false;

			History.pushState({page:this_name}, $(this).find('span span').text() + ' | ' + 'ifest', $(this).attr('href'));

		}*/

	});

		

	$('body').on('click', '.quick-links a', function(event) {

		event.preventDefault();

		

		window.manualStateChange = false;

		$('.colour_link.' + $(this).attr('data-url')).trigger('click');

		

		return false;

	});

	

	$('.colours .colour_link').hover(function() {

		if ($('.colours').is('.moved') && $(this).attr('data-current') == "false" && !window.ios)

		{

			$('.content-box').addClass('moved-back');

			$(this).children().first().stop().animate({'margin-left': 80});

			$(this).addClass('hover', 1000);

		}

	}, function() {

		$(this).children().first().stop().animate({'margin-left': 0});

		$(this).removeClass('hover', 1000);

		$('.content-box').removeClass('moved-back');

	});

	

	$('.colours:not(.moving) a').hover(function() {

		if ($('.colours:not(.moving)').length)

		{

			$(this).children().first().css({'padding-top': '5px', 'margin-top': '-5px'});

		}

	}, function() {

		$(this).children().first().css({'padding-top': '0', 'margin-top': '0'});

	});

	

	$('.ifesticon a').on('click', function(event) {

		event.preventDefault();

		event.stopPropagation();

		

		if (History.enabled)

		{

			History.replaceState({page:'home'}, 'iFest 2013', 'http://ifest.ieeeiitr.com/ifest2013/ifest.php');

			//$(window).trigger('statechange');

		}

		

		$('.colours').stop().removeClass('moved').delay(500)//.removeClass('moving');

		$('.ifesticon').stop().fadeOut();

		$('.content-box').stop().removeClass('moved');

		$('.content-panel').css({minHeight: 5, overflow: 'hidden'});

		$('#home_wrapper').stop().animate({right: 0});

		

		$('#home_wrapper').removeClass('moved');

		$('.content-panel').css({maxHeight: $(window).height(), minHeight: 0});

	});

	

	$('.colours').one('click', function() {

		$('label').addClass('tk-museo-sans');

	});

	

	if (window.ios)

	{

		$('.telephone-number').html('<a href="tel:' + $('.telephone-number').first().text() + '">' + $('.telephone-number').first().text() + '</a>');

	}

	$('.telephone-number').addClass('with-icon');

	

	var History = window.History; // Note: We are using a capital H instead of a lower h

	if ( !History.enabled ) {

		History.Adapter.bind(window,'statechange',function(){ // Note: We are using statechange instead of popstate

			var State = History.getState(); // Note: We are using History.getState() instead of event.state

			History.log(State.data, State.title, State.url);

		});

	}

	

	$('.circle.png img').height($(window).height());

	

	$(window).bind('statechange', function() {

		if ($('html.ie8').length || $('html.ie7').length || $('html.ie9').length)

		{

			return false;

		}

		

		if (window.location.pathname == '/')

		{

			$('.ifesticon').stop().fadeOut();

			$('.content-box').removeClass('moved');

			$('#home_wrapper').stop().animate({right: 0});

			$('.colours').stop().removeClass('moved').delay(500).removeClass('moving');

			

			$('#home_wrapper').removeClass('moved');

		}

		else if (window.manualStateChange)

		{

			$('a[href="' + window.location.href + '"]').click();

		}

		

		window.manualStateChange = true;

	});

	

	/*$('body').on('submit', 'form[method="post"]', function(event) {

		event.preventDefault();

		

		$.post($(this).attr('action'), $(this).serialize(), function(data) {

			alert(data);

		}, 'json');

		

		return false;

	});*/

	

	/*$(window).scroll(function() {

		var diff = $('.colours').height() - $(window).height();

		

		if ($(window).scrollTop() > diff && $('.colours:not(.stuck)').length)

		{

			$('.colours').addClass('stuck');

		}

		else if ($(window).scrollTop() < diff)

		{

			$('.colours.stuck').removeClass('stuck');

		}

	});*/

});

</script>

<!--<div id="bgi">	

<div>-->		

<div id="home_wrapper">
	<div id="success" style="color: white"></div>
	<div style="position: absolute;margin-top: -20px;margin-left: -62px;">

		<form name="davesnewsform" style="position:absolute;left:617px;top:464px;z-index:2000;height:30px;width:200px;z-index:3000;">

<input id="ifestfm" type="text" size="30" name="davestextbox" style="color:white;font-family:'quicksand';background-color:transparent;display:none; font-size:14px;border:0px;" >

</form>

<img src="17.png" id="ifesticon4"  width="230" height="230" style="position:absolute;left:600px;top:370px;z-index:800;display:none;"/>

	<img src="FInal_iFest_Logo.png" id="ifesticon1" width="280" height="280" style="position:absolute;left:450px;top:160px;z-index:1000;display:none;"/>

	<?php

	require 'new.php';

	?>

	<img src="intro.png" id="ifesticon2"  width="250" height="250" style="position:absolute;left:449%;top:111%;z-index:900;display:none;"/>

	<!--<img src="16.png" id="ifesticon3"  width="180" height="180" style="position:absolute;left:460px;top:370px;z-index:850;display:none;"/>-->

	<img src="19.png" id="ifesticon5"  width="150" height="150" style="position:absolute;left:320px;top:310px;z-index:851;display:none;"/>

	<img src="11.png" id="ifesticon6"  width="40" height="40" style="position:absolute;left:710px;top:160px;z-index:901;display:none;"/>

	<img src="12.png" id="ifesticon7"  style="position:absolute;left:680px;top:160px;z-index:902;display:none;"/>

	<div class="social-buttons">

			<a class="facebook" href="https://www.facebook.com/iFest.IIT.Roorkee?fref=ts" target="_blank" style="z-index:810;position:absolute;left:435px;top:400px;visibility:hidden;"><img src="facebook.ico"></a>

		</div>

	</div>

		<script>

		var a,b,c,d,e,f,g,h,i;

		$(document).ready(function(){circles();fstlnk();fb2();});

		function circles(){

		a=setTimeout(function(){

   // document.getElementById('ifesticon1').style.visibility = 'visible';

   $("#ifesticon1").fadeIn(200);

},250);



		b=setTimeout(function(){

    //document.getElementById('ifesticon2').style.visibility = 'visible';

    $("#ifesticon2").fadeIn(200);

},950);

		c=setTimeout(function(){

    $("#ifesticon3").fadeIn(500);

    //document.getElementById('ifesticon3').style.visibility = 'visible';

},1400);

		/*setTimeout(function(){

    $("#likebx").fadeIn(500);

    //document.getElementById('ifesticon3').style.visibility = 'visible';

},1400);*/

		d=setTimeout(function(){

    $("#ifesticon4").fadeIn(200);

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},1125);

		i=setTimeout(function(){

    $("#ifestfm").fadeIn(200);

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},1125);

		e=setTimeout(function(){

    $("#ifesticon5").fadeIn(200);

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},1600);

		f=setTimeout(function(){

    $("#ifesticon6").fadeIn(200);

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},675);

		g=setTimeout(function(){

    $("#ifesticon7").fadeIn(200);

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},500);

		

		$("#ifesticon3").hover(function(){

			$("#ifesticon3").css("z-index","2000");

		},function(){

			$("#ifesticon3").css("z-index","850");

		});

$("#ifesticon4").hover(function(){

			$("#ifesticon4").css("z-index","2000");

		$("#ifestfm").css("font-size","15px");

		},function(){

			$("#ifesticon4").css("z-index","800");

			$("#ifestfm").css("font-size","14px");

		});

         $("#ifesticon5").hover(function(){

			$("#ifesticon5").css("z-index","2000");

		},function(){

			$("#ifesticon5").css("z-index","851");

		});

         $("#ifesticon2").hover(function(){

			$("#ifesticon7").animate({width:'15px',height:'15px'},'0.1');

			$("#ifesticon6").animate({width:'29px',height:'29px'},'0.1');

		},function(){

		$("#ifesticon7").animate({width:'23px',height:'23px'},'0.1');

		$("#ifesticon6").animate({width:'40px',height:'40px'},'0.1');

		});

var j;
function fb2(){
j=setTimeout(function(){
   $("#ifestlink").fadeIn(200);
    //document.getElementById('ifesticon3').style.visibility = 'visible';
},1400);



		}

		</script>

	<div class="home-block">

		<div class="social-buttons">

			<!--<a class="facebook" href="https://www.facebook.com/iFest.IIT.Roorkee?fref=ts" target="_blank"><img src="facebook.ico"></a>-->

		</div>

		

		<div class="home-content">

		<!--	<a href="http://yokedesign.com.au" target="_blank" style="color: #58585a; font-size: 11px; text-decoration: none; vertical-align: middle;">Web design by <img src="wp-content/themes/colouredlines/images/yoke_logo_black.jpg" alt="Web design by Yoke" width="50" style="width: 50px !important; vertical-align: sub; margin-left: 2px" /></a>-->

		</div>

	</div>

	<div class="circle">

	<!--	<img src="wp-content/themes/ifest/images/circle2.svg" style="display: block; height: 100%;" alt="" />-->

	</div>

	<div class="circle png">

		<!--<img src="wp-content/themes/ifest/images/circle2.png" style="display: table-cell; height: 100%" alt="" />-->

	</div>

	

	<div class="colours tk-museo-sans">

		<a href="" class="colour_link who_we_are" data-current="false" id="ifest_register" onclick="success();"><span data-colour="#76d7af" data-name="who_we_are" class="colour" onclick="success();"><span>Sign Up</span></span></a>

		<a href="#" class="colour_link what_we_do" id="events" data-current="false"><span data-colour="rgb(111,177,118)" data-name="what_we_do" class="colour"><span>Events</span></span></a>

		<a href="#" class="colour_link why_choose_us" data-current="false"><span data-colour="#65acf4" data-name="why_choose_us" class="colour"><span>About Us</span></span></a>

		<!--<a href="#" class="colour_link products" data-current="false"><span data-colour="#ffbe56" data-name="products" class="colour"><span>Team</span></span></a>-->

		<a href="http://i-fest.html/event1/" class="colour_link guestbook" data-current="false"><span data-colour="rgb(117, 94, 110)" data-name="guestbook" class="colour"><span>TEAM</span></span></a>

		<a href="#" class="colour_link faqs" data-current="false"><span data-colour="#fe9352" data-name="faqs" class="colour"><span>Sponsors</span></span></a>

		<a href="#" class="colour_link contact_us" data-current="false"><span data-colour="#ff5c55" data-name="contact_us" class="colour"><span>Contact Us</span></span></a>

		<!--<a href="#" class="colour_link blog" data-current="false"><span data-colour="#129793" data-name="blog" class="colour"><span></span></span></a>-->

	</div>

</div>





<div class="content-panel">

	<div class="content-box">

		<p class="ifesticon">

			<!-- <a href="/"><img src="http://www.colouredlines.com.au/wp-content/themes/colouredlines/images/ifesticon.png" alt="Go home" /></a> -->

			<a href="/"><img src="FInal_iFest_Logo.png" id="final_ifest_logo" alt="Go home" width="53" height="53" /></a>

		<!--	<span class="telephone-number tk-museo-sans with-icon" style="float: right; margin-top: 20px">Future&nbsp;Lies&nbsp;Within&nbsp;</span>-->

		<script>

		$("#final_ifest_logo").click(function(){clearTimeout(a);clearTimeout(b);clearTimeout(c);clearTimeout(d);clearTimeout(e);clearTimeout(f);clearTimeout(g);clearTimeout(h);clearTimeout(i);});

		$("#final_ifest_logo").click(function(){

 		$("#ifesticon1,#ifesticon2,#ifesticon3,#ifesticon4,#ifesticon5,#ifesticon6,#ifesticon7,#ifestlink,#ifestfm").fadeOut(0);});

		$("#final_ifest_logo").click(function(){circles();success();});

		$("#final_ifest_logo").click(function(){clearTimeout(j);});
        $("#final_ifest_logo").click(function(){$("#ifestlink").fadeOut(0);});
        $("#final_ifest_logo").click(function(){fb2();});

		</script>

		</p>

		<!--<div class="page_name tk-museo-sans">All Pages</div>-->

		<h1 class="tk-source-sans-pro">&nbsp;</h1>

		<div class="paragraphs tk-source-sans-pro">

					</div>

		<div class="paragraphs second-block tk-source-sans-pro">

			<p>&nbsp;</p>

		</div>

	<!--<div class="quick-links tk-source-sans-pro">

		<a href="i-fest.html#" data-url="" style="z-index:-1;">Widget link goes here</a>-->

		</div>

		<br style="clear: both" />

		<br /><br />

	</div>

</div>



<div class="who_we_are hidden">

	<div class="page_name tk-museo-sans">SignUp</div>

	<h1 class="tk-source-sans-pro">Registrations will open soon</h1>

	<div class="paragraphs tk-source-sans-pro no-columns">
	

	<!--php

	//include 'signup.php';

	?>-->	

	<div class="paragraphs second-block"></div>

	<!--<div class="quick-links"><a href="i-fest.html#" data-url="what_we_do">event1</a></div>-->

</div>

</div>





<div class="what_we_do hidden">



	<div class="page_name tk-museo-sans"></div>

	<h1 class="tk-source-sans-proonclick"></h1>

	<div class="paragraphs tk-source-sans-pro">

		<div style="position:absolute;">

		<script type="text/javascript">

				/*function qwer(ele){

				

				}

				function qwer(ele){

				var id=ele.id;

				if(id="tile1"){

				$("#img1").src="img/Envision.jpg";

				};

				if(id="tile2"){

				$("#img1").src="img/Mathjenii.jpg";

				};

				if(id="tile3"){

				$("#img1").src="img/MAD.jpg";

				};

				if(id="tile4"){

				$("#img1").src="img/crux.png";

				};

				}*/

					function changeImage(ele){

					var qw=document.getElementById('toChange');

					var as=document.getElementById('bbox');

					//var zx=document.getElementById('bkimg');

					if(ele=="tile1"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('cruxbbx').innerHTML;

				    });

					$("#bbox").fadeIn(200);

					$("#toChange").fadeOut(200,function(){

					qw.src='img/crux.png';

					});

					$("#toChange").fadeIn(200);

					//zx.style.backgroundImage = "url(img/cruxbw.jpg)";

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico1').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					//document.getElementById('ico1').style.backgroundColor = "rgba(0,0,0,0)";

					//clearTimeout(a);clearTimeout(b);clearTimeout(c);clearTimeout(d);clearTimeout(e);clearTimeout(f);clearTimeout(g);

					}

					else if(ele=="tile2"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('envibbx').innerHTML;

					});

					$("#bbox").fadeIn(200);

					$("#toChange").fadeOut(200,function(){

					qw.src='img/envision.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/envisionbg.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico2').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile3"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('logibbx').innerHTML;

					});

					$("#bbox").fadeIn(200);

					$("#toChange").fadeOut(200,function(){

					qw.src='img/logicode.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/Logicodebg.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico3').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile4"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('madbbx').innerHTML;

					});

					$("#bbox").fadeIn(200);

					$("#toChange").fadeOut(200,function(){

					qw.src='img/mad.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/madbg.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico4').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile5"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('mathbbx').innerHTML;

					});

					$("#bbox").fadeIn(200);	

					$("#toChange").fadeOut(200,function(){

					qw.src='img/mathgenii.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/Mathjenibw.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico5').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile6"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('matrbbx').innerHTML;

					});

					$("#bbox").fadeIn(200);	

					$("#toChange").fadeOut(200,function(){

					qw.src='img/matrix.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/matrixedbw.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico6').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile7"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('splashbbx').innerHTML;

					});

					$("#bbox").fadeIn(200);	

					$("#toChange").fadeOut(200,function(){

					qw.src='img/splash.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/splashbg.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico7').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

					else if(ele=="tile8"){

					$("#bbox").fadeOut(200,function(){

					as.innerHTML=document.getElementById('techbbx').innerHTML;

					});

					$("#bbox").fadeIn(200);	

					$("#toChange").fadeOut(200,function(){

					qw.src='img/techtales.png';

					});

					$("#toChange").fadeIn(200);

					//$("#bkimg").fadeOut(00,function(){

					//zx.style.backgroundImage = "url(img/techtalesbw.jpg)";

					//});

					//$("#bkimg").fadeIn(200);

					$('.tile').css("backgroundColor", "rgba(0,0,0,0)");

					document.getElementById('ico8').style.backgroundColor = "rgba(253, 248, 248, 0.4)";

					}

				}

					

				

		</script>

		<div>

			<div id="cruxbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>CRUX 3.0</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Let the world know you are out on a quest! A quest for the lost treasure! iFest 2013 brings you all new season of treasure hunting in Crux 3.0. This game is designed to test your creativity, resourcefulness and appetite for winning. Here you have only one golden rule: 'solve the maximum number of puzzles, no matter how'. Remember, everything is fair in love, war and Crux 3.0!

						</p>

					</div>

				</div>

			</div>

			<div id="envibbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>ENVISION</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>

							The online paper submission competition, which gives you an opportunity to manifest your genuine research work. The event aims at envisioning the eminent researchers in the country. Cutting edge research papers are published at Envision. Here you can roll out your landmark research in field of technology. Compete with profound researchers across India. Let the world see the outstanding scholar in you. Be a part of it and let your competency in research make you stand out of the crowd. 

						</p>



					</div>

				</div>

			</div>

			<div id="logibbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>LOGICODE</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Was #include<'meinthisworld'> the first word that came out of your mouth after birth?  Do you prefer counting in binary than in decimal? Do you dream coding? Then, sleep will be on standby as your system will experience the tremors of Logicode when the coding wizards will tear apart mathematical, scientific and technical problems in a furious battle of wits against the best brains across the world. The contest will test the programming skills and problem-solving capabilities of the participants. Gear up for the biggest challenge in the programming world! After all, it's the geek that shall inherit the earth.

						</p>

					</div>

				</div>

			</div>

			<div id="madbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>MAD</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Are you an android enthusiast? Do you believe that Android is the future of mobile computing? This is the contest that gives your skills a Dias. Participate in MAD (Mobile App Development) and show the world your love for apps or for the cash prizes in store. So unleash your creativity and develop an easy to use android app. Who knows, this could prove a milestone in your app development career.



						</p>

					</div>

				</div>

			</div>

			<div id="mathbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>MATH GENII</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Does mathematics turn you on? This is the place for you to fruitify your love for numbers and formulae. Here’s Math Genii, a quiz that satiates your prodigious streak and interest in solving problems. So come explore the genius within you and get a chance to win awesome cash prizes. 

						</p>

					</div>

				</div>

			</div>

			<div id="matrbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>MATRIXED</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Unleash the geek in you! iFest 2013 brings out the new season of Matrixed, the destination for all the quizzers across the country. Here, participants are interrogated with multifarious and boundless brain eating questions about any axis of science and technology.  Only a handful of participants make it through the fierce competition, only the superior of the superiors. Warning for the light hearted one: play at your own risk, because it's only the best who survives! 

						</p>

					</div>

				</div>

			</div>

			<div id="splashbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>SPLASH</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Have you the got the creative instinct in you? Here you get a platform to prove your mettle. The poster making competition that tests your artistic streak is here. So let free your imagination, tap your technical skills and bring out the best of you. The event requires making a poster on one of the hot topics of today. Participate and give your calibre in art a chance to win awards for you.

						</p>

					</div>

				</div>

			</div>

			<div id="techbbx" style="display:none;height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px;margin-bottom: 30px;"><p>TECHTALES</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;">

							<p>Once upon a time, there was a land of the unknown. People used call it the R-Land. Bored with the mundane lifestyle and stereotyped laws of nature, people decided to change the rules that governed the universe there. And thus began story of Techtales. Welcome to the world of the unknown! Welcome to the most exciting journeys of all!

 						</p>

	 					<p>

						Grab a pen and start writing the most creative story you can imagine. Take up a theme from superhuman, time-travel, space wars, or anything else and let your imagination run wild. Check out the problem statement for further details. 



						</p>

					</div>

				</div>

			</div>

		</div>

	<div id="bkimg"style="background-image:url('img/event.png');position:fixed;background-repeat:no-repeat;height:768px;width:1088.5px;margin-left:-100px;" width="1088.5px"height="768px"></div>

		<div class="tiles" width="1088px"; height="768px";style="overflow:scroll;z-index:1;">

		 <div><img onclick="changeImage('tile1')" class="tile" id="ico1" align="right" width="90px" height="90px"  style="background-image:url('logo/crux.png');position:relative;left:1000%;top:0px;"></div>

	     <div><img onclick="changeImage('tile2')" class="tile" id="ico2" align="right" width="90px" height="90px"  style="background-image:url('logo/envision.png');position:relative;left:1000%;top:7px;"></div>

         <div><img onclick="changeImage('tile3')" class="tile" id="ico3" align="right" width="90px" height="90px"  style="background-image:url('logo/logicode.png');position:relative;left:1000%;top:14px;"></div>

         <div><img onclick="changeImage('tile4')" class="tile" id="ico4" align="right" width="90px" height="90px"  style="background-image:url('logo/mad.png');position:relative;left:1000%;top:21px;"></div>

         <div><img onclick="changeImage('tile5')" class="tile" id="ico5" align="right" width="90px" height="90px"  style="background-image:url('logo/mathgenii.png');position:relative;left:1000%;top:28px;"></div>

         <div><img onclick="changeImage('tile6')" class="tile" id="ico6" align="right" width="90px" height="90px"  style="background-image:url('logo/matrix.png');position:relative;left:1000%;top:35px;"></div>

     	 <div><img onclick="changeImage('tile7')" class="tile" id="ico7" align="right" width="90px" height="90px"  style="background-image:url('logo/splash.png');position:relative;left:1000%;top:42px;"></div>

     	 <div><img onclick="changeImage('tile8')" class="tile" id="ico8" align="right" width="90px" height="90px"  style="background-image:url('logo/techtales.png');position:relative;left:1000%;top:49px;"></div>

 		</div>		

			<div style="height:107%;width:306%;background-color:rgba(253, 248, 248, 0.4);position:absolute;z-index:1;left:1098%;top:0px;"><div id="bbox"style="color:black;font-family: 'Raleway', sans-serif;padding:10px;width:260px;position:fixed;margin-right:10px;">

					<div style="height:100%">

				<div style="margin-top: 97px;">

					<div style="text-align: center; font-size: 32px"><p>CRUX 3.0</p></div>

						<div style="text-align: justify;margin-left: 8px;margin-right: 8px;font-size: 13px;"><p>Let the world know you are out on a quest! A quest for the lost treasure! iFest 2013 brings you all new season of treasure hunting in Crux 3.0. This game is designed to test your creativity, resourcefulness and appetite for winning. Here you have only one golden rule: 'solve the maximum number of puzzles, no matter how'. Remember, everything is fair in love, war and Crux 3.0!

						</p>

					</div>

				</div>

			</div>

			</div>

			</div>

			

		<!--<div id='coin-slider'>-->

		<div>

				<img id="toChange"  width="665px"height="365px"style="position:fixed;margin-left:110px;margin-top:150px;">

		</div>		

  				

  		<script>

		var a,b,c,d,e,f,g,h,i;

		$('.tile,#events').click(function(){clearTimeout(a);clearTimeout(b);clearTimeout(c);clearTimeout(d);clearTimeout(e);clearTimeout(f);clearTimeout(g);clearTimeout(h);clearInterval(i);});
		$("#events").click(function(){

		//fb = true;

		//changeImage('tile1');

		changeTile();

		i=self.setInterval(function(){changeTile();},16000);

		function changeTile(){

		h=setTimeout(function(){

	changeImage("tile1");},1);

		a=setTimeout(function(){

   // document.getElementById('ifesticon1').style.visibility = 'visible';

   changeImage('tile2');

},2000);

		b=setTimeout(function(){

    //document.getElementById('ifesticon2').style.visibility = 'visible';

    changeImage("tile3");

},4000);

		c=setTimeout(function(){

    changeImage("tile4");

    //document.getElementById('ifesticon3').style.visibility = 'visible';

},6000);

		d=setTimeout(function(){

    changeImage("tile5");

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},8000);

		e=setTimeout(function(){

    changeImage("tile6");

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},10000);

		f=setTimeout(function(){

    changeImage("tile7");

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},12000);

		g=setTimeout(function(){

    changeImage("tile8");

    //document.getElementById('ifesticon4').style.visibility = 'visible';

},14000);

		}

		});

		</script>

			<!--<span>

				Description for img01

			</span>-->

			<!--	<img id="img2" src="img/Envision.jpg">-->

					

  			

			<!--<span>

				Description for img02

			</span>-->

			<!--<img id="img3" src="img/Mathjenii.jpg" >-->

				

  			

			<!--<span>

				Description for img03

			</span>-->

			<!--<img id="img4" src="img/MAD.jpg" >-->

		



			<!--<span>

				Description for img04

			</span>-->

		<!--</div>-->

		<!--<script type="text/javascript">

			$(document).ready(function() {

				$('#coin-slider').coinslider({width: 780,height: 450,spw: 7,sph: 5,delay: 1500,sDelay: 40,opacity: 0.7,titleSpeed: 500,effect: 'random',navigation: true,hoverPause: true});

			});

			</script>-->

			<!--<div style="height:100%;width:315px;background-color:black;position:fixed;right:0px;top:0px;">

				<div class="panel">

  					<p id="eve1">TEXT GOES HERE1</p>

  					<p id="eve2">TEXT GOES HERE2</p>

  					<p id="eve3">TEXT GOES HERE3</p>

  					<p id="eve4">TEXT GOES HERE4</p>

  					<p id="eve5">TEXT GOES HERE5</p>

  					<p id="eve6">TEXT GOES HERE6</p>

  					<p id="eve7">TEXT GOES HERE7</p>

  					<p id="eve8">TEXT GOES HERE8</p>

  					<p id="eve9">TEXT GOES HERE9</p>

  					<p id="default">TEXT GOES HERE0</p>

  					 				

			</div>				

			</div>-->

		</div>

		

     

     </div>

	<!--<div class="paragraphs second-block"></div>-->



	<!--<div class="quick-links"><a href="i-fest.html#" data-url="why_choose_us">event1</a></div>-->

</div>



<div class="why_choose_us hidden">

	<div class="page_name tk-museo-sans"></div>

	<h1 class="tk-source-sans-pro"><span style="font-weight:500">About</span><span style="font-weight:400"> Us</span></h1>

	<div class="paragraphs no-columns tk-source-sans-pro">

		<div>

	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FiFest.IIT.Roorkee&amp;width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px;background-color:white; height:258px;position: fixed;left: 70%;top: 20%;" allowtransparency="true"></iframe></div>

		<div style="background-color:rgba(50,50,50,0.7);height:auto;width:500px;position:absolute;left:135px;top:120px;z-index:-1;opacity:80%;box-shadow: 5px 5px 2px #000000;">

<p class="fontlight" style="position:relative;text-align:center;">IEEE student chapter, IITR presents iFest, an online technical festival, a platform for engineering geniuses across the globe to showcase their intellectual might. The technical fest aims at bringing together the engineering virtuoso and the industrial wizards for the upsurge of science and technology. Here you will feel the ease of unleashing your creativity from wherever you are. Now distances can't hold you back from competing with the best of technical minds. So sharpen your skills and get ready to be a part of this battle of the ignited minds.IEEE student chapter, IITR presents iFest, an online technical festival, a platform for engineering geniuses across the globe to showcase their intellectual might. The technical fest aims at bringing together the engineering virtuoso and the industrial wizards for the upsurge of science and technology. Here you will feel the ease of unleashing your creativity from wherever you are. Now distances can't hold you back from competing with the best of technical minds. So sharpen your skills and get ready to be a part of this battle of the ignited minds.</p>

	</div></div>

	<div class="paragraphs second-block">

		<p></p></div>

	<div class="quick-links"><a href="i-fest.html#" data-url="products">event1</a></div>

</div>



<div class="products hidden">

	<div class="page_name tk-museo-sans">EVENT1</div>

	<h1 class="tk-source-sans-pro"></h1>

	<div class="paragraphs tk-source-sans-pro no-columns">





	</div>

	<div class="paragraphs second-block"></div>

	<div class="quick-links"><a href="i-fest.html#" data-url="guestbook">event1</a></div>

</div>



<div class="guestbook hidden">

	<div class="page_name tk-museo-sans"></div>

	<h1 class="tk-source-sans-pro">Meet Our Team</h1>

	<div class="paragraphs tk-source-sans-pro no-columns">

		<p>

			<div class="peoplePage">

<!--

<script type="text/javascript">

    $(function(){

        var selected = null;

        $('.employeeFilter').click(function(e){

            e.preventDefault();



            var location = $(this).attr('data-location');



            other_filters_selector = '.employeeFilter:not(.'+location+'Filter)';

            other_employees_selector = '.the-team li:not(.'+location+'Employee)'



            if (location == selected) {



                $(other_filters_selector).animate({opacity: 1});

                $(other_employees_selector).animate({opacity: 1});



                selected = null;



            } else {



                $(other_filters_selector).animate({opacity: 0.2});

                $(other_employees_selector).animate({opacity: 0.1});



                $('.'+location+'Filter').animate({opacity: 1});

                $('.'+location+'Employee').animate({opacity: 1});



                selected = location;

            }

        });



    })

</script>

-->



<div id="content" class="content contentRight peoplePage">



        <!--<h1 class="entry-title">

            Meet our team

        </h1>-->

<!--

        <div class="meta-key clearfix">

            <ul>

                <li class="filterText">Filter by location:</li>

                <a href="#" class="londonFilter employeeFilter" data-location="london">

                    <li class="red">

                        <img src="http://a1.distilledcdn.com/wp-content/uploads/2013/01/london-red.png" alt="red">London

                    </li>

                </a>

                <a href="#" class="seattleFilter employeeFilter" data-location="seattle">

                    <li class="green">

                            <img src="http://a1.distilledcdn.com/wp-content/uploads/2013/01/seattle-green.png" alt="green">Seattle

                    </li>

                </a>

                <a href="#" class="newyorkFilter employeeFilter" data-location="newyork">

                    <li class="blue">

                            <img src="http://a1.distilledcdn.com/wp-content/uploads/2013/01/new-york-blue.png" alt="blue">New York

                    </li>

                 </a>

            </ul>

        </div>



     -->   

<div>

	<ul class="the-team greylink">

	<li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url('images/archit2.jpg');">

        <img src="images/archit1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/archit.agrawal2" target="_blank">Archit Agarwal</a>

        </p>

        <p class="job">

            <a>Convener(Admin)</a>

        </p>

    

    </li>

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/digant2.jpg);">

        <img src="images/digant1.jpg" alt="">

        </a>

        <p class="name">

             <a target="_blank" href="https://www.facebook.com/digantray">Digant Ray</a>

        </p>

        <p class="job">

            <a>Convener(Finance)</a>

        </p>

    

    </li>

</ul>

</div>



<ul class="the-team greylink">





     <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/kushal1.jpg);">

        <img src="images/kushal2.jpg" alt="">

        </a>

        <p class="name">

          <a target="_blank" href="https://www.facebook.com/kushal.sharma.5205">Kushal Sharma</a>

        </p>

        <p class="job">

           <a>Sponsorship Manager</a>

        </p>

    

    </li>  

    

    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/divyen.jain.jpg);background-position: -21px 0px;">

        <img src="images/divyen.jain.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/divyen.jain">Divyen Jain</a>

        </p>

        <p class="job">

            <a>Sponsorship Manager</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/virenderp3.jpg);">

        <img src="images/virenderp3.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/virenderp3">Virendra Pratap Singh</a>

        </p>

        <p class="job">

            <a>Marketing Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/sagar.chaosden.jpg);">

        <img src="images/sagar.chaosden.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/sagar.chaosden">Sagar Kumar</a>

        </p>

        <p class="job">

            <a>Workshop Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/aditya2.jpg);">

        <img src="images/aditya1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/gladiator8008">Aditya Kumar</a>

        </p>

        <p class="job">

            <a>Workshop Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url('images/trnsrsrx1.jpg');background-position: -40px 0px;">

    	<img src="images/trnsrsrx1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/trnsrsrx1">Mayank Agarwal</a>

        </p>

        <p class="job">

            <a>Event Manager(Online)</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/mohit.reborn.jpg);background-position: -48px -30px;">

        	<img src="images/mohit.reborn.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/mohit.reborn">Mohit Chaudhary</a>

        </p>

        <p class="job">

            <a>Event Manager(Online)</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/newkid.png);background-size: 100%;;">

        	<img src="images/newkid.png" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="">Ankit Patel</a>

        </p>

        <p class="job">

            <a>Event Manager(Online)</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/vikalp02.jpg);background-position: 0px -11px;">

        	<img src="images/vikalp02.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/vikalp02">Vikalp Gupta</a>

        </p>

        <p class="job">

            <a>Event Manager(On Campus)</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/megha2.jpg);">

        <img src="images/megha1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/megha.vijayvargia">Megha Vijayvargia</a>

        </p>

        <p class="job">

            <a>Event Managers(On Campus)</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/palak2.jpg);">

                <img src="images/palak1.jpg" alt="">

                </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/palsajdiv">Palak Jajoo</a>

        </p>

        <p class="job">

            <a>Publicity Manager</a>

        </p>

    

    </li>

   

   <li class="seattleEmployee">

    

        <a target="_blank" href="https://www.facebook.com/himanshu.tandon27" class="team-thumb" style="background-image:url(images/himanshu2.jpg);">

        <img src="images/himanshu1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/himanshu.tandon27">Himanshu Tandon</a>

        </p>

        <p class="job">

            <a>Publicity Manager</a>

        </p>

    

    </li> 



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/gupta.tushar.jpg)">

        <img src="images/gupta.tushar.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/gupta.tushar">Tushar Gupta</a>

        </p>

        <p class="job">

            <a>Publicity Manager</a>

        </p>

    

    </li>

    



    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/newkid2.png);background-size: 100%;;">

        <img src="images/newkid2.png" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/shashank.jha.71">Shashank Jha</a>

        </p>

        <p class="job">

            <a>Content Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/vinayakss.jpg);background-size: 150%;">

        <img src="images/vinayakss.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/vinayakss">Vinayak Shekhar Sahai</a>

        </p>

        <p class="job">

            <a>Content Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/alankrita2.jpg);">

        	<img src="images/alankrita1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/alankrita.gautam">Alankrita Gautam</a>

        </p>

        <p class="job">

            <a>Content Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/vishal2.jpg);">

             <img src="images/vishal1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/vish7294">Vishal Singh</a>

        </p>

        <p class="job">

            <a>Design Manager</a>

        </p>

    

    </li>

    



    

    <li class="londonEmployee">

    

        <a class="team-thumb" style="background-image:url(images/vijay2.jpg);">

             <img src="images/vijay1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/vijay.jain.5059601">Vijay Jain</a>

        </p>

        <p class="job">

            <a>Design Manager</a>

        </p>

    

    </li>



    <li class="newyorkEmployee">

    

        <a class="team-thumb" style="background-image:url(images/kritgya2.jpg);">

             <img src="images/kritgya1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/kritgya1">Kritgya Bawal</a>

        </p>

        <p class="job">

            <a>Design Manager</a>

        </p>

    

    </li>

    



    

    <li class="newyorkEmployee">

    

        <a class="team-thumb" style="background-image:url(images/parth2.jpg);">

            <img src="images/parth1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/parth.gaggar">Parth Gaggar</a>

        </p>

        <p class="job">

            <a>Web Manager</a>

        </p>

    

    </li>

    



    

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/angadpal81.jpg);background-size: 168%;background-position: -28px -30px;">

            <img src="images/angadpal81.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/angadpal81">Angad Pal Singh</a>

        </p>

        <p class="job">

            <a>Web Manager</a>

        </p>

    

    </li>

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/asim2.jpg);">

            <img src="images/asim1.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/asim.aashish">Asim Aashish</a>

        </p>

        <p class="job">

            <a>Web Co-ordinator</a>

        </p>

    

    </li>

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/KK.corps.jpg);background-position: -25px 0px;">

            <img src="images/KK.corps.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/KK.corps">Kartik Khare</a>

        </p>

        <p class="job">

            <a>Web Co-ordinator</a>

        </p>

    

    </li>

     <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/namit.ohri.jpg);background-position: -47px 0px;">

            <img src="images/namit.ohri.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/namit.ohri.jpg">Namit Ohri</a>

        </p>

        <p class="job">

            <a>Web Co-ordinator</a>

        </p>

    

    </li>

    <li class="seattleEmployee">

    

        <a class="team-thumb" style="background-image:url(images/anilmor1993.jpg);">

            <img src="images/anilmor1993.jpg" alt="">

        </a>

        <p class="name">

            <a target="_blank" href="https://www.facebook.com/anilmor1993.jpg">Anil R Mor</a>

        </p>

        <p class="job">

            <a>Web Co-ordinator</a>

        </p>

    

    </li>

</ul>

    </div>

</div>



    </div> </p>



	<div class="paragraphs second-block"></div>

	<!--<div class="quick-links"><a href="i-fest.html#" data-url="contact_us">event1</a></div>-->

</div>

</div>

<div class="faqs hidden">

	<div class="page_name tk-museo-sans">EVENT1</div>

	<h1 class="tk-source-sans-pro">Sponsors</h1>

	<div class="paragraphs no-columns tk-source-sans-pro">

    <a href="http://esparsha.com/" target="_blank"style="position:absolute;left:7%;top:66%;"><img src="img/esparsha.png" alt="Esparsha" style="width:200px;"><p>Merchandise Partner</p></a>

    <a href="http://www.virscent.com/" target="_blank"style="position:absolute;left:26%;top:132%;"><img src="img/Virscent.png" alt="Virscent" style="width:200px;"><p>Ethical Hacking Workshop Partner</p></a>

    <a href="http://www.reverttech.com/" target="_blank"style="position:absolute;left:48%;top:58%;"><img src="img/reverttech.png" alt="Revert Technology" style="width:200px;"><p>Robotics Partner</p></a>

    <a href="http://www.finlandlabs.com/" target="_blank"style="position:absolute;left:7%;top:267%;"><img src="img/finland_logo.png" alt="Finlandlabs" style="width:200px;"><p>Android Partner</p></a>

    <a href="http://www.orpinetechnologies.com/" target="_blank"style="position:absolute;left:26%;top:287%;"><img src="img/orpine-technology-logo.png" alt="Orphinetechnologies" style="width:200px;"><p>Technology Partner</p></a>

	<a href="https://www.freecharge.in/" target="_blank"style="position:absolute;left:48%;top:253%;"><img src="img/freecharge.jpg" alt="FreeCharge" style="width:200px;"><p>Event partners</p></a>

	<br/>

                </div>

		

	</div>

	<div class="paragraphs second-block"></div>

	<!--<div class="quick-links"><a href="i-fest.html#" data-url="products">event1</a></div>-->

</div>



<div class="contact_us hidden">

	<!-- <h1 class="tk-museo-sans">CONTACT US</h1> -->

	<div class="page_name tk-museo-sans"></div>

	<h1 class="tk-source-sans-pro"><span style="margin-top:40px;">Contact Us</span></h1>



	<h2></h2>

	<div class="paragraphs no-columns tk-source-sans-pro">

		<div style="position:relative; margin-left: 100px; margin-right: -100px">

<p>

		<!--<p style="font-size: 32px">Contact Us</p>-->



<dl>

 

 <dt><h4>Archit Agarwal - Convener(Admin)</h4>

 <a href="mailto:ifest.ca@gmail.com">ifest.ca@gmail.com</a>

<br>+91-8439557925<br><br>



 <dt><h4>Digant Ray - Convener(Finance)</h4>

 <a href="mailto:ifest.cf@gmail.com">ifest.cf@gmail.com</a>

 <br>+91-8126175768

 <br><br>

 <dt><h4>Gaurav Kapatia - IEEE Chairman</h4>

 <a href="mailto:gkapatia@gmail.com">gkapatia@gmail.com</a><br>

 +91-889583092<br><br>

</dl>

</p>

<iframe id="f2a2a9681c" name="f25aef969" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=233044826805820&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df2d2f813b%26origin%3Dhttp%253A%252F%252Fifestiitr.com%252Ff1783e69d%26domain%3Difestiitr.com%26relation%3Dparent.parent&amp;numposts=2&amp;width=400&amp;href=http%3A%2F%2Fifestiitr.com%2F" style="border: none; overflow: hidden; height:auto; width: 400px;position: fixed;left: 65%;top: 20%;background-color:white;"></iframe>



		</div>

		<!-- <h2 class="tk-source-sans-pro">The best (coloured) line to get us&nbsp;on.</h2> -->

<!--		<div class="telephone-number tk-museo-sans with-icon">1300 65 00 65</div>

		



		<form action="http://www.colouredlines.com.au/wp-content/themes/colouredlines/send-email.php" method="post">

			<label for="form_name">NAME*</label>

			<input type="text" id="form_name" name="name" />

			

			<label for="form_company">COMPANY*</label>

			<input type="text" id="form_company" name="company" />

			

			<label for="form_email">EMAIL*</label>

			<input type="text" id="form_email" name="email" />

			

			<label for="form_phone">PHONE</label>

			<input type="text" id="form_phone" name="phone" />

			

			<label for="form_subject">SUBJECT*</label>

			<input type="text" id="form_subject" name="subject" />

			

			<label for="form_message">MESSAGE*</label>

			<textarea id="form_message" name="message"></textarea>

			

			<input type="submit" value="SEND" />

		</form>

	</div>

	<br style="clear: both" /> -->

	<!--<div class="quick-links"><a href="i-fest.html#" data-url="blog">event1</a></div>-->

</div>

<div class="blog hidden">

<!-- 	<h1 class="tk-museo-sans">BLOG</h1> -->

	<div class="page_name tk-museo-sans">BLOG</div>

	<h1 class="tk-source-sans-pro"></h1>

	

	<div class="paragraphs no-columns tk-source-sans-pro">

	<!--	

	<article id="post-179" class="post-179 post type-post status-publish format-standard hentry category-uncategorized">

			<header class="entry-header">

			<time>Wednesday 17 April.</time>

						<h1 class="entry-title">

				<a href="http://www.colouredlines.com.au/bring-your-own-device-for-smbs/" rel="bookmark">Bring Your Own Device for SMBs</a>

			</h1>

								</header>--><!-- .entry-header -->



			<!--	<div class="entry-content">

			<div class="wp-caption alignnone" style="width: 535px"><a href="http://blogs.digium.com/2012/07/06/byod-for-smbs-trends-risks-and-benefits-infographic/" rel="nofollow"><img alt=" BYOD for SMBs: Trends, Risks and Benefits [Infographic]" src="http://www.colouredlines.com.au/blogs.digium.com/wp-content/uploads/2012/07/infographic-525px.jpg" width="525" height="3399" /></a><p class="wp-caption-text">(C) Digium &#8211; http://blogs.digium.com/2012/07/06/byod-for-smbs-trends-risks-and-benefits-infographic/</p></div>

					</div>--><!-- .entry-content -->

			<!--</article>--><!-- #post -->



	<!--<article id="post-176" class="post-176 post type-post status-publish format-standard hentry category-uncategorized">

				<header class="entry-header">

			<time>Sunday 17 March.</time>

						<h1 class="entry-title">

				<a href="http://www.colouredlines.com.au/understanding-unified-communications-part-one/" rel="bookmark">Understanding Unified Communications – Part One</a>

			</h1>

								</header>--><!-- .entry-header -->



			<!--	<div class="entry-content">

			<p>#</p>

					</div>--><!-- .entry-content -->

			<!--</article>--><!-- #post -->

	</div>

	<div class="quick-links"><a href="#" data-url="who_we_are">Who are we</a></div>

</div>



	</div><!-- #main .wrapper -->

</div><!-- #page -->



<script type="text/javascript">

Modernizr.load({

    test: Modernizr.input.placeholder,

    nope: [

            'js/jquery.placeholder.min.js'

          ]

});

</script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-41346820-1', 'iFest');

  ga('send', 'pageview');



</script>

</body>



</html>

