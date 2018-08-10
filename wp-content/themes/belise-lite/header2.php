<!DOCTYPE html>
<html class="csstransforms no-csstransforms3d csstransitions"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>Responsive Drop Down Menu jQuery CSS3 Using Icon Symbol</title>
	<style>@import url(http://fonts.googleapis.com/css?family=Open+Sans);

		body {
			background-color: #eee;
			background-image: url(../images/patterns/light_toast.png);
			color: #666;
			font-family: 'Open Sans', sans-serif;
			font-size: 12px;
			margin:0px;
			padding:0px;
		}
		
		a {
			color: #23dbdb;
			text-decoration: none;
		}
		
		a:hover {
			color: #000;
		}
		ol, ul {
			list-style: none;
			padding:0px;
			margin:0px;
		}
		#wrap {
			margin: 0 auto;
		}
		
		.inner {
			margin: 0 auto;
			max-width: 940px;
			padding: 0 40px;
		}
		
		.relative {
			position: relative;
		}
		
		.right {
			float: right;
		}
		
		.left {
			float: left;
		}
		
		/* HEADER */
		#wrap > header {
			background-color: #fff;
			padding-bottom: 20px;
		}
		.logo {
			display: inline-block;
			font-size: 0;
			padding-top:15px;
		}
		#navigation {
			position: absolute;
			right: 40px;
			bottom: 0px;
		}
		
		#menu-toggle {
			display: none;
			float: right;
		}
		
		/* HEADER > MENU */
		#main-menu {
			float: right;
			font-size: 0;
			margin: 10px 0;
		}
		
		#main-menu > li {
			display: inline-block;
			margin-left: 30px;
			padding: 2px 0;
		}
		
		#main-menu > li.parent {
			background-image: url(../images/plus-gray.png);
			background-size: 7px 7px;
			background-repeat: no-repeat;
			background-position: left center;
		}
		
		#main-menu > li.parent > a {
			padding-left: 14px;
		}
		
		#main-menu > li > a {
			color: #eee;
			font-size: 14px;
			line-height: 14px;
			padding: 30px 0;
			text-decoration:none;
		}
		
		#main-menu > li:hover > a,
		#main-menu > li.current-menu-item > a {
			color: #23dbdb;
		}
		
		/* HEADER > MENU > DROPDOWN */
		#main-menu li {
			position: relative;
		}
		
		ul.sub-menu { /* level 2 */
			display: none;
			left: 0px;
			top: 38px;
			padding-top: 10px;
			position: absolute;
			width: 150px;
			z-index: 9999;
		}
		
		ul.sub-menu ul.sub-menu { /* level 3+ */
			margin-top: -1px;
			padding-top: 0;
			left: 149px;
			top: 0px;
		}
		
		ul.sub-menu > li > a {
			background-color: #333;
			border: 1px solid #444;
			border-top: none;
			color: #bbb;
			display: block;
			font-size: 12px;
			line-height: 15px;
			padding: 10px 12px;
		}
		
		ul.sub-menu > li > a:hover {
			background-color: #2a2a2a; 
			color: #fff;
		}
		
		ul.sub-menu > li:first-child {
			border-top: 3px solid #23dbdb;
		}
		
		ul.sub-menu ul.sub-menu > li:first-child {
			border-top: 1px solid #444;
		}
		
		ul.sub-menu > li:last-child > a {
			border-radius: 0 0 2px 2px;
		}
		
		ul.sub-menu > li > a.parent {
			background-image: url(../images/arrow.png);
			background-size: 5px 9px;
			background-repeat: no-repeat;
			background-position: 95% center;
		}
		
		#main-menu li:hover > ul.sub-menu {
			display: block; /* show the submenu */
		}
		
		@media all and (max-width: 700px) {
		
			#navigation {
				position: static;
				margin-top: 20px;
			}
		
			#menu-toggle {
				display: block;
			}
		
			#main-menu {
				display: none;
				float: none;
			}
		
			#main-menu li {
				display: block;
				margin: 0;
				padding: 0;
			}
		
			#main-menu > li {
				margin-top: -1px;
			}
		
			#main-menu > li:first-child {
				margin-top: 0;
			}
		
			#main-menu > li > a {
				background-color: #333;
				border: 1px solid #444;
				color: #bbb;
				display: block;
				font-size: 14px;
				padding: 12px !important;
				padding: 0;
			}
		
			#main-menu li > a:hover {
				background-color: #444; 
			}
		
			#main-menu > li.parent {
				background: none !important;
				padding: 0;
			}
		
			#main-menu > li:hover > a,
			#main-menu > li.current-menu-item > a {
				border: 1px solid #444 !important;
				color: #fff !important;
			}
		
			ul.sub-menu {
				display: block;
				margin-top: -1px;
				margin-left: 20px;
				position: static;
				padding: 0;
				width: inherit;
			}
		
			ul.sub-menu > li:first-child {
				border-top: 1px solid #444 !important;
			}
		
			ul.sub-menu > li > a.parent {
				background: #333 !important;
			}
		}
		/*!
 *  Font Awesome 3.0.2
 *  the iconic font designed for use with Twitter Bootstrap
 *  -------------------------------------------------------
 *  The full suite of pictographic icons, examples, and documentation
 *  can be found at: http://fortawesome.github.com/Font-Awesome/
 *
 *  License
 *  -------------------------------------------------------
 *  - The Font Awesome font is licensed under the SIL Open Font License - http://scripts.sil.org/OFL
 *  - Font Awesome CSS, LESS, and SASS files are licensed under the MIT License -
 *    http://opensource.org/licenses/mit-license.html
 *  - The Font Awesome pictograms are licensed under the CC BY 3.0 License - http://creativecommons.org/licenses/by/3.0/
 *  - Attribution is no longer required in Font Awesome 3.0, but much appreciated:
 *    "Font Awesome by Dave Gandy - http://fortawesome.github.com/Font-Awesome"

 *  Contact
 *  -------------------------------------------------------
 *  Email: dave@davegandy.com
 *  Twitter: http://twitter.com/fortaweso_me
 *  Work: Lead Product Designer @ http://kyruus.com
 */

@font-face {
  font-family:'FontAwesome';
  src:url('../font/fontawesome-webfont.eot?v=3.0.1');
  src:url('../font/fontawesome-webfont.eot?#iefix&v=3.0.1') format('embedded-opentype'),
  url('../font/fontawesome-webfont.woff?v=3.0.1') format('woff'),
  url('../font/fontawesome-webfont.ttf?v=3.0.1') format('truetype');
  font-weight:normal;
  font-style:normal
}

i {
	font-size: 14px;
}

i.large {
	font-size: 30px;
	margin-right: 10px;
	margin-bottom: 10px;
}

[class^="icon-"],[class*=" icon-"]{font-family:FontAwesome;font-weight:normal;font-style:normal;text-decoration:inherit;-webkit-font-smoothing:antialiased;display:inline;width:auto;height:auto;line-height:normal;vertical-align:baseline;background-image:none;background-position:0 0;background-repeat:repeat;margin-top:0}.icon-white,.nav-pills>.active>a>[class^="icon-"],.nav-pills>.active>a>[class*=" icon-"],.nav-list>.active>a>[class^="icon-"],.nav-list>.active>a>[class*=" icon-"],.navbar-inverse .nav>.active>a>[class^="icon-"],.navbar-inverse .nav>.active>a>[class*=" icon-"],.dropdown-menu>li>a:hover>[class^="icon-"],.dropdown-menu>li>a:hover>[class*=" icon-"],.dropdown-menu>.active>a>[class^="icon-"],.dropdown-menu>.active>a>[class*=" icon-"],.dropdown-submenu:hover>a>[class^="icon-"],.dropdown-submenu:hover>a>[class*=" icon-"]{background-image:none}[class^="icon-"]:before,[class*=" icon-"]:before{text-decoration:inherit;display:inline-block;speak:none}a [class^="icon-"],a [class*=" icon-"]{display:inline-block}.icon-large:before{vertical-align:-10%;font-size:1.3333333333333333em}.btn [class^="icon-"],.nav [class^="icon-"],.btn [class*=" icon-"],.nav [class*=" icon-"]{display:inline}.btn [class^="icon-"].icon-large,.nav [class^="icon-"].icon-large,.btn [class*=" icon-"].icon-large,.nav [class*=" icon-"].icon-large{line-height:.9em}.btn [class^="icon-"].icon-spin,.nav [class^="icon-"].icon-spin,.btn [class*=" icon-"].icon-spin,.nav [class*=" icon-"].icon-spin{display:inline-block}.nav-tabs [class^="icon-"],.nav-pills [class^="icon-"],.nav-tabs [class*=" icon-"],.nav-pills [class*=" icon-"],.nav-tabs [class^="icon-"].icon-large,.nav-pills [class^="icon-"].icon-large,.nav-tabs [class*=" icon-"].icon-large,.nav-pills [class*=" icon-"].icon-large{line-height:.9em}li [class^="icon-"],.nav li [class^="icon-"],li [class*=" icon-"],.nav li [class*=" icon-"]{display:inline-block;width:1.25em;text-align:center}li [class^="icon-"].icon-large,.nav li [class^="icon-"].icon-large,li [class*=" icon-"].icon-large,.nav li [class*=" icon-"].icon-large{width:1.5625em}ul.icons{list-style-type:none;text-indent:-0.75em}ul.icons li [class^="icon-"],ul.icons li [class*=" icon-"]{width:.75em}.icon-muted{color:#eee}.icon-border{border:solid 1px #eee;padding:.2em .25em .15em;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.icon-2x{font-size:2em}.icon-2x.icon-border{border-width:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.icon-3x{font-size:3em}.icon-3x.icon-border{border-width:3px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.icon-4x{font-size:4em}.icon-4x.icon-border{border-width:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.pull-right{float:right}.pull-left{float:left}[class^="icon-"].pull-left,[class*=" icon-"].pull-left{margin-right:.3em}[class^="icon-"].pull-right,[class*=" icon-"].pull-right{margin-left:.3em}.btn [class^="icon-"].pull-left.icon-2x,.btn [class*=" icon-"].pull-left.icon-2x,.btn [class^="icon-"].pull-right.icon-2x,.btn [class*=" icon-"].pull-right.icon-2x{margin-top:.18em}.btn [class^="icon-"].icon-spin.icon-large,.btn [class*=" icon-"].icon-spin.icon-large{line-height:.8em}.btn.btn-small [class^="icon-"].pull-left.icon-2x,.btn.btn-small [class*=" icon-"].pull-left.icon-2x,.btn.btn-small [class^="icon-"].pull-right.icon-2x,.btn.btn-small [class*=" icon-"].pull-right.icon-2x{margin-top:.25em}.btn.btn-large [class^="icon-"],.btn.btn-large [class*=" icon-"]{margin-top:0}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x,.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-top:.05em}.btn.btn-large [class^="icon-"].pull-left.icon-2x,.btn.btn-large [class*=" icon-"].pull-left.icon-2x{margin-right:.2em}.btn.btn-large [class^="icon-"].pull-right.icon-2x,.btn.btn-large [class*=" icon-"].pull-right.icon-2x{margin-left:.2em}.icon-spin{display:inline-block;-moz-animation:spin 2s infinite linear;-o-animation:spin 2s infinite linear;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear}@-moz-keyframes spin{0%{-moz-transform:rotate(0deg)}100%{-moz-transform:rotate(359deg)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg)}}@-o-keyframes spin{0%{-o-transform:rotate(0deg)}100%{-o-transform:rotate(359deg)}}@-ms-keyframes spin{0%{-ms-transform:rotate(0deg)}100%{-ms-transform:rotate(359deg)}}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}@-moz-document url-prefix(){.icon-spin{height:.9em}.btn .icon-spin{height:auto}.icon-spin.icon-large{height:1.25em}.btn .icon-spin.icon-large{height:.75em}}.icon-glass:before{content:"\f000"}.icon-music:before{content:"\f001"}.icon-search:before{content:"\f002"}.icon-envelope:before{content:"\f003"}.icon-heart:before{content:"\f004"}.icon-star:before{content:"\f005"}.icon-star-empty:before{content:"\f006"}.icon-user:before{content:"\f007"}.icon-film:before{content:"\f008"}.icon-th-large:before{content:"\f009"}.icon-th:before{content:"\f00a"}.icon-th-list:before{content:"\f00b"}.icon-ok:before{content:"\f00c"}.icon-remove:before{content:"\f00d"}.icon-zoom-in:before{content:"\f00e"}.icon-zoom-out:before{content:"\f010"}.icon-off:before{content:"\f011"}.icon-signal:before{content:"\f012"}.icon-cog:before{content:"\f013"}.icon-trash:before{content:"\f014"}.icon-home:before{content:"\f015"}.icon-file:before{content:"\f016"}.icon-time:before{content:"\f017"}.icon-road:before{content:"\f018"}.icon-download-alt:before{content:"\f019"}.icon-download:before{content:"\f01a"}.icon-upload:before{content:"\f01b"}.icon-inbox:before{content:"\f01c"}.icon-play-circle:before{content:"\f01d"}.icon-repeat:before{content:"\f01e"}.icon-refresh:before{content:"\f021"}.icon-list-alt:before{content:"\f022"}.icon-lock:before{content:"\f023"}.icon-flag:before{content:"\f024"}.icon-headphones:before{content:"\f025"}.icon-volume-off:before{content:"\f026"}.icon-volume-down:before{content:"\f027"}.icon-volume-up:before{content:"\f028"}.icon-qrcode:before{content:"\f029"}.icon-barcode:before{content:"\f02a"}.icon-tag:before{content:"\f02b"}.icon-tags:before{content:"\f02c"}.icon-book:before{content:"\f02d"}.icon-bookmark:before{content:"\f02e"}.icon-print:before{content:"\f02f"}.icon-camera:before{content:"\f030"}.icon-font:before{content:"\f031"}.icon-bold:before{content:"\f032"}.icon-italic:before{content:"\f033"}.icon-text-height:before{content:"\f034"}.icon-text-width:before{content:"\f035"}.icon-align-left:before{content:"\f036"}.icon-align-center:before{content:"\f037"}.icon-align-right:before{content:"\f038"}.icon-align-justify:before{content:"\f039"}.icon-list:before{content:"\f03a"}.icon-indent-left:before{content:"\f03b"}.icon-indent-right:before{content:"\f03c"}.icon-facetime-video:before{content:"\f03d"}.icon-picture:before{content:"\f03e"}.icon-pencil:before{content:"\f040"}.icon-map-marker:before{content:"\f041"}.icon-adjust:before{content:"\f042"}.icon-tint:before{content:"\f043"}.icon-edit:before{content:"\f044"}.icon-share:before{content:"\f045"}.icon-check:before{content:"\f046"}.icon-move:before{content:"\f047"}.icon-step-backward:before{content:"\f048"}.icon-fast-backward:before{content:"\f049"}.icon-backward:before{content:"\f04a"}.icon-play:before{content:"\f04b"}.icon-pause:before{content:"\f04c"}.icon-stop:before{content:"\f04d"}.icon-forward:before{content:"\f04e"}.icon-fast-forward:before{content:"\f050"}.icon-step-forward:before{content:"\f051"}.icon-eject:before{content:"\f052"}.icon-chevron-left:before{content:"\f053"}.icon-chevron-right:before{content:"\f054"}.icon-plus-sign:before{content:"\f055"}.icon-minus-sign:before{content:"\f056"}.icon-remove-sign:before{content:"\f057"}.icon-ok-sign:before{content:"\f058"}.icon-question-sign:before{content:"\f059"}.icon-info-sign:before{content:"\f05a"}.icon-screenshot:before{content:"\f05b"}.icon-remove-circle:before{content:"\f05c"}.icon-ok-circle:before{content:"\f05d"}.icon-ban-circle:before{content:"\f05e"}.icon-arrow-left:before{content:"\f060"}.icon-arrow-right:before{content:"\f061"}.icon-arrow-up:before{content:"\f062"}.icon-arrow-down:before{content:"\f063"}.icon-share-alt:before{content:"\f064"}.icon-resize-full:before{content:"\f065"}.icon-resize-small:before{content:"\f066"}.icon-plus:before{content:"\f067"}.icon-minus:before{content:"\f068"}.icon-asterisk:before{content:"\f069"}.icon-exclamation-sign:before{content:"\f06a"}.icon-gift:before{content:"\f06b"}.icon-leaf:before{content:"\f06c"}.icon-fire:before{content:"\f06d"}.icon-eye-open:before{content:"\f06e"}.icon-eye-close:before{content:"\f070"}.icon-warning-sign:before{content:"\f071"}.icon-plane:before{content:"\f072"}.icon-calendar:before{content:"\f073"}.icon-random:before{content:"\f074"}.icon-comment:before{content:"\f075"}.icon-magnet:before{content:"\f076"}.icon-chevron-up:before{content:"\f077"}.icon-chevron-down:before{content:"\f078"}.icon-retweet:before{content:"\f079"}.icon-shopping-cart:before{content:"\f07a"}.icon-folder-close:before{content:"\f07b"}.icon-folder-open:before{content:"\f07c"}.icon-resize-vertical:before{content:"\f07d"}.icon-resize-horizontal:before{content:"\f07e"}.icon-bar-chart:before{content:"\f080"}.icon-twitter-sign:before{content:"\f081"}.icon-facebook-sign:before{content:"\f082"}.icon-camera-retro:before{content:"\f083"}.icon-key:before{content:"\f084"}.icon-cogs:before{content:"\f085"}.icon-comments:before{content:"\f086"}.icon-thumbs-up:before{content:"\f087"}.icon-thumbs-down:before{content:"\f088"}.icon-star-half:before{content:"\f089"}.icon-heart-empty:before{content:"\f08a"}.icon-signout:before{content:"\f08b"}.icon-linkedin-sign:before{content:"\f08c"}.icon-pushpin:before{content:"\f08d"}.icon-external-link:before{content:"\f08e"}.icon-signin:before{content:"\f090"}.icon-trophy:before{content:"\f091"}.icon-github-sign:before{content:"\f092"}.icon-upload-alt:before{content:"\f093"}.icon-lemon:before{content:"\f094"}.icon-phone:before{content:"\f095"}.icon-check-empty:before{content:"\f096"}.icon-bookmark-empty:before{content:"\f097"}.icon-phone-sign:before{content:"\f098"}.icon-twitter:before{content:"\f099"}.icon-facebook:before{content:"\f09a"}.icon-github:before{content:"\f09b"}.icon-unlock:before{content:"\f09c"}.icon-credit-card:before{content:"\f09d"}.icon-rss:before{content:"\f09e"}.icon-hdd:before{content:"\f0a0"}.icon-bullhorn:before{content:"\f0a1"}.icon-bell:before{content:"\f0a2"}.icon-certificate:before{content:"\f0a3"}.icon-hand-right:before{content:"\f0a4"}.icon-hand-left:before{content:"\f0a5"}.icon-hand-up:before{content:"\f0a6"}.icon-hand-down:before{content:"\f0a7"}.icon-circle-arrow-left:before{content:"\f0a8"}.icon-circle-arrow-right:before{content:"\f0a9"}.icon-circle-arrow-up:before{content:"\f0aa"}.icon-circle-arrow-down:before{content:"\f0ab"}.icon-globe:before{content:"\f0ac"}.icon-wrench:before{content:"\f0ad"}.icon-tasks:before{content:"\f0ae"}.icon-filter:before{content:"\f0b0"}.icon-briefcase:before{content:"\f0b1"}.icon-fullscreen:before{content:"\f0b2"}.icon-group:before{content:"\f0c0"}.icon-link:before{content:"\f0c1"}.icon-cloud:before{content:"\f0c2"}.icon-beaker:before{content:"\f0c3"}.icon-cut:before{content:"\f0c4"}.icon-copy:before{content:"\f0c5"}.icon-paper-clip:before{content:"\f0c6"}.icon-save:before{content:"\f0c7"}.icon-sign-blank:before{content:"\f0c8"}.icon-reorder:before{content:"\f0c9"}.icon-list-ul:before{content:"\f0ca"}.icon-list-ol:before{content:"\f0cb"}.icon-strikethrough:before{content:"\f0cc"}.icon-underline:before{content:"\f0cd"}.icon-table:before{content:"\f0ce"}.icon-magic:before{content:"\f0d0"}.icon-truck:before{content:"\f0d1"}.icon-pinterest:before{content:"\f0d2"}.icon-pinterest-sign:before{content:"\f0d3"}.icon-google-plus-sign:before{content:"\f0d4"}.icon-google-plus:before{content:"\f0d5"}.icon-money:before{content:"\f0d6"}.icon-caret-down:before{content:"\f0d7"}.icon-caret-up:before{content:"\f0d8"}.icon-caret-left:before{content:"\f0d9"}.icon-caret-right:before{content:"\f0da"}.icon-columns:before{content:"\f0db"}.icon-sort:before{content:"\f0dc"}.icon-sort-down:before{content:"\f0dd"}.icon-sort-up:before{content:"\f0de"}.icon-envelope-alt:before{content:"\f0e0"}.icon-linkedin:before{content:"\f0e1"}.icon-undo:before{content:"\f0e2"}.icon-legal:before{content:"\f0e3"}.icon-dashboard:before{content:"\f0e4"}.icon-comment-alt:before{content:"\f0e5"}.icon-comments-alt:before{content:"\f0e6"}.icon-bolt:before{content:"\f0e7"}.icon-sitemap:before{content:"\f0e8"}.icon-umbrella:before{content:"\f0e9"}.icon-paste:before{content:"\f0ea"}.icon-lightbulb:before{content:"\f0eb"}.icon-exchange:before{content:"\f0ec"}.icon-cloud-download:before{content:"\f0ed"}.icon-cloud-upload:before{content:"\f0ee"}.icon-user-md:before{content:"\f0f0"}.icon-stethoscope:before{content:"\f0f1"}.icon-suitcase:before{content:"\f0f2"}.icon-bell-alt:before{content:"\f0f3"}.icon-coffee:before{content:"\f0f4"}.icon-food:before{content:"\f0f5"}.icon-file-alt:before{content:"\f0f6"}.icon-building:before{content:"\f0f7"}.icon-hospital:before{content:"\f0f8"}.icon-ambulance:before{content:"\f0f9"}.icon-medkit:before{content:"\f0fa"}.icon-fighter-jet:before{content:"\f0fb"}.icon-beer:before{content:"\f0fc"}.icon-h-sign:before{content:"\f0fd"}.icon-plus-sign-alt:before{content:"\f0fe"}.icon-double-angle-left:before{content:"\f100"}.icon-double-angle-right:before{content:"\f101"}.icon-double-angle-up:before{content:"\f102"}.icon-double-angle-down:before{content:"\f103"}.icon-angle-left:before{content:"\f104"}.icon-angle-right:before{content:"\f105"}.icon-angle-up:before{content:"\f106"}.icon-angle-down:before{content:"\f107"}.icon-desktop:before{content:"\f108"}.icon-laptop:before{content:"\f109"}.icon-tablet:before{content:"\f10a"}.icon-mobile-phone:before{content:"\f10b"}.icon-circle-blank:before{content:"\f10c"}.icon-quote-left:before{content:"\f10d"}.icon-quote-right:before{content:"\f10e"}.icon-spinner:before{content:"\f110"}.icon-circle:before{content:"\f111"}.icon-reply:before{content:"\f112"}.icon-github-alt:before{content:"\f113"}.icon-folder-close-alt:before{content:"\f114"}.icon-folder-open-alt:before{content:"\f115"}
		</style>
	<!-- <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/menu.css"> -->

    
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/function.js"></script>

</head>
<body>
<!--<div style="background:#0099cc; font-size:22px; text-align:center; color:#FFF; font-weight:bold; height:100px; padding-top:50px;">Responsive Drop Down Menu jQuery CSS3 Using Icon Symbol</div>-->
<div id="wrap">
	<header>
		<div class="inner relative">
			<a class="logo" style="position: relative;
			right: -334px;" href="http://www.freshdesignweb.com"><img src="https://scontent.fbdo2-1.fna.fbcdn.net/v/t1.0-9/38843440_2160665570628947_5306125055585943552_n.jpg?_nc_cat=0&oh=f72390f0430b385369ce953f9507dd38&oe=5C065A16" alt="fresh design web"></a>
			<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
			<nav id="navigation">
				<ul id="main-menu">
					<li class="current-menu-item" style="position: relative;
					right: 506px;"><a href="http://www.freshdesignweb.com">Home</a></li>
					<li class="parent" >
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html" style="position: relative;
right: 500px;">Features</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-wrench"></i> Elements</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-credit-card"></i>  Pricing Tables</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html"><i class="icon-gift"></i> Icons</a></li>
							<li>
								<a class="parent" href="#"><i class="icon-file-alt"></i> Pages</a>
								<ul class="sub-menu">
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Full Width</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Left Sidebar</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Right Sidebar</a></li>
									<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Portfolio</a></li>
					<li class="parent">
						<a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Blog</a>
						<ul class="sub-menu">
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Large Image</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Medium Image</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Masonry</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Double Sidebar</a></li>
							<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Single Post</a></li>
						</ul>
					</li>
					<li><a href="http://www.freshdesignweb.com/responsive-drop-down-menu-jquery-css3-using-icon-symbol.html">Contact</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>	
</div>    
</body></html>